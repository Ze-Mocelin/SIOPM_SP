<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $functionAjax = explode('/', str_replace('/ajax/', '', $request->getRequestUri()) );
        $localFunctions = get_class_methods($this); 
        if (in_array($functionAjax[0], $localFunctions)) {
            return $this->{$functionAjax[0]}();
        } else {
            echo "A função ajax não existe! : ". $functionAjax[0];
        }

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
    public function alert()
    {
        echo "pop up!!";
    }
}
