<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@posta.test'],
            [
                'name' => 'Administrador',
                'password' => bcrypt('password'),
                'rol' => 'administrador',
            ]
        );

        User::firstOrCreate(
            ['email' => 'medico@posta.test'],
            [
                'name' => 'Rosa Huamán',
                'password' => bcrypt('password'),
                'rol' => 'personal_medico',
            ]
        );

        User::firstOrCreate(
            ['email' => 'recepcion@posta.test'],
            [
                'name' => 'Recepción',
                'password' => bcrypt('password'),
                'rol' => 'recepcion',
            ]
        );
    }
}
