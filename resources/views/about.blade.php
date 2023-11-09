@extends('layouts.master')

@section('title', 'Sobre')

@section('head')
    @if (config('app.env') == 'production')
        <link rel="stylesheet" href="{{ asset('build/assets/about-b4c532a2.css') }}">
    @else
        @vite('resources/scss/about.scss')
    @endif
@endsection

@section('pre-content')
    <div class="banner flex h-[10rem] w-full items-end justify-center bg-emerald-700 text-black md:h-[15rem]">
        <h1 class="w-fit rounded-t-md bg-white px-[2rem] py-[.7rem] text-center text-xl text-slate-900 dark:bg-slate-800 dark:text-slate-300 md:rounded-t-lg md:px-[4rem] md:py-[1.2rem] md:text-3xl">
            Sobre o IBFE-WEB
        </h1>
    </div>
@endsection

@section('content')
    <div class="w-full h-[4rem] md:h-[10rem]"></div>

    <div class="mb-[6rem] text-sm md:mb-[7rem] md:text-base text-justify">
        <h3 class="mb-8 text-center text-2xl font-black uppercase text-slate-800 md:text-[3rem] md:font-bold">A plataforma ibfe</h3>
        <p>
            <strong>O Inventário de Barreiras e Facilitadores ao Empreendedorismo (IBFE for Web)</strong> é uma plataforma de identificação do perfil empreendedor e intraempreendedor por meio do mapeamento dos fatores que inibem ou estimulam as pessoas para a
            atividade
            empreendedora.
        </p>
        <p class="my-5">
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
    </div>
    <div class="flex h-fit w-full flex-col text-justify text-sm md:text-lg">
        <div class="flex h-fit w-full flex-row justify-between">
            <div class="flex flex-col md:w-[45%]">
                <h3 class="mb-4 text-left font-semibold">Como utilizar o IBFE-Web?</h3>
                <p class="font-light">
                    Será apresentado um questionário com uma série de itens que representam as dimensões do IBFE. Após a resposta à bateria de itens, o sistema irá gerar o resultado e indicar o seu perfil empreendedor / intraempreendedor, e você poderá
                    guardar, registrar e até compartilhar com outras pessoas.
                </p>
            </div>
            <img class="hidden w-[45%] rounded-lg md:block" src="{{ asset('assets/img/q-man.jpg') }}">
        </div>
    </div>

    <div class="mr-1 flex h-fit w-full flex-1 flex-row items-center justify-between py-4 md:px-[8%] lg:px-[12%]">
        <span class="mr-[.2rem] flex flex-col items-center justify-center text-[6cm] font-light text-[#9fdf] md:mr-[.5rem]" style="transform: scaleY(1.2);">{</span>
        <p class="mt-4 flex h-fit flex-shrink text-justify text-xs md:text-sm">
            Leia atentamente a lista de comportamentos e características descritos no formulário de aplicação, considerando seu conteúdo. Utilizando a escala de resposta tipo Likert de 5 (cinco) pontos, variando de 1 = Não me descreve em absoluto a 5 =
            Descreve-me totalmente; marque o número em cada item para indicar em que medida você considera que a frase lhe descreve.
        </p>
        <span class="ml-[.2rem] flex items-center justify-center text-[6cm] font-light text-[#9fdf] md:ml-[.5rem]" style="transform: scaleY(1.2);">}</span>
    </div>

    <div class="mb-10 mr-1 flex w-full flex-row justify-between">
        <img alt="" class="hidden w-[45%] rounded-lg md:block" src="{{ asset('assets/img/s-guy.jpeg') }}">
        <div class="space hidden h-full px-4 lg:flex"></div>
        <div class="flex flex-col text-justify text-sm md:w-[45%]">
            <h3 class="mb-4 text-right text-sm font-semibold md:text-lg">O Resultado</h3>
            <p class="text-sm font-light md:text-lg">
                Após a conclusão do questionário, a aplicação usará de alguns critérios antes de retornar um resultado de forma definitiva ao usuário, com base em diversos fatores abordados neste <a class="text-sky-700 underline hover:text-sky-400"
                    href="http://dx.doi.org/10.51859/amplla.aet474.1121-1">e-book</a>, o qual foi usado como base teórica para o desenvolvimento da aplicação. Mapeando, assim, o seu perfil empreendedor.
            </p>
        </div>

    </div>
    <div class="my-[2rem] w-full md:my-[5rem]"></div>

    <div class="flex flex-col items-center border-t border-slate-300">

        <h3 class="mb-4 text-xl font-semibold uppercase md:text-3xl">Conheça a equipe</h3>

        <div class="flex h-fit w-full flex-row flex-wrap justify-between py-4">
            @foreach ($team as $people)
                <div class="flex flex-col items-center">
                    <div class="h-[3cm] outline outline-4 outline-offset-4 outline-sky-400 w-[3cm] relative flex-grow-0 flex-shrink-0 overflow-hidden rounded-full bg-white md:h-[4cm] md:w-[4cm]">
                        <img alt="{{ $people['name'] }}" style="top:{{$people['origin'][1]}}%;left:{{$people['origin'][0]}}%; position: relative;" src="{{ $people['img'] }}" title="{{ $people['name'] }}">
                    </div>
                    <p class="mt-[1rem] relative w-full max-w-[3cm] bg-red-50 text-center text-sm font-normal">{{ $people['name'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
@endsection
