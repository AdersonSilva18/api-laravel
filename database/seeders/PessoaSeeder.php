<?php

namespace Database\Seeders;

use App\Models\Pessoa;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PessoaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Factory::create();

        // Adicionar 8 pessoas com dados aleatórios
        for ($i = 0; $i < 8; $i++) {
            Pessoa::create([
                'nome' => $faker->firstName,
                'sobrenome' => $faker->lastName,
                'telefone' => $faker->phoneNumber,
                'idade' => $faker->numberBetween(18, 80),
            ]);
        }
    }
}
