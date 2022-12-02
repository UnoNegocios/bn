<?php

namespace App\Http\Controllers\api\v1\training_plan;

use App\Http\Requests\StoreTrainingPlanRequest;
use App\Http\Requests\UpdateTrainingPlanRequest;
use App\Models\TrainingPlan;
use App\Http\Controllers\Controller;

class TrainingPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TrainingPlan::all();
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
     * @param  \App\Http\Requests\StoreTrainingPlanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainingPlanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrainingPlan  $trainingPlan
     * @return \Illuminate\Http\Response
     */
    public function show(TrainingPlan $trainingPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrainingPlan  $trainingPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainingPlan $trainingPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrainingPlanRequest  $request
     * @param  \App\Models\TrainingPlan  $trainingPlan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrainingPlanRequest $request, TrainingPlan $trainingPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrainingPlan  $trainingPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingPlan $trainingPlan)
    {
        //
    }
}
