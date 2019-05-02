<?php

use Illuminate\Database\Seeder;

class PerinatalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perinatal = \App\Models\Perinatal::create([
            'titulo' => 'Perinatal',
        ]);
    }
}
