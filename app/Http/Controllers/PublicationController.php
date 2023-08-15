<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Validator;


class PublicationController extends Controller
{
    public function index()
    {

        $informacoesPath = public_path('informacoes');
        $folders = File::directories($informacoesPath);

        $pastaDocumentos = [];
        foreach ($folders as $folder) {
            $pasta = basename($folder);
            $documentos = scandir($folder);
            $quantidadeDocumentos = count(array_filter($documentos, function ($item) use ($folder) {
                return is_file($folder . DIRECTORY_SEPARATOR . $item);
            }));

            $pastaDocumentos[$pasta] = $quantidadeDocumentos;
        }

        return view('publications',compact('pastaDocumentos'));
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post'))
        {
            //Roles de validación
            $rules = [
                'name' => 'required|min:1|max:100',
                'description' =>'required|min:1|max:1000',
                //'folder' => 'required',
                'file' => 'required|file|max:10000',
                'type' => 'required'

            ];
            //Posibles mensajes de error de validación
            $messages = [
                'name.required' => 'Campo obrigatório',
                'name.min' => 'Mínimo de caracteres é 1',
                'name.max' => 'Máximo de caracteres são 100',
                'description.required' => 'Campo obrigatório',
                'description.min' => 'Mínimo de caracteres é 1',
                'description.max' => 'Máximo de caracteres são 1000',
                //'folder.required' => 'Campo obrigatório',
                'file.required' => 'Campo obrigatório',
                'name.file.max' => 'Tamanho máximo 10MB',
                'type' => 'Campo obrigatório'
            ];

            $validator = Validator::make($request->all(), $rules, $messages);
//dd($validator);
            //Si la validación no es correcta redireccionar al formulario con los errores
            if ($validator->fails()){
                return redirect()->back()->withInput()->with('error', "Ops! Erro ao validar dados.")->withErrors($validator);
            }

            else{
                $file_name = $request->name;
                $description = $request->description;
                $data_inicio = $request->data_inicio;
                $data_termino = $request->data_termino;
                $tags = $request->tags;
                $type = $request->input('type');
                if($type==1){
                    $folder='sistema';
                };

                if($type==2){
                    $folder='cadastro_ocorrencia';
                }
                ;
                if($type==3){
                    $folder='instrucoes_sistema';
                }
                ;
                if($type==4){
                    $folder='ordem_servico';
                }
                ;
                if($type==5){
                    $folder='instrucoes_icc';
                }

                $file = $request->file('file');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $fileName = str_replace(" ", "_", $fileName);
                $file->move(public_path('informacoes/'.$folder), $fileName);
                $id_user = Auth::user()->id;

                /*type
                0">Sem categoria
                1">Sistema
                2">Cadastro de ocorrências
                3">Instruções sistema
                4">Ordem de serviço
                5">Instruções ICC*/

                Publication::create([
                    'title' => $file_name,
                    'description' => $description,
                    'data_inicio' => $data_inicio,
                    'data_termino' => $data_termino,
                    'tags' => $tags,
                    'type' => $request->input('type'),
                    'file_folder' => 'instrucoes',
                    'folder' => $folder,
                    'file_path' => $fileName,
                    'file_type' => $file->getClientOriginalExtension(),
                    'id_user' => $id_user,
                ]);

                return redirect()->back()->with('message', "Ok! Arquivo carregado com sucesso.");

            }
        }
    }

    public function show($id)
    {
        $publication = Publication::findOrFail($id)->orderby('id','desc');
        return view('publications', compact('publication'));
    }

    public function incluirNovaPasta(Request $request)
    {
        if ($request->isMethod('post'))
        {
            //Roles de validación
            $rules = [
                'nome' => 'required|min:1|max:100',
            ];
            //Posibles mensajes de error de validación
            $messages = [
                'nome.required' => 'Campo obrigatório',
                'nome.min' => 'Mínimo de caracteres é 1',
                'nome.max' => 'Máximo de caracteres são 100',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            //Si la validación no es correcta redireccionar al formulario con los errores
            if ($validator->fails()){
                return redirect()->back()->withInput()->with('error', "Ops! Erro ao validar dados")->withErrors($validator);
            }
            else{
                $informacoesPath = public_path('informacoes/');
                $novaPasta = e($request->nome); // Nome da nova pasta a ser criada
                $novaPasta = str_replace(" ", "_", $novaPasta);
                // Verifica se a pasta já existe
                if (File::exists($informacoesPath . DIRECTORY_SEPARATOR . $novaPasta)) {
                    return redirect()->back()->withInput()->with('error', "Ops! A pasta '{$novaPasta}' já existe.");
                }

                // Cria a nova pasta
                if (mkdir($informacoesPath . DIRECTORY_SEPARATOR . $novaPasta, 0777, true)) {
                    return redirect()->back()->with('message', "Ok! A pasta '{$novaPasta}' foi criada com sucesso.");
                } else {
                    return redirect()->back()->withInput()->with('error', "Ops! Não foi possível criar a pasta '{$novaPasta}'.");
                }
            }
        }
    }

    public function instrucoes_sistema_civil(){
        return view ('instrucoes_sistema_civil');
    }

    public function instrucoes_cadastro_ocorrencias(){
        return view ('instrucoes_cadastro_de_ocorrencias');
    }

    public function instrucoes_sistema(){
        return view ('instrucoes_sistema');
    }

    public function instrucoes_ordem_servico(){
        return view ('instrucoes_ordem_servico');
    }

    public function instrucoes_icc(){
        return view ('instrucoes_icc');
    }
}
