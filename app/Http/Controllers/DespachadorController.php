<?php

namespace App\Http\Controllers;

use App\Models\Despachador;
use App\Models\Cadastro190;
use Illuminate\Http\Request;
use Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado

class DespachadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bpmm = session('userBPMM');

        if ($bpmm) {
            $ocorrencias = Cadastro190::where('bpmm', $bpmm)->get()->toArray();;
        } else {
            $ocorrencias = Cadastro190::all();
        }

        return view('despachador', compact('ocorrencias'));
    }

    public function getOcorrency(Request $request){
        if ($request->ajax()) {
            $data = Cadastro190::select('id', 'endereco','numero','bpmm', 'cia','naturezaocorrencia','created_at');

            return DataTables::of($data)->addIndexColumn()

            ->addColumn('action', function ($data) {
                $btn = '<input type="checkbox" class="despacho-checkbox">';
                return $btn;
            })
            ->addColumn('status', function ($data) {
                $btn = 'N';
                return $btn;
            })
            ->addColumn('bpm-cia', function ($data) {
                $btn = "{$data->bpmm} {$data->cia}";
                return $btn;
            })
            ->addColumn('endereco', function ($data) {
                $btn = "{$data->endereco}, {$data->numero}";
                return $btn;
            })

            ->editColumn('naturezaocorrencia', function ($row) {
                return explode('-',$row->naturezaocorrencia)[0];
            })
            ->rawColumns(['action','status','bpm-cia','endereco',])
                ->make(true);
        }
    }

    public function despachadorobservar(Request $request){
        $rules = [
            'descricao_personalizada' => 'required',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'descricao_personalizada.required' => 'Campo obrigatório',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator)
                    ->with('error', 'Ops! Verifique os dados informados.');
        }else{

            $descricao_personalizada = e($request->descricao_personalizada);


            if (Cadastro190::where('id', '=', $request->id)
                ->update(['observacao' => $descricao_personalizada,
                          'visualizacao' => 1,
                          'log' => Auth::user()->identificacao.' '.Auth::user()->matricula.' '.Auth::user()->name.'('.Auth::user()->id.') observou ocorrência;',

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Ocorreêcia atualizado com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar o status da ocorrência.');
            }
        }
    }

    public function despachadorredirecionar(Request $request){
        $rules = [
            'bpmm' => 'required',
            'cia' => 'required',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'bpmm.required' => 'Campo obrigatório',
            'cia.required' => 'Campo obrigatório',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator)
                    ->with('error', 'Ops! Verifique os dados informados.');
        }else{
            $bpmm = e($request->bpmm);
            $bpmms = e($request->bpmmSelect);
            $especialidades = e($request->especialidades);
            $bombeiros = e($request->bomberiros);
            $observacao=e($request->observacao);
            if($bpmm=='bpmm'){
                $bpmmSelect = $bpmms;
            }
            if($bpmm=='especialidadese'){
                $bpmmSelect = $especialidades;
            }
            if($bpmm=='bombeiros'){
                $bpmmSelect = $bombeiros;
            }

            $ocorrencia= Cadastro190::where('id', '=', $request->id)->get();
            if (Cadastro190::where('id', '=', $request->id)
                ->update(['bpmm' => $bpmmSelect,
                          'log' => 'Redirecionado do batalhao'.$ocorrencia->bpmm.' '.$ocorrencia->cia.';',

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Ocorreêcia atualizado com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar o status da ocorrência.');
            }
        }
    }

    public function despachadorobservarocorrencias(Request $request){
        $rules = [
            'observacao' => 'required',
            'vtr' => 'required',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'observacao.required' => 'Campo obrigatório',
            'vtr.required' => 'Campo obrigatório',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator)
                    ->with('error', 'Ops! Verifique os dados informados.');
        }else{
            $observacao = e($request->observacao);
            $vtr = e($request->vtr);


            $ocorrencia= Cadastro190::where('id', '=', $request->id)->first();
            if (Cadastro190::where('id', '=', $request->id)
                ->update(['observacao' => $ocorrencia->observacao.' - '.$observacao,
                          'vtr'=> $vtr,

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Ocorreêcia atualizado com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar o status da ocorrência.');
            }
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function organogramadespachador(){
        return view('organograma_batalhoes');
    }

    public function organograma190(){
        return view('organograma190');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Despachador $despachador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Despachador $despachador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Despachador $despachador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Despachador $despachador)
    {
        //
    }
}
