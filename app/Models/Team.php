<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    
    //relación un equipo tiene varios partidos
    public function matches(){
        return $this->hasMany('App\Models\Match');
    }

    public function partidos(){
        return $this->hasMany('App\Models\Partido','local_id','id');
    }
}
