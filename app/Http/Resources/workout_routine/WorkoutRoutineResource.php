<?php

namespace App\Http\Resources\workout_routine;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkoutRoutineResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user' => $this->user,
            'bloques' => $this->bloques,
            'details' => $this->workoutRoutineDetails,
        ];
    }
}
