<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puppet extends Model
{
    protected $table = 'puppets'; // Specifica il nome della tabella corrispondente

    protected $fillable = ['title', 'body']; // Definisci i campi che possono essere assegnati in modo massivo

    // Eventuali altre relazioni, accessori o metodi del modello possono essere definiti qui
}
