<?php

namespace App\Http\Controllers;

use App\Models\Gerenciarcpa;
use App\Models\Bpmm;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class GerenciarcpaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //spatie/laravel-permission

        $bpmm = Bpmm::all();
        $cpas = Gerenciarcpa::select('cpas')->groupBy('cpas')->get();
        $listacpas = Gerenciarcpa::with('battalion_id')->get();

        return view('gerenciarcpa', compact(["bpmm", "cpas", "listacpas"]));
    }

    /**
     * Show the form for creating a new resource.
     */


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post'))
        {
            //Roles de validación
            $rules = [
                'nome' => 'required',
            ];
            //Posibles mensajes de error de validación
            $messages = [
                'nome.required' => 'Campo obrigatório',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);
//dd($validator);
            //Si la validación no es correcta redireccionar al formulario con los errores
            if ($validator->fails()){
                return redirect()->back()->withInput()->with('error', "Ops! Erro ao validar dados.")->withErrors($validator);
            }
            else{ // criado novo categoria
                $batalhoes = $request->bpmms;

                foreach($batalhoes as $bpmm){
                Gerenciarcpa::create([
                    'battalion_id' =>$bpmm,
                    'cpas' => $request->nome,
                    'status' => 1,
                    'user_id' => auth()->id()
                ]);
                };

                return redirect()->back()->with('message', 'Ok! CPA cadastrada com sucesso!');

            }
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Gerenciarcpa $gerenciarcpa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gerenciarcpa $gerenciarcpa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $cpas = $request->cpas;
        Gerenciarcpa::where('cpas', $cpas)->delete();

        return redirect()->back()->with('message', 'Ok! Cpas excluído com sucesso!');
    }
}
