<?php

use Illuminate\Database\Seeder;

class IdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idiomas = array('Español', 'Inglés', 'Francés');

        foreach ($idiomas as $nombre) {
            DB::table('idiomas')->insert([
                'nombre' => $nombre,
            ]);
        } 
    }
}
