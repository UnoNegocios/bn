<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\user\UserMinResource;
use App\Http\Resources\appointment\AppointmentResource;


class UserMeasurementResource extends JsonResource
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
        //Pliegues Corporales en 
        'perimetros_corporaloes' => [
            'triceps' => $this->triceps,
            'biceps' => $this->biceps,
            'suprailiaco' => $this->suprailiaco,
            'subescapular' => $this->subescapular,
            'pectoral' => $this->pectoral,
            'abdominal' => $this->abdominal,
            'cuadriceps' => $this->cuadriceps,
            'isquiotibial' => $this->isquiotibial,
            ],

        //Perímetros corporales en cm
        'perimetros_corporaloes' => [
            'cuello' => $this->cuello,
            'brazo_rel' => $this->brazo_rel,
            'brazo_flex' => $this->brazo_flex,
            'antebrazo' => $this->antebrazo,
            'torax' => $this->torax,
            'cintura' => $this->cintura,
            'abdomen' => $this->abdomen,
            'cadera' => $this->cadera,
            'muslo' => $this->muslo,
            'pantorrilla' => $this->pantorrilla,
            'indice_masa_corporal' => $this->indice_masa_corporal,
            'indice_cintura_cadera' => $this->indice_cintura_cadera,
        ],

        'user' => new UserMinResource($this->user),
        'appointment' => new AppointmentResource($this->appointment),
        'created_at' => date('d-m-Y H:i', strtotime($this->created_at)),
        'updated_at' => date('d-m-Y H:i', strtotime($this->updated_at)),
        ];
    }
}
