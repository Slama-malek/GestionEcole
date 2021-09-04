<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
     protected $primaryKey = 'id_c';
    public function eleves()
    {
         return $this->belongsToMany('App\Eleve','eleve_classes');
       
    }
    public function enseignants()
    {
         return $this->belongsToMany('App\Enseignant','enseignant_classe');
       
    }
    public function groupes()
    {
         return $this->belongsToMany('App\Groupe','groupe_classe');
       
    }
    public function presences()
    {
         return $this->belongsToMany('App\Presence','presence');
       
    }
    public function matieres()
    {
         return $this->belongsToMany('App\Matiere','enseignant_classe');
       
    }
}
