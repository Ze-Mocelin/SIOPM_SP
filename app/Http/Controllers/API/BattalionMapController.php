<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CheckBattalionMapService;

class BattalionMapController extends Controller
{
    private $checkBattalionMapService;

    public function __construct(CheckBattalionMapService $checkBattalionMapService)
    {
        $this->checkBattalionMapService = $checkBattalionMapService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo("ok");
        // Code for fetching and displaying a list of resources
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        $result = $this->checkBattalionMapService->checkCoordinateInArea($latitude, $longitude);

        return response()->json($result);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        // Code for displaying a specific resource
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Code for updating a specific resource
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Code for deleting a specific resource
    }
}
