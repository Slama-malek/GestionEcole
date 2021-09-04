<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $primaryKey = 'id_m';

    public function classes() {
        return $this->belongsToMany('App\Classe' ,'enseignant_classe');

    }
    public function enseignants()
    {
         return $this->belongsToMany('App\Enseignant','enseignant_classe');
       
    }
}

