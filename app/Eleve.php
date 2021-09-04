<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $fillable=['eleve_id'];
     protected $primaryKey = 'id';
    public function classes() {
        return $this->belongsToMany('App\Classe' ,'eleve_classes');

    }
    public function groupes()
    {
         return $this->belongsToMany('App\Groupe','eleve_classes');
       
    }
    public function presences()
    {
         return $this->belongsToMany('App\Presence','presence');
       
    }
    
}
