@extends('layouts.master')

@section('title', 'Home')

@section('pre-content')
    <div class="fle-col pt-[4rem] flex h-fit w-full items-center justify-center rounded-bl-[8rem] bg-slate-100 px-[1rem] pb-[1rem] shadow-sm shadow-slate-500 dark:bg-inherit dark:text-inherit md:flex-row md:px-[18%] md:text-xl lg:rounded-bl-[17rem] lg:pb-[0rem] lg:pr-0 lg:pt-[1rem]"
        id="home-banner-content">
        <div class="flex h-full w-full flex-col items-center px-[20%] pb-4 lg:w-[50%] lg:px-[7%] lg:py-0" id="home-banner-content-left">
            <h1 style="font-family: 'DM Serif Display';" class="text-center text-4xl text-gray-700 lg:text-left lg:text-7xl lg:text-[5xl]">
                Bem vindo ao <span class="text-emerald-800 font-[inherit] dark:text-emerald-400">IBFE</span>
            </h1>
            <p class="text-md font-['Jost'] mb-[2.7rem] mt-[1.25rem] font-normal text-gray-800 dark:bg-inherit dark:text-inherit lg:my-8 lg:text-center lg:text-xl lg:text-[lg]">
                O ponto de partida para seu sucesso profissional.
            </p>
            <a class="text-base flex w-fit flex-row items-center justify-center rounded-lg bg-black px-[1.2rem] py-[1rem] font-semibold text-white transition hover:bg-transparent hover:text-black hover:outline hover:outline-2 hover:outline-black md:px-4 md:py-3 md:text-2xl"
                href="#">
                <span>Faça seu teste agora</span>
                <span class="material-icons ml-2 text-emerald-500">arrow_forward</span>
            </a>
        </div>
        <div class="spacer flex h-full w-full flex-1 bg-red-400 items-end"></div>
        <div class="ban-right hidden w-[50%] flex-row items-end justify-end lg:flex" style="height: calc(100vh - 3.5rem);">
            <img alt="banner ibfe" class="w-full" src="{{ asset('assets/img/banner-img.svg') }}">
        </div>
    </div>
@endsection

@section('content')

    <div class="spacer h-[3rem] w-full md:h-[7rem]"></div>

    <div class="text-content flex w-full flex-col text-justify text-sm md:text-lg">
        <h1 class="font-serif mb-[3rem] text-2xl font-black uppercase dark:text-slate-600 text-slate-800 md:mb-4 md:text-3xl lg:text-4xl">Sobre Nós</h1>
        <p>O IBFE (Inventário de Barreiras e Facilitadores ao Empreendedorismo) é uma plataforma online de apoio ao empreendedor, e foi idealizado por /nome, /cargo no Instituto Federal do Norte de Minas Gerais, Campus Teófilo Otoni
            em /data.</p>
        <p>Temos como objetivo facilitar o processo de aprender a empreender com, sentre outros recursos, disponibilizando ferramentas gratuitas para uso do público geral e indicações.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quas, exercitationem deleniti molestiae velit dignissimos vitae provident consectetur odio qui officia fugiat accusamus excepturi. Magnam porro ullam dolorem
            sit. Necessitatibus!</p>
    </div>

    <div class="ie-caroussel my-[3rem] flex h-fit w-full select-none flex-col dark:bg-inherit dark:text-inherit items-center justify-center md:mb-[5rem] md:mt-[7rem] md:text-lg" data-ie-caroussel-switch-time="15000">
        @for ($i = 0; $i < 3; $i++)
            <div class="ie-item my-[1rem] rounded-xl dark:border-none border px-4 py-2 shadow-lg dark:shadow-none flex w-[29%] flex-col items-center dark:bg-inherit dark:text-inherit bg-white text-center">
                <h4 class="mb-4 uppercase font-serif text-base font-bold md:text-2xl lg:text-2xl">Lorem</h4>
                <p class="mb-2 text-sm md:text-lg lg:text-xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit [{{ $i }}].</p>
                <div class="flex h-fit w-full flex-row flex-nowrap items-center justify-center p-0 text-xs transition-colors dark:hover:text-emerald-400 hover:text-sky-700">
                    <a class="font-light text-xs md:text-lg" href="#">ler mais</a>
                    <span class="material-icons text-bsecondary text-sm">arrow_forward</span>
                </div>
            </div>
        @endfor
    </div>

    <div class="mb-[3rem] shadow-lg flex h-fit  md:mx-[10%] flex-col rounded-lg dark:bg-emerald-800 bg-[#0D652D88] px-[5%] py-[5%] lg:mb-[5rem] md:px-[10%]">
        <h1 class="mb-7 h-fit w-full text-center font-serif text-3xl font-semibold dark:text-emerald-50 text-gray-900 lg:text-4xl">
            O que as pessoas pensam de nós?
        </h1>

        <div class="flex h-fit w-full flex-col justify-between">
            @for ($i = 0; $i < 3; $i++)
                <div class="my-[.5rem] flex w-full flex-col rounded-xl bg-[#fffe] p-4 text-start dark:bg-slate-600 dark:text-slate-200 lg:mx-2">
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
    </div>

    <div class="flex w-full shadow-lg flex-col items-center justify-center rounded-3xl bg-black px-7 py-[2rem] text-center text-white md:text-xl">
        <h2 class="mb-6 font-serif text-2xl font-bold lg:text-3xl">
            Quer se Juntar a nós?
        </h2>
        <p class="mb-[1rem] text-sm md:text-lg lg:mb-10">
            Se quer se juntar ao nosso time, sinta-se a vontade para entrar em contato através do botão abaixo.
        </p>
        <a class="contact-button rounded-lg transition hover:bg-emerald-400 bg-emerald-600 p-2 text-xs font-bold md:p-2 md:text-base lg:rounded-xl lg:p-3" href="#">
            Contate-nos
        </a>
    </div>
@endsection
