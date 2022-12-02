<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkoutRoutineDetailRequest;
use App\Http\Requests\UpdateWorkoutRoutineDetailRequest;
use App\Models\WorkoutRoutineDetail;

class WorkoutRoutineDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreWorkoutRoutineDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkoutRoutineDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkoutRoutineDetail  $workoutRoutineDetail
     * @return \Illuminate\Http\Response
     */
    public function show(WorkoutRoutineDetail $workoutRoutineDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkoutRoutineDetail  $workoutRoutineDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkoutRoutineDetail $workoutRoutineDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkoutRoutineDetailRequest  $request
     * @param  \App\Models\WorkoutRoutineDetail  $workoutRoutineDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkoutRoutineDetailRequest $request, WorkoutRoutineDetail $workoutRoutineDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkoutRoutineDetail  $workoutRoutineDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkoutRoutineDetail $workoutRoutineDetail)
    {
        //
    }
}
