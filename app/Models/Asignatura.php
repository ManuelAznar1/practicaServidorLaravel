<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    public function profesor(){
        return $this->belongsTo(Profesor::class);
    }
    //
}
