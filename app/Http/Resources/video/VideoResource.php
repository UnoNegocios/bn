<?php

namespace App\Http\Resources\video;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\video_category\VideoCategoryResource;

class VideoResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'short_description' => $this->short_description,
            'difficulty' => $this->difficulty,
            'downloadable' => $this->downloadable,
            'position' => $this->position,
            'preview_image' => $this->preview_image,
            'duration' => $this->duration,
            'duration_in_seconds' => $this->duration_in_seconds,
            'permalink' => $this->permalink,
            'file_path' => $this->file_path,
            'playback_id' => $this->playback_id,
            'categories' => VideoCategoryResource::collection($this->categories)
        ];
    }
}
