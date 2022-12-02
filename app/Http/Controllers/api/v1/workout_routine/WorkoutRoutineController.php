<?php

namespace App\Http\Controllers\api\v1\workout_routine;

use App\Http\Requests\StoreWorkoutRoutineRequest;
use App\Http\Requests\UpdateWorkoutRoutineRequest;
use App\Models\WorkoutRoutine;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Http\Resources\workout_routine\WorkoutRoutineResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\WorkoutRoutine\CreateWorkoutRoutine;

class WorkoutRoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $workout_routines = QueryBuilder::for(WorkoutRoutine::class)
        ->allowedFilters([AllowedFilter::exact('id'), AllowedFilter::exact('user_id'),])->get();

        return WorkoutRoutineResource::collection($workout_routines);
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
     * @param  \App\Http\Requests\StoreWorkoutRoutineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CreateWorkoutRoutine $createWorkoutRoutine)
    {
        $createWorkoutRoutine = new CreateWorkoutRoutine();
        $createWorkoutRoutine->create($request);
         return response(null, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkoutRoutine  $workoutRoutine
     * @return \Illuminate\Http\Response
     */
    public function show(WorkoutRoutine $workoutRoutine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkoutRoutine  $workoutRoutine
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkoutRoutine $workoutRoutine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkoutRoutineRequest  $request
     * @param  \App\Models\WorkoutRoutine  $workoutRoutine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkoutRoutineRequest $request, WorkoutRoutine $workoutRoutine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkoutRoutine  $workoutRoutine
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkoutRoutine $workoutRoutine)
    {
        //
    }
}
