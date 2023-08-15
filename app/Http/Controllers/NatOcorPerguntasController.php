<?php

namespace App\Http\Controllers;

use App\Models\NatOcorPerguntas;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado

class NatOcorPerguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $natocorperguntas=NatOcorPerguntas::all();

        return view("natocorperguntas", compact('natocorperguntas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $rules = [
            'naturezaocorrencia' => 'required',
            'prioridade' => 'required',
            'tipo' => 'required',
            'pergunta' =>'required|min:1|max:200|',
            'codigo' => 'required|min:1|max:1000',
            'descricao' => 'required',
            'textoauxiliar' => 'required'

        ];
        //Posibles mensajes de error de validación
        $messages = [
            'naturezaocorrencia.required' => 'Campo obrigatório',
            'prioridade.required' => 'Campo obrigatório',
            'tipo.required' => 'Campo obrigatório',
            'pergunta.required' => 'Campo obrigatório',
            'codigo.required'=>'Campo obrigatório',
            'codigo.min' => 'Mínimo de caracteres é 1',
            'codigo.max' => 'Máximo de caracteres são 1000',
            'descricao.required' => 'Campo obrigatório',
            'textoauxiliar.required' => 'Campo obrigatório',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
//dd($validator);
        //Si la validación no es correcta redireccionar al formulario con los errores
        if ($validator->fails()){
            return redirect()->back()->withInput()->with('error', "Ops! Erro ao validar dados")->withErrors($validator);
        }
        else{ // criado novo categoria
            $n = new NatOcorPerguntas();
            $n -> naturezaocorrencia = e($request->naturezaocorrencia);
            $n -> prioridade = e($request->prioridade);
            $n -> tipo = e($request->tipo);
            $n -> pergunta = e($request->pergunta);
            $n -> descricao = e($request->descricao);
            $n -> texto_auxiliar = e($request->textoauxiliar);
            $n -> codigo = html_entity_decode(e($request->codigo));
            $n -> id_user = Auth::user()->id;
            $n -> status = 1;

            if ($n->save()){
                return redirect()->back()->with('message', 'Ok! Pergunta cadastrada com sucesso!');
            }else{
                return redirect()->back()->withInput()->with('error', 'Ops! Ocorreu algum problema ao salvar os dados.');
            }
            return redirect()->back()->withInput()->with('status', 'Ops! Natureza da ocorrência já cadastrada.');
        }
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
    public function show(NatOcorPerguntas $natOcorPerguntas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $rules = [
            'status' => 'required',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'status.required' => 'Campo obrigatório',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator)
                    ->with('error', 'Ops! Verifique os dados informados.');
        }else{
            $status = e($request->status);


            if (NatOcorPerguntas::where('id', '=', $request->id)
                ->update(['status' => $status,

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Natureza da ocorrência pergunta atualizada com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar o status da pergunta.');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NatOcorPerguntas $natOcorPerguntas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NatOcorPerguntas $natOcorPerguntas)
    {
        //
    }
}
