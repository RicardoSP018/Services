<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
<<<<<<< HEAD
            'nombre' => 'Administrador',
=======
            'nombre' => 'administrador',
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
        ]);
        DB::table('roles')->insert([
            'nombre' => 'Trabajador',
        ]);
    }
}
