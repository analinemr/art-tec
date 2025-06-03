<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'artesao_id' => 1,
            'user_id' => 1,
            'titulo' => 'Postagem 1',
            'descricao' => 'Descrição da postagem 1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 2,
            'user_id' => 2,
            'titulo' => 'Postagem 2',
            'descricao' => 'Descrição da postagem 2',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 3,
            'user_id' => 3,
            'titulo' => 'Postagem 3',
            'descricao' => 'Descrição da postagem 3',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 1,
            'user_id' => 1,
            'titulo' => 'Postagem 4',
            'descricao' => 'Descrição da postagem 4',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 1,
            'user_id' => 2,
            'titulo' => 'Postagem 5',
            'descricao' => 'Descrição da postagem 5',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 6,
            'user_id' => 3,
            'titulo' => 'Postagem 6',
            'descricao' => 'Descrição da postagem 6',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 7,
            'user_id' => 1,
            'titulo' => 'Postagem 7',
            'descricao' => 'Descrição da postagem 7',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 2,
            'user_id' => 2,
            'titulo' => 'Postagem 8',
            'descricao' => 'Descrição da postagem 8',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 9,
            'user_id' => 3,
            'titulo' => 'Postagem 9',
            'descricao' => 'Descrição da postagem 9',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 10,
            'user_id' => 1,
            'titulo' => 'Postagem 10',
            'descricao' => 'Descrição da postagem 10',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 1,
            'user_id' => 2,
            'titulo' => 'Postagem 11',
            'descricao' => 'Descrição da postagem 11',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 2,
            'user_id' => 3,
            'titulo' => 'Postagem 12',
            'descricao' => 'Descrição da postagem 12',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 1,
            'user_id' => 1,
            'titulo' => 'Postagem 13',
            'descricao' => 'Descrição da postagem 13',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Novas postagens adicionadas:
        DB::table('postagens')->insert([
            'artesao_id' => 4,
            'user_id' => 2,
            'titulo' => 'Postagem 14',
            'descricao' => 'Descrição da postagem 14',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 5,
            'user_id' => 3,
            'titulo' => 'Postagem 15',
            'descricao' => 'Descrição da postagem 15',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 3,
            'user_id' => 1,
            'titulo' => 'Postagem 16',
            'descricao' => 'Descrição da postagem 16',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 8,
            'user_id' => 2,
            'titulo' => 'Postagem 17',
            'descricao' => 'Descrição da postagem 17',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 9,
            'user_id' => 3,
            'titulo' => 'Postagem 18',
            'descricao' => 'Descrição da postagem 18',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 4,
            'user_id' => 1,
            'titulo' => 'Postagem 19',
            'descricao' => 'Descrição da postagem 19',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 5,
            'user_id' => 2,
            'titulo' => 'Postagem 20',
            'descricao' => 'Descrição da postagem 20',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 6,
            'user_id' => 3,
            'titulo' => 'Postagem 21',
            'descricao' => 'Descrição da postagem 21',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 7,
            'user_id' => 1,
            'titulo' => 'Postagem 22',
            'descricao' => 'Descrição da postagem 22',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'artesao_id' => 8,
            'user_id' => 2,
            'titulo' => 'Postagem 23',
            'descricao' => 'Descrição da postagem 23',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
