<?php

namespace Database\Seeders;

use App\Models\PersonalMedico;
use App\Models\User;
use Illuminate\Database\Seeder;

class PersonalMedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = User::firstOrCreate(
            ['email' => 'medico@posta.test'],
            [
                'name' => 'Dr. Rosa Huamán',
                'password' => bcrypt('password'),
                'rol' => 'personal_medico',
            ]
        );

        PersonalMedico::firstOrCreate(
            ['user_id' => $usuario->id],
            [
                'dni' => fake()->unique()->numerify('########'),
                'nombres' => 'Rosa',
                'apellidos' => 'Huamán Quispe',
                'especialidad' => 'Medicina general',
                'colegiatura' => fake()->unique()->numerify('#####'),
                'activo' => true,
            ]
        );

        PersonalMedico::factory()->count(4)->create();
        PersonalMedico::factory()->inactivo()->create();
    }
}
