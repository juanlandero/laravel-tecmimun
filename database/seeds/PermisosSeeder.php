<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermisosSeeder extends Seeder
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
