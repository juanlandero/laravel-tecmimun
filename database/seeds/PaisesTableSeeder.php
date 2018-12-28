<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PaisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('paiseswe')->insert([
            'id' => 1,
            'nombre' => 'Mexico',
        ]);
    }
}
