<?php

namespace App\Http\Resources\appointment;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\user\UserMinResource;
use App\Http\Resources\event\EventResource;

class AppointmentResource extends JsonResource
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
            'id' => $this->id,
            'date' => $this->date,
            'time' => $this->time,
            'date_time' => $this->date_time,
            'description' => $this->description,
            'is_completed' => $this->is_completed,
            'user' => new UserMinResource($this->user),
            'trainer' => new UserMinResource($this->trainer),
            'event' => new EventResource($this->event),
            'created_at' => date('d-m-Y H:i', strtotime($this->created_at)),
            'updated_at' => date('d-m-Y H:i', strtotime($this->updated_at)),
        ];
    }
}
