<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puppet extends Model
{
    protected $table = 'puppets'; // Specifica il nome della tabella corrispondente

    protected $fillable = ['title', 'body', 'cover', 'size_id']; // Definisci i campi che possono essere assegnati in modo massivo

    public function size()
    {
        // Funzione di relazione
        return $this->belongsTo('App\Size');  //Il singolo puppet avrà una sola taglia associata
    }

    // Eventuali altre relazioni, accessori o metodi del modello possono essere definiti qui
}
