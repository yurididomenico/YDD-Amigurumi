<?php

use Illuminate\Database\Seeder;
use App\Puppet;

class PuppetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Puppet::create([
            'title' => 'AmiguPrimo',
            'body' => 'Il primo Amigurumi non si scorda mai!',
        ]);
    }
}
