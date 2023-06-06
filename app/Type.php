<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function posts()
    {
        // Funzione di relazione -->
        return $this->hasMany('App\Puppet'); // La categoria ha tanti posts associati -->
    }
}
