<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'email' => 'fermando@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'nombre' => 'Fernando',
            'apellidos' => 'Velasco Lopez',
            'direccion' => 'Calle palenciana 1',
            'admin' => 'Y'
        ]);

        DB::table('user')->insert([
            'email' => 'manuel@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'nombre' => 'Manuel',
            'apellidos' => 'Escobar Velasco',
            'direccion' => 'Calle Juego pelota 23',
            'admin' => 'N'
        ]);
    }
}
