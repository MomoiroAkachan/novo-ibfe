@extends('layouts.master')

@section('title', 'Home')

@section('pre-content')
    <div class="fle-col mt-[4rem] flex h-fit w-full items-center justify-center rounded-bl-[5rem] bg-slate-100 px-[1rem] pb-[1rem] shadow-sm shadow-slate-500 lg:flex-row lg:rounded-bl-[17rem] lg:px-[1.5rem] lg:pb-0 lg:pt-[1rem]" id="home-banner-content">
        <div class="flex h-full w-full flex-col items-center justify-center px-[20%] pb-4 lg:w-[50%] lg:px-[5%] lg:pt-7" id="home-banner-content-left">
            <h1 class="text-center text-4xl font-black text-gray-700 lg:text-left lg:text-7xl lg:text-[5xl]">
                Bem vindo ao <span class="font-black text-emerald-800">IBFE</span>
            </h1>
            <p class="text-md mb-[2.7rem] mt-[1.25rem] text-center font-normal text-gray-800 lg:my-8 lg:text-left lg:text-xl lg:text-[lg]">
                O ponto de partida para seu sucesso profissional.
            </p>
            <a class="text-md flex w-fit flex-row items-center justify-center rounded-lg bg-black px-3 py-1 font-semibold text-white transition hover:bg-transparent hover:text-black hover:outline hover:outline-2 hover:outline-black lg:px-4 lg:py-3 lg:text-2xl"
                href="#">
                <span>Faça seu teste agora</span>
                <span class="material-icons" style="font-size: 1rem;">keyboard_arrow_right</span>
            </a>
        </div>
        <div class="spacer flex h-full w-full flex-1 bg-red-400"></div>
        <div class="ban-right hidden w-fit flex-row items-end justify-end lg:flex lg:w-[40%]">
            <img alt="banner ibfe" class="w-full" src="{{ asset('assets/img/banner-img.svg') }}">
        </div>
    </div>
    {{-- <div class="ban-right mx-[1rem] mt-4 flex flex-row items-end justify-end lg:w-[40%]">
        <img alt="banner ibfe" class="w-full" src="{{ asset('assets/img/banner-img.svg') }}">
    </div> --}}
@endsection

@section('content')
    <div class="spacer h-[5rem] w-full"></div>

    <div class="text-content flex w-full flex-col lg:mb-36">
        <h1 class="font-noto_serif mb-3 text-2xl font-bold lg:mb-4 lg:text-4xl">Sobre Nós</h1>
        <p class="text-sm lg:text-lg">O IBFE (Inventário de Barreiras e Facilitadores ao Empreendedorismo) é uma plataforma online de apoio ao empreendedor, e foi idealizado por /nome, /cargo no Instituto Federal do Norte de Minas Gerais, Campus Teófilo Otoni
            em /data.</p>
        <p class="text-sm lg:text-lg">Temos como objetivo facilitar o processo de aprender a empreender com, sentre outros recursos, disponibilizando ferramentas gratuitas para uso do público geral e indicações.</p>
        <p class="text-sm lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quas, exercitationem deleniti molestiae velit dignissimos vitae provident consectetur odio qui officia fugiat accusamus excepturi. Magnam porro ullam dolorem
            sit. Necessitatibus!</p>
    </div>

    <div class="ie-caroussel my-[3rem] flex h-fit w-full select-none flex-col items-center justify-center" data-ie-caroussel-switch-time="15000">
        @for ($i = 0; $i < 3; $i++)
            <div class="ie-item my-[1rem] flex w-[29%] flex-col items-center bg-white py-1 text-center">
                <h4 class="text-md mb-4 font-serif font-bold lg:text-xl">Lorem</h4>
                <p class="mb-2 text-[.75rem] lg:text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit [{{ $i }}].</p>
                <div class="flex h-fit w-full flex-row flex-nowrap items-center justify-center p-0 text-xs transition-colors hover:text-sky-700">
                    <a class="font-bold" href="#">ler mais</a>
                    <span class="material-icons text-bsecondary text-sm">arrow_forward</span>
                </div>
            </div>
        @endfor
    </div>

    <h1 class="mb-7 h-fit w-full text-center font-serif text-3xl font-semibold text-gray-900 lg:text-4xl">
        O que as pessoas pensam de nós?
    </h1>

    <div class="mb-[5rem] flex flex-col justify-between">
        @for ($i = 0; $i < 3; $i++)
            <div class="flex w-full my-[.5rem] flex-col rounded-xl bg-red-400 dark:bg-slate-800  p-4 text-start">
                <div class="mb-1 flex flex-row lg:mb-3">
                    <div class="h-4 w-4 rounded-full bg-sky-700 p-6">
                    </div>
                    <div class="ml-2 flex flex-col">
                        <h2 class="text-md font-serif font-semibold lg:text-lg">
                            Lorem Ipsum
                        </h2>
                        <p class="text-xs lg:text-sm">
                            Pernambuco, Brasil
                        </p>
                    </div>
                </div>
                <p class="text-xs lg:text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae eos.
                </p>
            </div>
        @endfor
    </div>

    <div class="flex w-full flex-col items-center justify-center rounded-3xl bg-black px-7 py-[2rem] text-center text-white">
        <h2 class="mb-6 font-serif text-2xl font-bold lg:text-3xl">
            Quer se Juntar a nós?
        </h2>
        <p class="lg:text-md mb-[1rem] text-sm lg:mb-10">
            Se quer se juntar ao nosso time, sinta-se a vontade para entrar em contato através do botão abaixo.
        </p>
        <a class="contact-button rounded-lg bg-green-700 p-2 text-xs font-bold lg:rounded-xl lg:p-3 lg:text-sm" href="#">
            Contate-nos
        </a>
    </div>
@endsection
