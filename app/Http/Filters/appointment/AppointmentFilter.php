<?php

namespace App\Http\Filters\appointment;

use Spatie\QueryBuilder\QueryBuilder;
use App\Models\Appointment;
use App\Http\Resources\lead\LeadResource;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\Filters\Filter;
use App\Http\Resources\appointment\AppointmentResource;

class AppointmentFilter
{
    public static function execute($request){

    $activities = QueryBuilder::for(Appointment::class)
    ->allowedFilters([
        'description',
        AllowedFilter::exact('id'),
        AllowedFilter::scope('created_between'),
        AllowedFilter::scope('date_between'),
        AllowedFilter::exact('user_id'),
        AllowedFilter::exact('trainer_id'),
        AllowedFilter::exact('event_id'),
        AllowedFilter::exact('is_completed'),


        ])
        ->allowedSorts(
            'id'
        )
        ->orderBy('created_at', 'DESC')
        ->paginate($request->itemsPerPage)->appends(request()->query());

    return AppointmentResource::collection($activities);
    }
}