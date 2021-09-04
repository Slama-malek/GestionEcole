<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    public function classes() {
        return $this->belongsToMany('App\Classe' ,'groupe_classe');

    }
    public function eleves()
    {
         return $this->belongsToMany('App\Eleve','eleve_classes');
       
    }
    public function enseignants()
    {
         return $this->belongsToMany('App\Enseignant','enseignant_classes');
       
    }
}
