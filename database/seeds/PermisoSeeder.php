<?php

use Illuminate\Database\Seeder;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $niveles = array('Admin', 'Responsable', 'Comite');


        foreach ($niveles as $value) {
            DB::table('permisos')->insert([
                'nivel' => $value,
            ]);
        }  
    }
}
