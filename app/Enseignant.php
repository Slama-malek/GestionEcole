<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
     protected $primaryKey = 'id_en';
    public function classes() {
        return $this->belongsToMany('App\Classe' ,'enseignant_classe');

    }
    public function groupes() {
        return $this->belongsToMany('App\Groupe' ,'enseignant_classe');

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
