<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function photos() {
        return $this->hasMany('App\Photo');
    }
}
