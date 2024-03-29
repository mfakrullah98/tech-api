<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApiResource;
use App\Models\UnemploymentRate;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ApiResource::collection(UnemploymentRate::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(UnemploymentRate $unemploymentRate)
    {
        return ApiResource::make($unemploymentRate);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UnemploymentRate $unemploymentRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnemploymentRate $unemploymentRate)
    {
        //
    }
}
