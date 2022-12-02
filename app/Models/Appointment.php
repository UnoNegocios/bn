<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasActivityTrace;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use App\Models\User;
use App\Models\Event;
use App\Models\UserMeasurement;

class Appointment extends Model
{
    use HasFactory;
    use HasActivityTrace;

    protected $fillable = [
        'date',
        'time',
        'date_time',
        'is_completed',
        'user_id',
        'trainer_id',
        'event_id',
        'description',
        
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function trainer(){
        return $this->belongsTo(User::class, 'trainer_id');
    }

    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function userMeasurements(){
        return $this->hasMany(UserMeasurement::class);
    }

    public function scopeDateBetween(Builder $query, $date, $date2): Builder
    {
    return $query->whereBetween('date', [Carbon::parse($date)->startOfDay(), Carbon::parse($date2)->endOfDay()]);
    }
}
