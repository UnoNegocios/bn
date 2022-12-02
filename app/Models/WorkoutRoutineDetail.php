<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutRoutineDetail extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'muscular_groups',
        'duration',
        'workout_routine_id',
    ];

    protected $casts =[
        'exercises_ids' => 'array'
    ];
}
