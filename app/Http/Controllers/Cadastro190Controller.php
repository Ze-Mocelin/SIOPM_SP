<?php

namespace App\Http\Controllers;

use App\Models\Cadastro190;
use App\Models\NaturezaOcorrencia;
use App\Models\Veiculocrime;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth; // uso da autenticação do usuario logado
use Carbon\Carbon;

class Cadastro190Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$cad190 = Cadastro190::all();
        return view('cadastro190');//, compact('cad190'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            //Roles de validación
            $rules = [
                'inputCidade' => 'required',
                'inputEndereco' => 'required',
                'inputNumero' => 'required',
                'inputSelectAdress' => 'required',
                'inputBatalhao' => 'required',
                'inputCompanhia' => 'required',
                'inputNaturezaocorrencia' => 'required',
            ];
            //Posibles mensajes de error de validación
            $messages = [
                'inputTelefone.required' => 'Campo obrigatório',
                'inputCidade.required' => 'Campo obrigatório',
                'inputEndereco.required' => 'Campo obrigatório',
                'inputNumero.required' => 'Campo obrigatório',
                'inputSelectAdress.required' => 'Campo obrigatório',
                'inputBatalhao.required' => 'Campo obrigatório',
                'inputCompanhia.required' => 'Campo obrigatório',
                'inputNaturezaocorrencia.required' => 'Campo obrigatório',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            //Si la validación no es correcta redireccionar al formulario con los errores
            if ($validator->fails()) {
                return redirect()->back()->withInput()->with('error', "Ops! Erro ao validar dados")->withErrors($validator);



            } else { // criado novo categoria
                if($request->step == 1){
                    session()->put("step1",[
                        'inputSolicitante'=>$request->inputSolicitante,
                        'checkboxAnonimo' =>$request->checkboxAnonimo,
                        'inputTelefone'=>$request->inputTelefone,
                        'inputCidade'=>$request->inputCidade,
                        'inputEndereco'=>$request->inputEndereco,
                        'inputNumero'=>$request->inputNumero,
                        'inputComplemento'=>$request->inputComplemento,
                        'inputSelectAdress'=>$request->inputSelectAdress,
                        'inputReferencia'=>$request->inputReferencia,
                        'inputBatalhao'=>$request->inputBatalhao,
                        'inputCompanhia'=>$request->inputCompanhia,
                        'inputNaturezaocorrencia'=>$request->inputNaturezaocorrencia,
                        'checkPolicial'=>$request->checkPolicial,
                        'inputHidden_celular_numeroimei'=>$request->inputHidden_celular_numeroimei,
                        'inputHidden_celular_modelo'=>$request->inputHidden_celular_modelo,
                        'inputHidden_celular_marca'=>$request->inputHidden_celular_marca,
                        'inputHidden_celular_situacao'=>$request->inputHidden_celular_situacao,
                        'inputHidden_veiculo_placa'=>$request->inputHidden_veiculo_placa,
                        'inputHidden_veiculo_marca'=>$request->inputHidden_veiculo_marca,
                        'inputHidden_veiculo_modelo'=>$request->inputHidden_veiculo_modelo,
                        'inputHidden_veiculo_cor'=>$request->inputHidden_veiculo_cor,
                        'inputHidden_veiculo_chassi'=>$request->inputHidden_veiculo_chassi,
                        'inputHidden_veiculo_situacao'=>$request->inputHidden_veiculo_situacao,
                        'inputHidden_pessoas_rg'=>$request->inputHidden_pessoas_rg,
                        'inputHidden_pessoas_nome'=>$request->inputHidden_pessoas_nome,
                        'inputHidden_pessoas_situacao'=>$request->inputHidden_pessoas_situacao,


                    ]);
                }


                //pega a natureza da ocorrencia e deixa somente o codigo para pesquisar no BD e buscar o ID
                $naturezaDescricao = e($request->inputNaturezaocorrencia);
                $naturezaCOD = substr($naturezaDescricao, 0, 3); // Obtém os primeiros 3 caracteres
                $naturezaID = NaturezaOcorrencia::where('codigo', $naturezaCOD)->first();

                if ($naturezaID) {
                    // O código da natureza foi encontrado no banco de dados
                    $naturezaocorrencia_id = $naturezaID['id'];
                } else {
                    // O código da natureza não foi encontrado, exiba uma mensagem de erro
                    return redirect()->back()->withInput()->with('error', 'Código da natureza da ocorrência é inválido. Por favor, digite um código válido.');
                }
                date_default_timezone_set('America/Sao_Paulo');
                $ocorrencia = new Cadastro190;
                $ocorrencia->nome = Auth::user()->identificacao.' '. Auth::user()->name;
                $ocorrencia->horario = Carbon::now()->format('H:m:s');
                $ocorrencia->solicitante = e($request->inputSolicitante);
                $ocorrencia->anonimo = isset($request->checkboxAnonimo) ? 1 : 0;
                $ocorrencia->telefone = e($request->inputTelefone);
                $ocorrencia->cidade = e($request->inputCidade);
                $ocorrencia->endereco = e($request->inputEndereco);
                $ocorrencia->numero = e($request->inputNumero);
                $ocorrencia->complemento = e($request->inputComplemento);
                $ocorrencia->bairro = e($request->inputSelectAdress);
                $ocorrencia->referencia = e($request->inputReferencia);
                $ocorrencia->bpmm = e($request->inputBatalhao );
                $ocorrencia->cia = e($request->inputCompanhia);
                $ocorrencia->naturezaocorrencia = e($request->inputNaturezaocorrencia);
                $ocorrencia->natureza_ocorrencia_id = $naturezaocorrencia_id;
                $ocorrencia->policialemperigo = isset($request->checkPolicial) ? 1 : 0;
                $ocorrencia->celular_numeroimei = e($request->inputHidden_celular_numeroimei);
                $ocorrencia->celular_modelo = e($request->inputHidden_celular_modelo);
                $ocorrencia->celular_marca = e($request->inputHidden_celular_marca);
                $ocorrencia->celular_situacao = e($request->inputHidden_celular_situacao);
                $ocorrencia->veiculo_placa = e($request->inputHidden_veiculo_placa);
                $ocorrencia->veiculo_marca = e($request->inputHidden_veiculo_marca);
                $ocorrencia->veiculo_modelo = e($request->inputHidden_veiculo_modelo);
                $ocorrencia->veiculo_cor = e($request->inputHidden_veiculo_cor);
                $ocorrencia->veiculo_chassi = e($request->inputHidden_veiculo_chassi);
                $ocorrencia->veiculo_situacao = e($request->inputHidden_veiculo_situacao);
                $ocorrencia->pessoas_rg = e($request->inputHidden_pessoas_rg);
                $ocorrencia->pessoas_nome = e($request->inputHidden_pessoas_nome);
                $ocorrencia->pessoas_situacao = e($request->inputHidden_pessoas_situacao);
                $ocorrencia->status = 1;
                $ocorrencia->visualizacao = 0;
                $ocorrencia->atendimento = 0;
                $ocorrencia->situacao = 0;
                $ocorrencia->log = "";
                $ocorrencia->user_id = Auth::user()->id;
                $ocorrencia->matricula = Auth::user()->matricula;
                if ($ocorrencia->save()) {
                    $cadastro190_id = $ocorrencia->id;
                    if(isset($request->inputHidden_veiculo_placa)){
                        $veiculo = new Veiculocrime;
                        $veiculo -> placa =e($request->inputHidden_veiculo_placa);
                        $veiculo-> marca = e($request->inputHidden_veiculo_marca);
                        $veiculo-> modelo = e($request->inputHidden_veiculo_modelo);
                        $veiculo-> cor = e($request->inputHidden_veiculo_cor);
                        $veiculo-> chassis = e($request->inputHidden_veiculo_chassi);
                        $veiculo-> situacao = e($request->inputHidden_veiculo_situacao);
                        $veiculo-> cadastro190_id = $cadastro190_id;
                        $veiculo-> status = e($request->inputHidden_veiculo_situacao);
                        $veiculo-> user_id = Auth::user()->id;
                        $veiculo->save();

                    }
                    return view('pageQuestion', compact('ocorrencia', 'cadastro190_id'))->with($cadastro190_id);
                    // return redirect()->back()->with('message', 'Ok! Ocorrência registrada com sucesso!');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Ops! Ocorreu algum problema ao salvar os dados.');
                }
                return redirect()->back()->withInput()->with('status', 'Ops! Ocorrência já cadastrada.');
            }
        }
    }

    public function savestep(Request $request){
        if($request->step == 1){
            session()->put("step1",['inputSolicitante'=>$request->inputSolicitante]);
        }
        dd(session()->all());


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
    public function show(Cadastro190 $cadastro190)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cadastro190 $cadastro190)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cadastro190 $cadastro190)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cadastro190 $cadastro190)
    {
        //
    }
}
