<?php

use Illuminate\Database\Seeder;
use App\Size;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Riempimento taglie
        $sizes = [
            'Mini',
            'Piccola',
            'Normale',
            'Grande',
            'Extra',
        ];
        // Utilizzo array multidimensionale per creare record dedicato
        foreach ($sizes as $size) {
            $newSize = new Size(); // Nuova istanza
            $newSize->size = $size; // Assegnazione valore
            $newSize->save(); // Salvataggio seed
        }
    }
}
