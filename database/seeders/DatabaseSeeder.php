<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    //Dados para teste
    public function run(): void
    {
        $this->call([
            ArtesaoSeeder::class,
            UserSeeder::class,
            PostagemSeeder::class,
        ]);
    }
}
