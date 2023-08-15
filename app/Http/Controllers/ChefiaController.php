<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChefiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('chefia_estatistica');
    }

    public function logados()
    {
        return view('chefialogados');
    }

    public function organogramadespacho()
    {
        return view('batalhoeschefia');
    }

    public function organograma190()
    {//trocar view
        return view('batalhoeschefia');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
