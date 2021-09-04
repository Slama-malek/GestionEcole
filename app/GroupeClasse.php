<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupeClasse extends Model
{
   
    public function groupes()
    {
         return $this->belongsToMany('App\Groupe','groupe_classe');
       
    }
}
