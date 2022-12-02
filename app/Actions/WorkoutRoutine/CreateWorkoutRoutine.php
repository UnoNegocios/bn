<?php

namespace App\Actions\WorkoutRoutine;

use Illuminate\Support\Facades\Http;
use App\Models\WorkoutRoutine;
use App\Models\WorkoutRoutineDetail;

class CreateWorkoutRoutine 
{
    public function create($request)
    {
       //$data = Shopping::create($request->all());
       $shopping = new WorkoutRoutine();

       $shopping->user_id = $request->user_id;
       $shopping->bloques = $request->bloques;

        $shopping->save();
        $data = $shopping;

        $this->createWorkoutDetail($request, $data->id);
    }

    public function createWorkoutDetail($request, $id)
    {
        $data = $request['days'];
        foreach($data as $key => $value){
            $shopping_detail = new WorkoutRoutineDetail();
            $shopping_detail->workout_routine_id = $id;
            $shopping_detail->title = $value['title'];
            $shopping_detail->muscular_groups = implode(", ", $value['muscular_groups']);
            $shopping_detail->duration = $value['duration'];
            $shopping_detail->exercises_ids = $value['exercises_ids'];
            $shopping_detail->save();
        }
    }
}
