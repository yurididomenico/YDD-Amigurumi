<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function puppets()
    {
        // Funzione di relazione
        return $this->hasMany('App\Puppet'); // La taglia ha tanti puppets associati -->
    }
}
