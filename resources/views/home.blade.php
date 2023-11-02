@extends('layouts.master')

@section('title', 'Home')

@section('head')
    @if (config('app.env') == 'production')
    @else
        @vite('resources/css/home.css')
    @endif
@endsection

@section('pre-content')
    <div
        class="fle-col flex h-fit w-full items-center justify-center rounded-bl-[8rem] bg-slate-100 px-[1rem] pb-[1rem] pt-[4rem] shadow-sm shadow-slate-500 dark:bg-inherit dark:text-inherit md:flex-row md:px-[18%] md:text-xl lg:rounded-bl-[17rem] lg:pb-[0rem] lg:pr-0 lg:pt-[1rem]"id="home-banner-content">
        <div class="flex h-full w-full flex-col items-center px-[20%] pb-4 lg:w-[50%] lg:px-[7%] lg:py-0" id="home-banner-content-left">
            <h1 class="text-center text-4xl text-gray-700 lg:text-left lg:text-7xl lg:text-[5xl]" style="font-family: 'DM Serif Display';">
                Bem vindo ao <span class="font-[inherit] text-emerald-800 dark:text-emerald-400">IBFE</span>
            </h1>
            <p class="text-md mb-[2.7rem] mt-[1.25rem] font-['Jost'] font-normal text-gray-800 dark:bg-inherit dark:text-inherit lg:my-8 lg:text-left lg:text-xl lg:text-[lg]">
                O ponto de partida para seu sucesso profissional.
            </p>
            <a class="flex w-full flex-row items-center justify-center rounded-lg bg-black px-[1.2rem] py-[1rem] text-base font-semibold text-white transition hover:bg-transparent hover:text-black hover:outline hover:outline-2 hover:outline-black md:px-4 md:py-3 md:text-2xl"
                href="#">
                <span>Faça seu teste agora</span>
                <span class="material-icons ml-2 text-emerald-500">arrow_forward</span>
            </a>
        </div>

        <div class="spacer flex h-full w-full flex-1 items-end bg-red-400"></div>

        <div class="ban-right hidden w-[50%] flex-row items-end justify-end lg:flex" style="height: calc(100vh - 3.5rem);">
            <img alt="banner ibfe" class="w-full" src="{{ asset('assets/img/banner-img.svg') }}">
        </div>
    </div>
@endsection

@section('content')

    <div class="spacer h-[3rem] w-full md:h-[7rem]"></div>

    <div class="text-content flex w-full flex-col text-justify text-sm md:text-lg">
        <h1 class="mb-[1.5rem] text-2xl font-bold uppercase italic text-slate-700 md:mb-4 md:text-3xl lg:text-[4rem]">Sobre Nós</h1>
        <div class="flex w-full flex-row">
            <div class="hidden md:w-[50%] lg:block">
                <img alt="" src="{{ asset('assets/img/nave.svg') }}">
            </div>
            <div class="text-sm lg:w-[50%]">
                <p>
                    <span class="material-icons text-base text-slate-500">arrow_forward</span>Idealizado pelo Grupo de Pesquisa "Práticas da Administração Eupsíquica, Bases do Comportamento Organizacional e Medidas Psicométricas", liderado pelo Prof. Gustavo
                    Henrique Silva de Souza do IFNMG - Campus Teófilo Otoni, o IBFE-W é
                    uma plataforma gratuita que identifica o perfil empreendedor e intraempreendedor ao mapear fatores que impulsionam ou inibem atividades empresariais.
                </p>
                <p>
                    <span class="material-icons text-base text-slate-500">arrow_forward</span>Seja você um empreendedor, gestor, pesquisador ou aluno, o IBFE-W oferece insights valiosos para impulsionar o empreendedorismo.
                </p>
                <p>
                    <span class="material-icons text-base text-slate-500">arrow_forward</span>Comece agora a explorar o seu potencial empreendedor!
                </p>
                {{-- <dotlottie-player src="https://lottie.host/91fda939-d633-4884-a865-b8646bdaec91/L4dkTLMNd1.json" background="transparent" speed=".5" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player> --}}
            </div>
        </div>
    </div>

    <div class="ie-caroussel ibfe-ver my-[3rem] flex h-fit w-full select-none flex-col items-center justify-center dark:bg-inherit dark:text-inherit md:mb-[5rem] md:mt-[7rem] md:text-lg" data-ie-caroussel-switch-time="15000">
        <div class="ie-item">
            <h4 class="ie-title">Base Teórica</h4>
            <p class="ie-description">Conheça um pouco sobre a fundamentação teórica do IBFE, por meio do livro “Administração e Empreendedorismo: Temas Emergentes e Aplicações”.</p>
            <div class="ie-link">
                <a href="http://dx.doi.org/10.51859/amplla.aet474.1121-1">ler mais</a>
                <span class="material-icons">arrow_forward</span>
            </div>
        </div>

        <div class="ie-item">
            <h4 class="ie-title">PAEBCOMP</h4>
            <p class="ie-description">Visite o site do Grupo de Pesquisa “Práticas da Administração Eupsíquica, Bases do Comportamento Organizacional e Medidas Psicométricas” (PAEBCOMP)</p>
            <div class="ie-link">
                <a class="underline" href="https://paebcomp.ifnmg.edu.br/">ler mais</a>
                <span class="material-icons">arrow_forward</span>
            </div>
        </div>

        <div class="ie-item">
            <h4 class="ie-title">Mapa das Culturas do IFNMG</h4>
            <p class="ie-description">Visite o Mapa das Culturas do IFNMG e conheça o Empreendedorismo Cultural de toda a região do Norte de Minas Gerais.</p>
            <div class="ie-link">
                <a class="underline" href="https://mapadasculturas.ifnmg.edu.br">ler mais</a>
                <span class="material-icons">arrow_forward</span>
            </div>
        </div>
    </div>

    <div class="mb-[3rem] flex h-fit flex-col rounded-lg bg-[#a4c79a] px-[5%] py-[5%] shadow-lg md:px-[10%] lg:mb-[5rem]">
        <h1 class="mb-7 h-fit w-full text-center font-serif text-3xl font-semibold text-gray-900 dark:text-emerald-50 lg:text-4xl">
            O que as pessoas pensam de nós?
        </h1>

        <div class="flex h-fit w-full flex-col justify-between">
            <div class="my-[.5rem] flex w-full flex-col rounded-xl bg-[#fffe] p-4 text-start dark:bg-slate-600 dark:text-slate-200 lg:mx-2">
                <div class="mb-1 flex flex-row lg:mb-3">
                    <div class="h-[3rem] w-[3rem] overflow-hidden rounded-full border">
                        <img alt="Professor Nilton Lima" src="{{ asset('assets/img/Nilton-Lima.jpg') }}">
                    </div>
                    <div class="ml-2 flex flex-col">
                        <h2 class="text-md font-serif font-semibold lg:text-lg">
                            Prof. Nilton Cesar Lima
                        </h2>
                        <p class="text-xs lg:text-sm">
                            Universidade Federal de Uberlândia (UFU)
                        </p>
                    </div>
                </div>
                <p class="text-xs lg:text-sm">
                    “Instrumento psicométrico extremamente adequado para planos de intervenção à nível empreendedor e para a orientação profissional”
                </p>
            </div>
            <div class="my-[.5rem] flex w-full flex-col rounded-xl bg-[#fffe] p-4 text-start dark:bg-slate-600 dark:text-slate-200 lg:mx-2">
                <div class="mb-1 flex flex-row lg:mb-3">
                    <div class="h-[3rem] w-[3rem] overflow-hidden rounded-full border">
                        <img alt="Professor Arthur Jorge Coelho" src="{{ asset('assets/img/Jorge-Coelho.png') }}">
                    </div>
                    <div class="ml-2 flex flex-col">
                        <h2 class="text-md font-serif font-semibold lg:text-lg">
                            Prof. Jorge Artur Peçanha de Miranda Coelho
                        </h2>
                        <p class="text-xs lg:text-sm">
                            Universidade Federal de Alagoas (UFAL)
                        </p>
                    </div>
                </div>
                <p class="text-xs lg:text-sm">
                    “O diferencial desta medida para as demais é a sua base teórica. Aqui o perfil empreendedor é medido a partir do um balanceamento. Pra você há mais barreiras ou facilitadores para se tornar empreendedor?”
                </p>
            </div>
            <div class="my-[.5rem] flex w-full flex-col rounded-xl bg-[#fffe] p-4 text-start dark:bg-slate-600 dark:text-slate-200 lg:mx-2">
                <div class="mb-1 flex flex-row lg:mb-3">
                    <div class="w-[3rem] overflow-hidden rounded-full border">
                        <img alt="Professora Chams Kumaira" src="{{ asset('assets/img/Chams-Kumaira.jpeg') }}">
                    </div>
                    <div class="ml-2 flex flex-col">
                        <h2 class="text-md font-serif font-semibold lg:text-lg">
                            Profª. Chams Kumaira
                        </h2>
                        <p class="text-xs lg:text-sm">
                            Universidade Federal dos Vales do Jequitinhonha e Mucuri (UFVJM)
                        </p>
                    </div>
                </div>
                <p class="text-xs lg:text-sm">
                    “Ferramenta essencial para a promoção do empreendedorismo no Norte de Minas Gerais”
                </p>
            </div>
        </div>
    </div>

    <div class="flex w-full flex-col items-center justify-center rounded-3xl bg-black px-7 py-[2rem] text-center text-white shadow-lg md:text-xl">
        <h2 class="mb-6 font-serif text-2xl font-bold lg:text-3xl">
            Gostaria de aprofundar seus conhecimento em Empreendedorismo?
        </h2>
        <p class="mb-[1rem] text-sm md:text-lg lg:mb-10">
            Acesse gratuitamente o E-book “Fronteiras em Empreendedorismo: Perspectivas Teóricas e Empíricas”, lançado pela Editora do IFNMG.
        </p>
        <a class="contact-button rounded-lg bg-emerald-600 p-2 text-xs font-bold transition hover:bg-emerald-400 md:p-2 md:text-base lg:rounded-xl lg:p-3"
            href="https://documento.ifnmg.edu.br/action.php?kt_path_info=ktcore.actions.document.view&fDocumentId=61586">
            Clique Aqui
        </a>
    </div>
@endsection
