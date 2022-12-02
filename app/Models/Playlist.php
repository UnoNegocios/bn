<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Video;


class Playlist extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

    protected $fillable = [
        'title',
        'description',
        'short_description',
        'main_poster',
        'launch_date',

    ];

    protected $casts = [
        'categories' => 'array'
    ];

    public function videos(){
        return $this->hasManyJson(Video::class, 'options->role_ids');
    }
}
