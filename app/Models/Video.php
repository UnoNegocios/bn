<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VideoCategory;

class Video extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

    protected $fillable = [
        'title',
        'description',
        'short_description',
        'downloadable',
        'position',
        'preview_image',
        'duration',
        'duration_in_seconds',
        'permalink',
        'difficulty',
        'playback_id',
        'status',
        'file_path',
        'category_ids'
        
    ];

    protected $casts = [
        'category_ids' => 'array'
    ];

    public function playlists(){
    return $this->belongsToJson(VideoCategory::class, 'options->role_ids');
    }

    public function categories(){
        return $this->belongsToJson(VideoCategory::class, 'category_ids');
    }
}
