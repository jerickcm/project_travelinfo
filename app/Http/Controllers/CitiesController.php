<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Resources\CityResource;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('City/View', []);
    }


    /**
     * Display the specified resource.
     */
    public function show($city)
    {
        $data  = Cities::where('name', $city)->first();

        return response()->json(
            [
                'data' => $data,
                'success' => true,
                '_benchmark' => microtime(true) -  $this->time_start
            ]
        );

        // return new RoleResource($Role);
    }
}
