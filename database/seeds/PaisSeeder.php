<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paises = array(
            'México', 
            'Francia',
            'Estados Unidos de América',
            'Chile',
            'URS',
            'España',
            'China',
            'Republica de Korea',
            'Peru',
            'Italia',
            'Sudafrica',
            'Republica Democratica del Congo',
            'Alemania',
            'Canada'
        );


        foreach ($paises as $value) {
            DB::table('pais')->insert([
                'nombre' => $value,
            ]);
        }
    }
}
