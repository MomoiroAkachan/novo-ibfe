@extends('layouts.master')

@section('title', 'Sobre')

@section('head')
    @if (config('app.env') == 'production')
        <link href="{{ asset('build/assets/about-b4c532a2.css') }}" rel="stylesheet">
    @else
        @vite('resources/scss/about.scss')
    @endif
@endsection

@section('pre-content')
    <div class="banner">
        <h1 class="title">
            Guia do ibfe
        </h1>
    </div>
@endsection

@section('content')
    <section class="about-us">
        <h3 class="title">A plataforma ibfe</h3>
        <p>
            <strong>O Inventário de Barreiras e Facilitadores ao Empreendedorismo (IBFE for Web)</strong> é uma plataforma de identificação do perfil empreendedor e intraempreendedor por meio do mapeamento dos fatores que inibem ou estimulam as pessoas para a
            atividade
            empreendedora.
        </p>
        <p>
            O IBFE-W <i>(registro BR51202300030)</i> foi idealizado e é administrado pelo Grupo de Pesquisa “Práticas da Administração Eupsíquica, Bases do Comportamento Organizacional e Medidas Psicométricas” <a
                class="text-sky-800 underline hover:text-sky-400" href="https://paebcomp.ifnmg.edu.br">PAEBCOMP</a>, liderado pelo Prof. Gustavo Henrique Silva de Souza, do Instituto Federal do Norte de Minas Gerais (IFNMG) - Campus Teófilo Otoni.
        </p>
        <p>
            O IBFE-W é uma ferramenta gratuíta que pode ser amplamente utilizada na avaliação para concessão de empréstimos para a abertura de novos negócios, em treinamentos, em processos seletivos para gestores (p.ex., empresas de modo geral), mapeamento de
            perfil empreendedor entre funcionários (em práticas organizacionais de incentivo ao intraempreendedorismo), incentivo à carreira empresarial a partir de aptidões previamente identificadas (p.ex., Escolas de Negócios, Incubadoras, Aceleradoras) e
            análises entre profissões (p.ex., pesquisa acadêmica) que tendem a levar à abertura de novos negócios, como advogados, médicos, engenheiros, arquitetos, farmacêuticos, contadores, etc.
        </p>
        <p class="mt-5">
            Até o momento atual, a plataforma IBFE conta com o <a class="text-sky-700 underline hover:text-sky-400" href="{{ route('test') }}">Teste de Perfil empreendedor</a>, as demais funcionalidades citadas, serão implementadas em um futuro próximo.
        </p>
    </section>

    <section class="about-guide">
        <div class="double-flex">
            <div class="pt">
                <h3 class="title">Como utilizar o IBFE-Web?</h3>
                <p class="content">
                    Será apresentado um questionário com uma série de itens que representam as dimensões do IBFE. Após a resposta à bateria de itens, o sistema irá gerar o resultado e indicar o seu perfil empreendedor / intraempreendedor, e você poderá
                    guardar, registrar e até compartilhar com outras pessoas.
                </p>
            </div>
            <div class="pi">
                <img src="{{ asset('assets/img/q-man.jpg') }}">
            </div>
        </div>


        <div class="double-flex justify-between items-center">
            <span class="mr-[.2rem] hidden md:flex flex-col items-center justify-center text-[6cm] font-light text-[#9fdf] md:mr-[.5rem]">{</span>

                <div class="special">
                    <ol>
                        <li>Conte-nos sobe você. Coloque algumas informações sobre você na página de perfil, a primeira página do teste;</li>
                        <li>Leia atentamente a lista de comportamentos e características descritos no formulário, considerando seu conteúdo;</li>
                        <li>Utilizando a escala de resposta tipo <i>Likert</i> de 5 pontos, variando de 1 (Não me descreve) a 5 (Descreve-me totalmente);</li>
                        <li>Marque o número em cada item para indicar em que medida você considera que a frase lhe descreve.</li>
                        <li>Após Responder todas as questões, clique no botão de <span>enviar</span>, para que seu progresse seja salvo e seu perfil calculado.</li>
                        <li>Agora, é só aguardar pelo resultado</li>
                    </ol>
                </div>

            <span class="ml-[.2rem] md:flex hidden items-center justify-center text-[6cm] font-light text-[#9fdf] md:ml-[.5rem]">}</span>
        </div>
        
        <div class="double-flex mb-8">
            <div class="pi">
                <img src="{{ asset('assets/img/s-guy.jpeg') }}">
            </div>
            <div class="pt">
                <h3 class="title">O Resultado</h3>
                <p class="content">
                    Após a conclusão do questionário, a aplicação usará de alguns critérios antes de retornar um resultado de forma definitiva ao usuário, com base em diversos fatores abordados neste <a class="text-sky-700 underline hover:text-sky-400"
                        href="http://dx.doi.org/10.51859/amplla.aet474.1121-1">e-book</a>, o qual foi usado como base teórica para o desenvolvimento da aplicação. Mapeando, assim, o seu perfil empreendedor.
                </p>
            </div>
        </div>
    </section>
    

    <section class="equip-guide">

        <h3 class="mb-4 text-xl font-semibold uppercase md:text-3xl">Conheça a equipe</h3>

        <div class="equip-box">
            @foreach ($team as $people)
                <div class="flex flex-col items-center m-2">
                    <div class="frame">
                        <img alt="{{ $people['name'] }}" src="{{ $people['img'] }}" style="top:{{ $people['origin'][1] }}%;left:{{ $people['origin'][0] }}%; position: relative;" title="{{ $people['name'] }}">
                    </div>
                    <p class="desc">{{ $people['name'] }}</p>
                </div>
            @endforeach
        </div>
    
</section>
@endsection
