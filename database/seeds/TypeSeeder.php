<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Riempimento categorie
        $types = [
            'Cotone',
            'Lana',
            "Acrilico",
            "Filati misti",
            "Filati di bambù",
            "Filati di alpaca",
            "Filati di mohair"
        ];

        // Utilizzo array multidimensionale per creare record dedicato
        foreach ($types as $type) {
            $newType = new Type(); // Nuova istanza
            $newType->type = $type; // Assegnazione valore
            $newType->save(); // Salvataggio seed
        }
    }
}
