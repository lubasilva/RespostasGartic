<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $this->call(AdjetivoSeeder::class);
        $this->call(AlimentoSeeder::class);
        $this->call(AnimalSeeder::class);
        $this->call(DesenhoSeeder::class);
        $this->call(FilmeSeeder::class);
        $this->call(ObjetoSeeder::class);
        $this->call(ProfissaoSeeder::class);
        $this->call(VerboSeeder::class);
    }
}
