<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WorkoutRoutineDetail;
use App\Models\User;

class WorkoutRoutine extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'bloques',
        'assigned_by_user_id'
    ];

    public function workoutRoutineDetails(){
        return $this->hasMany(WorkoutRoutineDetail::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
