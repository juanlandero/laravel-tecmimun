<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(PaisSeeder::class);
        $this->call(IdiomaSeeder::class);
        $this->call(PermisoSeeder::class);
        $this->call(UserSeeder::class);
    }
}
