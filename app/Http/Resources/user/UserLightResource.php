<?php

namespace App\Http\Resources\user;

use Illuminate\Http\Resources\Json\JsonResource;

class UserLightResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return
        [
            'id' => (string)$this->id,
            'name' => $this->name,
            'last' => $this->last,
            'email' => $this->email,
            'profile_photo_url' => $this->profile_photo_url
        ];
    }
}
