<?php

namespace App\Http\Controllers;

use App\Models\Cadastrodespachador;
use Illuminate\Http\Request;

class CadastrodespachadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cadastrodespachador');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cadastrodespachador $cadastrodespachador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cadastrodespachador $cadastrodespachador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cadastrodespachador $cadastrodespachador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cadastrodespachador $cadastrodespachador)
    {
        //
    }
}
