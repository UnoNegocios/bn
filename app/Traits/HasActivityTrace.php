<?php

namespace App\Traits;

use App\Models\User;
use App\Http\Resources\user\UserLightResource;
use Illuminate\Support\Facades\Auth;


Trait HasActivityTrace
{   
    //Set Attributes


    //Retrieve Relationships
    public function lastUpdatedBy()
    {
        return $this->belongsTo(User::class, 'last_updated_by_user_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }

    //Scope for Filtering
    public function scopeCreatedBetween(Builder $query, $date, $date2): Builder
    {  
    return $query->whereBetween('created_at', [Carbon::parse($date), Carbon::parse($date2)->endOfDay()]);
    }

    public function scopeUpdatedBetween(Builder $query, $date, $date2): Builder
    {  
    return $query->whereBetween('updated_at', [Carbon::parse($date), Carbon::parse($date2)->endOfDay()]);
    }
}