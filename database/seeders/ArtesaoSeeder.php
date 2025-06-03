<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtesaoSeeder extends Seeder
{
    public function run(): void
    {

        $artesaos = [
            [
                'nome' => 'João Silva',
                'biografia' => 'João é um artesão especializado em cerâmica tradicional, com mais de 20 anos de experiência.',
                'email' => 'joao.silva@example.com',
                'telefone' => '(11) 99999-0001',
                'cidade' => 'São Paulo',
                'fotografia' => 'artesao1.jpg',
            ],
            [
                'nome' => 'Maria Oliveira',
                'biografia' => 'Maria trabalha com tecelagem artesanal, criando peças únicas e sustentáveis.',
                'email' => 'maria.oliveira@example.com',
                'telefone' => '(21) 98888-0002',
                'cidade' => 'Rio de Janeiro',
                'fotografia' => 'artesao2.jpg',
            ],
            [
                'nome' => 'Carlos Souza',
                'biografia' => 'Carlos é mestre na arte de trabalhar com madeira, criando móveis artesanais exclusivos.',
                'email' => 'carlos.souza@example.com',
                'telefone' => '(31) 97777-0003',
                'cidade' => 'Belo Horizonte',
                'fotografia' => 'artesao3.jpg',
            ],
            [
                'nome' => 'Ana Costa',
                'biografia' => 'Ana produz bijuterias feitas à mão com materiais reciclados, valorizando a sustentabilidade.',
                'email' => 'ana.costa@example.com',
                'telefone' => '(41) 96666-0004',
                'cidade' => 'Curitiba',
                'fotografia' => 'artesao4.jpg',
            ],
            [
                'nome' => 'Lucas Fernandes',
                'biografia' => 'Lucas é especialista em escultura em pedra, transformando blocos brutos em obras de arte impressionantes.',
                'email' => 'lucas.fernandes@example.com',
                'telefone' => '(51) 95555-0005',
                'cidade' => 'Porto Alegre',
                'fotografia' => 'artesao5.jpg',
            ],
            [
                'nome' => 'Beatriz Lima',
                'biografia' => 'Beatriz cria pinturas artesanais usando técnicas tradicionais e materiais naturais.',
                'email' => 'beatriz.lima@example.com',
                'telefone' => '(61) 94444-0006',
                'cidade' => 'Brasília',
                'fotografia' => 'artesao6.jpg',
            ],
            [
                'nome' => 'Ricardo Alves',
                'biografia' => 'Ricardo é um ourives que produz joias exclusivas com pedras preciosas brasileiras.',
                'email' => 'ricardo.alves@example.com',
                'telefone' => '(71) 93333-0007',
                'cidade' => 'Salvador',
                'fotografia' => 'artesao7.jpg',
            ],
            [
                'nome' => 'Fernanda Gomes',
                'biografia' => 'Fernanda trabalha com cerâmica raku, técnica japonesa que cria peças únicas e cheias de personalidade.',
                'email' => 'fernanda.gomes@example.com',
                'telefone' => '(85) 92222-0008',
                'cidade' => 'Fortaleza',
                'fotografia' => 'artesao8.jpg',
            ],
            [
                'nome' => 'Marcelo Pinto',
                'biografia' => 'Marcelo é especializado em tapeçaria manual, produzindo tapetes artesanais exclusivos.',
                'email' => 'marcelo.pinto@example.com',
                'telefone' => '(27) 91111-0009',
                'cidade' => 'Vitória',
                'fotografia' => 'artesao9.jpg',
            ],
        ];

        foreach ($artesaos as $artesao) {
            DB::table('artesaos')->insert([
                'nome' => $artesao['nome'],
                'biografia' => $artesao['biografia'],
                'email' => $artesao['email'],
                'telefone' => $artesao['telefone'],
                'cidade' => $artesao['cidade'],
                'fotografia' => $artesao['fotografia'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
