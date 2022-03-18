<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    public function equipo(){

        return $this->belongsTo('App\Models\Team');

    }

    public function equipoLocal(){

        return $this->belongsTo('App\Models\Team','local_id','id');

    }

    public function equipoVisitante(){

        return $this->belongsTo('App\Models\Team','visitor_id','id');

    }
}
