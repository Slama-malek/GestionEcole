<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    protected $fillable = ['classe_id'];
    public function eleves() {
        return $this->belongsToMany('App\eleve' ,'presence');

    }
    public function classes() {
        return $this->belongsToMany('App\Classe' ,'presence');

    }
    public function enseignants() {
        return $this->belongsToMany('App\Enseignant' ,'presence');

    }

}
