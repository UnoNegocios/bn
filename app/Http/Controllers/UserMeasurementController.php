<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserMeasurementRequest;
use App\Http\Requests\UpdateUserMeasurementRequest;
use App\Models\UserMeasurement;

class UserMeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserMeasurementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserMeasurementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserMeasurement  $userMeasurement
     * @return \Illuminate\Http\Response
     */
    public function show(UserMeasurement $userMeasurement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserMeasurement  $userMeasurement
     * @return \Illuminate\Http\Response
     */
    public function edit(UserMeasurement $userMeasurement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserMeasurementRequest  $request
     * @param  \App\Models\UserMeasurement  $userMeasurement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserMeasurementRequest $request, UserMeasurement $userMeasurement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserMeasurement  $userMeasurement
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserMeasurement $userMeasurement)
    {
        //
    }
}
