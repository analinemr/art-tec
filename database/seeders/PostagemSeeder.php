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
            'titulo' => 'Colar Artesanal em Macramê',
            'descricao' => 'Peça única feita à mão com fios de algodão natural, perfeita para quem valoriza o estilo boho e sustentável. Ideal para dar um toque especial no seu visual do dia a dia.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('postagens')->insert([
            'artesao_id' => 2,
            'user_id' => 2,
            'titulo' => 'Vaso Decorativo em Cerâmica',
            'descricao' => 'Vaso feito artesanalmente com argila de alta qualidade e acabamento rústico, perfeito para decorar sua casa com elegância e personalidade.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('postagens')->insert([
            'artesao_id' => 3,
            'user_id' => 3,
            'titulo' => 'Cesta Trançada de Palha Natural',
            'descricao' => 'Cesta resistente e funcional, feita com técnicas tradicionais de trançado. Ótima para organização ou para uso como peça decorativa.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('postagens')->insert([
            'artesao_id' => 1,
            'user_id' => 1,
            'titulo' => 'Brincos de Madeira Entalhada',
            'descricao' => 'Brincos leves e estilosos, esculpidos à mão em madeira sustentável, que combinam perfeitamente com looks casuais ou festivos.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('postagens')->insert([
            'artesao_id' => 1,
            'user_id' => 2,
            'titulo' => 'Painel Decorativo em Tecido Bordado',
            'descricao' => 'Painel colorido e cheio de detalhes, confeccionado artesanalmente com bordados manuais, trazendo um toque artístico para suas paredes.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('postagens')->insert([
            'artesao_id' => 6,
            'user_id' => 3,
            'titulo' => 'Colar Artesanal em Macramê',
            'descricao' => 'Peça única feita à mão com fios de algodão natural, perfeita para quem valoriza o estilo boho e sustentável. Ideal para dar um toque especial no seu visual do dia a dia.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('postagens')->insert([
            'artesao_id' => 7,
            'user_id' => 1,
            'titulo' => 'Vaso Decorativo em Cerâmica',
            'descricao' => 'Vaso feito artesanalmente com argila de alta qualidade e acabamento rústico, perfeito para decorar sua casa com elegância e personalidade.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('postagens')->insert([
            'artesao_id' => 2,
            'user_id' => 2,
            'titulo' => 'Cesta Trançada de Palha Natural',
            'descricao' => 'Cesta resistente e funcional, feita com técnicas tradicionais de trançado. Ótima para organização ou para uso como peça decorativa.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('postagens')->insert([
            'artesao_id' => 9,
            'user_id' => 3,
            'titulo' => 'Brincos de Madeira Entalhada',
            'descricao' => 'Brincos leves e estilosos, esculpidos à mão em madeira sustentável, que combinam perfeitamente com looks casuais ou festivos.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('postagens')->insert([
            'artesao_id' => 10,
            'user_id' => 1,
            'titulo' => 'Painel Decorativo em Tecido Bordado',
            'descricao' => 'Painel colorido e cheio de detalhes, confeccionado artesanalmente com bordados manuais, trazendo um toque artístico para suas paredes.',
            'created_at' => now(),
            'updated_at' => now()
        ]);// João Silva - Cerâmica tradicional
        DB::table('postagens')->insert([
            'artesao_id' => 1,
            'user_id' => 1,
            'titulo' => 'Vaso Decorativo em Cerâmica Tradicional',
            'descricao' => 'Peça feita à mão por João Silva, especialista em cerâmica tradicional, perfeita para decorar sua casa com elegância e história.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // João Silva - Cerâmica tradicional
        DB::table('postagens')->insert([
            'artesao_id' => 1,
            'user_id' => 2,
            'titulo' => 'Jarra Artesanal em Cerâmica',
            'descricao' => 'Jarra feita manualmente por João Silva, perfeita para uso funcional ou decoração, unindo tradição e arte.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // João Silva - Cerâmica tradicional
        DB::table('postagens')->insert([
            'artesao_id' => 1,
            'user_id' => 1,
            'titulo' => 'Prato Decorativo em Cerâmica',
            'descricao' => 'Peça única criada por João Silva, com design tradicional e acabamento artesanal para valorizar qualquer ambiente.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Maria Oliveira - Tecelagem artesanal
        DB::table('postagens')->insert([
            'artesao_id' => 2,
            'user_id' => 2,
            'titulo' => 'Tapete Artesanal em Tecelagem Sustentável',
            'descricao' => 'Tapete criado por Maria Oliveira utilizando técnicas tradicionais de tecelagem e materiais sustentáveis, ideal para quem ama arte e natureza.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Maria Oliveira - Tecelagem artesanal
        DB::table('postagens')->insert([
            'artesao_id' => 2,
            'user_id' => 2,
            'titulo' => 'Cesta Trançada em Fibra Natural',
            'descricao' => 'Cesta feita por Maria Oliveira usando técnicas manuais, ideal para organização e decoração sustentável.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Maria Oliveira - Tecelagem artesanal
        DB::table('postagens')->insert([
            'artesao_id' => 2,
            'user_id' => 3,
            'titulo' => 'Manta Artesanal em Fios Naturais',
            'descricao' => 'Manta aconchegante feita à mão por Maria Oliveira, combinando conforto e sustentabilidade em cada ponto.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Carlos Souza - Madeira
        DB::table('postagens')->insert([
            'artesao_id' => 3,
            'user_id' => 3,
            'titulo' => 'Mesa Rústica de Madeira Artesanal',
            'descricao' => 'Móvel exclusivo esculpido à mão por Carlos Souza, especialista em madeira, combinando beleza e durabilidade para seu lar.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Carlos Souza - Madeira
        DB::table('postagens')->insert([
            'artesao_id' => 3,
            'user_id' => 1,
            'titulo' => 'Banco de Madeira Esculpido à Mão',
            'descricao' => 'Banco robusto e artístico feito por Carlos Souza, perfeito para ambientes rústicos e acolhedores.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Carlos Souza - Madeira
        DB::table('postagens')->insert([
            'artesao_id' => 3,
            'user_id' => 3,
            'titulo' => 'Prateleira Artesanal em Madeira Natural',
            'descricao' => 'Prateleira feita à mão por Carlos Souza, ideal para organizar e decorar com estilo rústico e único.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Beatriz Lima - Pintura artesanal
        DB::table('postagens')->insert([
            'artesao_id' => 6,
            'user_id' => 3,
            'titulo' => 'Quadro Pintado à Mão com Técnicas Tradicionais',
            'descricao' => 'Obra de Beatriz Lima, que utiliza materiais naturais para criar pinturas artesanais cheias de vida e cor.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Beatriz Lima - Pintura artesanal
        DB::table('postagens')->insert([
            'artesao_id' => 6,
            'user_id' => 2,
            'titulo' => 'Pintura em Tela com Temática Natural',
            'descricao' => 'Pintura exclusiva de Beatriz Lima, inspirada na natureza, feita com tintas e técnicas artesanais.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Beatriz Lima - Pintura artesanal
        DB::table('postagens')->insert([
            'artesao_id' => 6,
            'user_id' => 3,
            'titulo' => 'Painel Decorativo Pintado à Mão',
            'descricao' => 'Painel colorido e cheio de detalhes, criado por Beatriz Lima, para trazer arte e vida às suas paredes.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Ricardo Alves - Ourives
        DB::table('postagens')->insert([
            'artesao_id' => 7,
            'user_id' => 1,
            'titulo' => 'Anel Exclusivo com Pedras Preciosas Brasileiras',
            'descricao' => 'Joia artesanal criada por Ricardo Alves, com design único e pedras preciosas que valorizam a cultura brasileira.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Ricardo Alves - Ourives
        DB::table('postagens')->insert([
            'artesao_id' => 7,
            'user_id' => 2,
            'titulo' => 'Brincos Artesanais em Ouro com Pedras Naturais',
            'descricao' => 'Brincos feitos à mão por Ricardo Alves, destacando a beleza das pedras brasileiras em peças únicas.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Ricardo Alves - Ourives
        DB::table('postagens')->insert([
            'artesao_id' => 7,
            'user_id' => 1,
            'titulo' => 'Pingente Artesanal com Design Exclusivo',
            'descricao' => 'Pingente único criado por Ricardo Alves, combinando arte e pedras preciosas brasileiras em uma peça sofisticada.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Fernanda Gomes - Cerâmica Raku
        DB::table('postagens')->insert([
            'artesao_id' => 8,
            'user_id' => 2,
            'titulo' => 'Vaso Cerâmica Raku com Efeitos Únicos',
            'descricao' => 'Vaso exclusivo feito por Fernanda Gomes utilizando a técnica japonesa Raku, cada peça com suas próprias marcas e personalidade.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Fernanda Gomes - Cerâmica Raku
        DB::table('postagens')->insert([
            'artesao_id' => 8,
            'user_id' => 3,
            'titulo' => 'Bule Artesanal em Cerâmica Raku',
            'descricao' => 'Bule feito manualmente por Fernanda Gomes, ideal para quem aprecia arte e chá em uma peça exclusiva.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Marcelo Pinto - Tapeçaria manual
        DB::table('postagens')->insert([
            'artesao_id' => 9,
            'user_id' => 1,
            'titulo' => 'Tapeçaria Manual com Design Moderno',
            'descricao' => 'Tapete exclusivo criado por Marcelo Pinto, com técnicas artesanais e design contemporâneo para valorizar seu ambiente.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Marcelo Pinto - Tapeçaria manual
        DB::table('postagens')->insert([
            'artesao_id' => 9,
            'user_id' => 3,
            'titulo' => 'Manta Artesanal para Sofá',
            'descricao' => 'Manta feita à mão por Marcelo Pinto, perfeita para dar conforto e estilo ao seu espaço.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Lucas Fernandes - Escultura em pedra
        DB::table('postagens')->insert([
            'artesao_id' => 5,
            'user_id' => 2,
            'titulo' => 'Escultura em Pedra Natural',
            'descricao' => 'Obra de arte esculpida por Lucas Fernandes, transformando pedra bruta em peça elegante e única.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Lucas Fernandes - Escultura em pedra
        DB::table('postagens')->insert([
            'artesao_id' => 5,
            'user_id' => 3,
            'titulo' => 'Peça Esculpida em Pedra para Decoração',
            'descricao' => 'Peça artesanal criada por Lucas Fernandes, perfeita para ambientes sofisticados e cheios de arte.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Ana Costa - Bijuterias feitas à mão
        DB::table('postagens')->insert([
            'artesao_id' => 4,
            'user_id' => 1,
            'titulo' => 'Colar Artesanal com Materiais Reciclados',
            'descricao' => 'Colar exclusivo feito por Ana Costa, combinando sustentabilidade e design em bijuterias feitas à mão.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Ana Costa - Bijuterias feitas à mão
        DB::table('postagens')->insert([
            'artesao_id' => 4,
            'user_id' => 2,
            'titulo' => 'Pulseira Sustentável Feita à Mão',
            'descricao' => 'Pulseira artesanal criada por Ana Costa, valorizando materiais reciclados e design consciente.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Ana Costa - Bijuterias feitas à mão
        DB::table('postagens')->insert([
            'artesao_id' => 4,
            'user_id' => 3,
            'titulo' => 'Brincos Artesanais com Materiais Naturais',
            'descricao' => 'Brincos únicos feitos por Ana Costa, combinando sustentabilidade e delicadeza em cada peça.',
            'created_at' => now(),
            'updated_at' => now()
        ]);


    }
}
