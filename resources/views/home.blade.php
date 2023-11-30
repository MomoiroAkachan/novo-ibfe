@extends('layouts.master')

@section('title', 'Home')

@section('head')
    {{-- Aplica os estilos pelo vite --}}
    @if (config('app.env') == 'production')
        <link href="{{ asset('build/assets/home-a58142a7.css') }}" rel="stylesheet">
    @else
        @vite('resources/scss/home.scss')
    @endif

@endsection

@section('pre-content')
    {{--  Banner da página inicial do IBFE  --}}
    <section class="home-banner">
        <div class="banner-side left">
            <h1 class="banner-title">
                Bem vindo ao <span class="font-[inherit] text-emerald-800 dark:text-emerald-400">IBFE</span>
            </h1>
            <p class="banner-body">
                O ponto de partida para seu sucesso profissional.
            </p>
            <a class="test-button" href="{{ route('profile.index') }}">
                <span>Mapear Perfil</span>
                <span class="material-icons ml-2 text-emerald-400">arrow_forward</span>
            </a>
        </div>

        <div class="banner-side right">
            <img alt="Imagem do banner do ibfe" class="h-full" src="{{ asset('assets/img/banner-img.svg') }}">
        </div>
    </section>
@endsection

@section('content')
    <div class="spacer h-[3rem] w-full md:h-[7rem]"></div>

    {{-- Banner de informações gerais do app --}}
    <section class="info-banner text-content">
        <div class="hidden md:flex md:flex-1">
            <img alt="Imagem banner 2 homepage ibfe" src="{{ asset('assets/img/nave.svg') }}">
        </div>
        <div class="flex flex-1 flex-col">
            <p class="subtitle">
                Seja você <span class="destak bg-emerald-400">empreendedor</span>,
                <span class="destak bg-lime-400">gestor</span>,
                <span class="destak bg-rose-400">pesquisador</span> ou
                <span class="destak bg-amber-300">aluno</span>, o IBFE-W oferece insights valiosos
                para impulsionar o seu desenvolvimento como empreendedor.
            </p>
            <p>
                <span class="material-icons mr-1 text-emerald-200">arrow_forward</span>O IBFE-W é uma plataforma gratuita que mapeia fatores que impulsionam ou inibem
                atividades empresariais, identificando assim o perfil empreendedor e intraempreendedor do usuário.
            </p>
            <p class="text-sm underline">
                <span class="material-icons mr-1 text-base text-red-600">arrow_forward</span>
                <a href="{{ route('survey.index') }}">Comece agora a explorar o seu potencial empreendedor!</a>
            </p>
        </div>
    </section>

    <section class="ainf-banner">
        <div class="ie-carousel ibfe-ver" data-ie-carousel-switch-time="7000">
            <div class="ie-item">
                <h4 class="ie-title">Base Teórica</h4>
                <p class="ie-description">Conheça um pouco sobre a fundamentação teórica do IBFE, por meio do livro
                    “Administração e Empreendedorismo: Temas Emergentes e Aplicações”.</p>
                <div class="ie-link">
                    <a href="http://dx.doi.org/10.51859/amplla.aet474.1121-1">ler mais</a>
                    <span class="material-icons">arrow_forward</span>
                </div>
            </div>

            <div class="ie-item">
                <h4 class="ie-title">PAEBCOMP</h4>
                <p class="ie-description">Visite o site do Grupo de Pesquisa “Práticas da Administração Eupsíquica, Bases do
                    Comportamento Organizacional e Medidas Psicométricas” (PAEBCOMP)</p>
                <div class="ie-link">
                    <a class="underline" href="https://paebcomp.ifnmg.edu.br/">ler mais</a>
                    <span class="material-icons">arrow_forward</span>
                </div>
            </div>

            <div class="ie-item">
                <h4 class="ie-title">Mapa das Culturas do IFNMG</h4>
                <p class="ie-description">Visite o Mapa das Culturas do IFNMG e conheça o Empreendedorismo Cultural de toda
                    a região do Norte de Minas Gerais.</p>
                <div class="ie-link">
                    <a class="underline" href="https://mapadasculturas.ifnmg.edu.br">ler mais</a>
                    <span class="material-icons">arrow_forward</span>
                </div>
            </div>
        </div>
    </section>

    <section class="comments-banner">
        <div class="box">
            <h1 class="title">
                O que pensam de nós?
            </h1>

            <div class="flex h-fit w-full flex-col justify-between">

                <div class="comment-blok">

                    <div class="brand">
                        <img alt="Professor Nilton Lima" src="{{ asset('assets/img/Nilton-Lima.jpg') }}">
                    </div>

                    <h2 class="name">
                        Prof. Nilton Cesar Lima
                    </h2>
                    <p class="local">
                        Universidade Federal de Uberlândia (UFU)
                    </p>


                    <p class="comment">
                        “Instrumento psicométrico extremamente adequado para planos de intervenção à nível empreendedor e
                        para a orientação profissional”
                    </p>
                </div>

                <div class="comment-blok">

                    <div class="brand">
                        <img alt="Professor Arthur Jorge Coelho" src="{{ asset('assets/img/Jorge-Coelho.png') }}">
                    </div>

                    <h2 class="name">
                        Prof. Jorge Artur Peçanha de Miranda Coelho
                    </h2>
                    <p class="local">
                        Universidade Federal de Alagoas (UFAL)
                    </p>

                    <p class="comment">
                        “O diferencial desta medida para as demais é a sua base teórica. Aqui o perfil empreendedor é medido
                        a partir do um balanceamento. Pra você há mais barreiras ou facilitadores para se tornar
                        empreendedor?”
                    </p>

                </div>
                <div class="comment-blok">

                    <div class="brand">
                        <img alt="Professora Chams Kumaira" src="{{ asset('assets/img/Chams-Kumaira.jpeg') }}">
                    </div>

                    <h2 class="name">
                        Profª. Chams Kumaira
                    </h2>
                    <p class="local">
                        Universidade Federal dos Vales do Jequitinhonha e Mucuri (UFVJM)
                    </p>

                    <p class="comment">
                        “Ferramenta essencial para a promoção do empreendedorismo no Norte de Minas Gerais”
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="flex w-full flex-col items-center justify-center rounded-3xl bg-black px-7 py-[2rem] text-center text-white shadow-lg md:text-xl">
        <h2 class="mb-6 text-[1rem] font-bold lg:text-3xl">
            Gostaria de aprofundar seus conhecimento em Empreendedorismo?
        </h2>
        <p class="mb-[1rem] text-xs md:text-lg lg:mb-10">
            Acesse gratuitamente o E-book “Fronteiras em Empreendedorismo: Perspectivas Teóricas e Empíricas”, lançado
            pela Editora do IFNMG.
        </p>
        <a class="contact-button rounded-lg bg-emerald-600 p-2 text-xs font-bold transition hover:bg-emerald-400 md:p-2 md:text-base lg:rounded-xl lg:p-3"
            href="https://documento.ifnmg.edu.br/action.php?kt_path_info=ktcore.actions.document.view&fDocumentId=61586">
            Clique Aqui
        </a>
    </div>
@endsection
