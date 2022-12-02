<?php

namespace App\Http\Filters\user;

use Spatie\QueryBuilder\QueryBuilder;
use App\Models\User;
use App\Http\Resources\user\UserResource;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\Filters\Filter;

class UserFilter
{
    public static function execute($request){

    $users = QueryBuilder::for(User::class)
    ->allowedFilters([
        'name', 
        'address',
        AllowedFilter::exact('id'),
        AllowedFilter::exact('email'),
        AllowedFilter::exact('phone'),
        AllowedFilter::exact('type'),
        AllowedFilter::exact('sales_man_id'),
        AllowedFilter::exact('last_updated_by_user_id'),
        AllowedFilter::exact('created_by_user_id'),
        ])
        ->allowedSorts(
            'id'
        )
        ->orderBy('created_at', 'DESC')
        ->paginate($request->itemsPerPage)->appends(request()->query());

    return UserResource::collection($users);
    }
}