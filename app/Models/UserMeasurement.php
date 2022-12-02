<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMeasurement extends Model
{
    use HasFactory;

    protected $fillable = [
        
        //Pliegues Corporales en cm
        'triceps',
        'biceps',
        'suprailiaco',
        'subescapular',
        'pectoral',
        'abdominal',
        'cuadriceps',
        'isquiotibial',

        //Perímetros corporales en cm
        'cuello',
        'brazo_rel',
        'brazo_flex',
        'antebrazo',
        'torax',
        'cintura',
        'abdomen',
        'cadera',
        'muslo',
        'pantorrilla',
        'indice_masa_corporal',
        'indice_cintura_cadera',


        'user_id',
        'appointment_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
