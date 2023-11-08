<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('question', 500);
            $table->unsignedInteger('number');
            $table->unsignedInteger('target')->default(1);
        });
        DB::table('questions')->insert([
            ['question' => 'Executo meu trabalho com paixão.', 'number' => 1, 'target' => 0],
            ['question' => 'Sou uma pessoa inovadora.', 'number' => 2, 'target' => 0],
            ['question' => 'Tenho o desejo de um dia abrir meu próprio negócio.', 'number' => 3, 'target' => 0],
            ['question' => 'Sinto que possuo a habilidade de gerenciar pessoas.', 'number' => 4, 'target' => 0],
            ['question' => 'Correr riscos em um negócio é algo inevitável, mas eu enfrentaria os riscos.', 'number' => 5, 'target' => 0],
            ['question' => 'Sinto prazer em atividades que exigem imaginação/criatividade.', 'number' => 6, 'target' => 0],
            ['question' => 'Consigo encontrar pessoas que possam facilitar a realização dos meus projetos.', 'number' => 7, 'target' => 0],
            ['question' => 'Sinto prazer em fazer o meu trabalho de forma bem feita.', 'number' => 8, 'target' => 0],
            ['question' => 'Geralmente, prefiro liderar os grupos dos quais faço parte.', 'number' => 9, 'target' => 0],
            ['question' => 'Eu abriria um negócio inovador apesar da insegurança.', 'number' => 10, 'target' => 0],
            ['question' => 'Percebo facilidade em obter capital rapidamente.', 'number' => 11, 'target' => 0],
            ['question' => 'Consigo detectar as possíveis oportunidades de mercado.', 'number' => 12, 'target' => 0],
            ['question' => 'Sou capaz de motivar as pessoas a realizarem tarefas difíceis.', 'number' => 13, 'target' => 0],
            ['question' => 'Eu gostaria de investir em um negócio, se eu tivesse dinheiro e recursos.', 'number' => 14, 'target' => 0],
            ['question' => 'Sou corajoso e não tenho medo de abrir um negócio, mesmo com todo o risco.', 'number' => 15, 'target' => 0],
            ['question' => 'Sei a quem posso recorrer para abrir um negócio.', 'number' => 16, 'target' => 0],
            ['question' => 'Sou apaixonado por novas ideias.', 'number' => 17, 'target' => 0],
            ['question' => 'Conheço pessoas que poderiam me ajudar com dinheiro para eu abrir meu negócio.', 'number' => 18, 'target' => 0],
            ['question' => 'Eu faria uma dívida de longo prazo para investir em uma oportunidade de negócio.', 'number' => 19, 'target' => 0],
            ['question' => 'Tenho a capacidade de obter lucro ao identificar uma oportunidade de negócio.', 'number' => 20, 'target' => 0],
            ['question' => 'Percebo a possibilidade de ter acesso a capital ou recursos para abrir um negócio.', 'number' => 21, 'target' => 0],
            ['question' => 'Tenho a capacidade de estimular pessoas a trabalharem em grupo.', 'number' => 22, 'target' => 0],
            ['question' => 'Sou uma pessoa com muita imaginação.', 'number' => 23, 'target' => 0],
            ['question' => 'Tenho contatos que financiariam meu próprio negócio.', 'number' => 24, 'target' => 0],
            ['question' => 'Tenho disposição a correr riscos relacionados aos negócios.', 'number' => 25, 'target' => 0],
            ['question' => 'Consigo identificar a oportunidade de um negócio lucrativo.', 'number' => 26, 'target' => 0],
            ['question' => 'Sinto-me envolvido pelo trabalho que realizo.', 'number' => 27, 'target' => 0],
            ['question' => 'Acredito ser capaz de organizar as tarefas de um grupo.', 'number' => 28, 'target' => 0],
            ['question' => 'Encaro as necessidades alheias (dos outros) como oportunidades de negócio.', 'number' => 29, 'target' => 0],
            ['question' => 'Procuro manter redes de relacionamentos com as pessoas que sei que podem ser úteis para mim.', 'number' => 30, 'target' => 0],
            ['question' => 'Sinto-me empolgado com a ideia de ter meu próprio negócio.', 'number' => 31, 'target' => 0],
            ['question' => 'Apaixono-me pelos trabalhos que realizo.', 'number' => 32, 'target' => 0],
            ['question' => 'Possuo uma rede de contatos que poderia me auxiliar na abertura de um negócio.', 'number' => 33, 'target' => 0],
            ['question' => 'Caso fosse lucrativo, eu teria a intenção de iniciar um negócio.', 'number' => 34, 'target' => 0],
            ['question' => 'Tenho como conseguir um empréstimo para abrir um novo negócio.', 'number' => 35, 'target' => 0],
            ['question' => 'Sinto-me bem criando coisas novas.', 'number' => 36, 'target' => 0],
            ['question' => 'Sinto-me atraído a identificar oportunidades de negócio.', 'number' => 37, 'target' => 0],
            ['question' => 'Realizo com dedicação os meus trabalhos.', 'number' => 38, 'target' => 0],
            ['question' => 'Tenho vontade de transformar minhas ideias em negócios.', 'number' => 39, 'target' => 0],
            ['question' => 'Se eu fosse abrir um negócio, saberia exatamente com quem eu entraria em contato para ser meu sócio.', 'number' => 40, 'target' => 0]
        ]);        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
