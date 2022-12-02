<?php

namespace App\Http\Filters\video;

use Spatie\QueryBuilder\QueryBuilder;
use App\Models\Video;
use App\Http\Resources\lead\LeadResource;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\Filters\Filter;
use App\Http\Resources\video\VideoResource;

class VideoFilter
{
    public static function execute($request){

    $videos = QueryBuilder::for(Video::class)
    ->allowedFilters([
        'title',
        'description',
        AllowedFilter::exact('id'),
        AllowedFilter::exact('categories.id'),
        AllowedFilter::exact('difficulty'),
        ])
        ->allowedSorts(
            'id'
        )
        ->orderBy('created_at', 'DESC')
        ->paginate($request->itemsPerPage)->appends(request()->query());

    return VideoResource::collection($videos);
    }
}