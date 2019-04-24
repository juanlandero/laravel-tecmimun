<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [
            array(
                'name'          => 'Juan Carlos Landero Isidro',
                'email'         => 'jc_l23@hotmail.com',
                'password'      => Hash::make('gtrealmadrid'),
                'pk_permisos'   => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ),
            array(
                'name'          => 'Arturo Ordaz Magaña',
                'email'         => 'tecmimunvhsa@gmail.com',
                'password'      => Hash::make('campusvhsa15'),
                'pk_permisos'   => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            )
        ];

        json_encode($usuarios);

        foreach ($usuarios as $usuario) {
            DB::table('users')->insert([
                'name'          => $usuario['name'],
                'email'         => $usuario['email'],
                'password'      => $usuario['password'],
                'pk_permisos'   => $usuario['pk_permisos'],
                'created_at'    => $usuario['created_at'],
                'updated_at'    => $usuario['updated_at']
            ]);
        } 
    }
}
