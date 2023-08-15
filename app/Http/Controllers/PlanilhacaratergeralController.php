<?php

namespace App\Http\Controllers;

use App\Models\Planilhacaratergeral;
use Illuminate\Http\Request;

class PlanilhacaratergeralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('planilhacaratergeral');
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
    public function show(Planilhacaratergeral $planilhacaratergeral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planilhacaratergeral $planilhacaratergeral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planilhacaratergeral $planilhacaratergeral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planilhacaratergeral $planilhacaratergeral)
    {
        //
    }
}
