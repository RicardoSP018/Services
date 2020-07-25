<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'nombre' => 'Limpieza',
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Manetenimiento',
        ]);
        DB::table('areas')->insert([
        'nombre' => 'Ninguno',
    ]);
    }
}
