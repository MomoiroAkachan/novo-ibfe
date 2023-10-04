@extends('layouts.master')

@section('title', 'Sobre')

@section('pre-content')
    <div class="flex h-[10rem] w-full items-end justify-center bg-emerald-700 text-black md:h-[15rem]">
        <h1 class="w-fit rounded-t-md bg-white px-[1.5rem] py-[.7rem] text-center text-3xl dark:bg-slate-800 dark:text-slate-300 md:rounded-t-lg md:px-[4rem] md:py-[1.2rem] md:text-3xl">
            Sobre
        </h1>
    </div>
@endsection

@section('content')
    <div class="my-[12.5%] w-full"></div>

    <div class="flex h-fit w-full flex-col text-justify text-sm md:text-lg">
        <div class="flex h-fit w-full flex-row justify-between">
            <div class="w-[45%] flex flex-col">
                <h3 class="mb-4 text-left font-semibold">Como utilizar o IBFE-Web?</h3>
                <p class="font-light">
                    Será apresentado um questionário com uma série de itens que representam as dimensões do IBFE. Após a resposta à bateria de itens, o sistema irá gerar o resultado e indicar o seu perfil empreendedor / intraempreendedor, e você poderá
                    guardar, registrar e até compartilhar com outras pessoas.
                </p>
            </div>
            <img alt="" class="hidden w-[45%] rounded-lg md:block" src="{{ asset('assets/img/q-man.jpg') }}">
        </div>
    </div>

    <div class="mr-1 flex h-fit w-full flex-1 flex-row items-center justify-center py-4 md:px-[8%] lg:px-[12%]">
        <span class="mr-[.5rem] flex flex-col items-center justify-center text-[6cm] text-[#9fdf]">{</span>
        <p class="mt-4 flex h-fit flex-grow-0 text-sm font-light">
            Leia atentamente a lista de comportamentos e características descritos no formulário de aplicação, considerando seu conteúdo. Utilizando a escala de resposta tipo Likert de 5 (cinco) pontos, variando de 1 = Não me descreve em absoluto a 5 =
            Descreve-me totalmente; marque o número em cada item para indicar em que medida você considera que a frase lhe descreve.
        </p>
        <span class="ml-[.5rem] flex items-center justify-center text-[6cm] text-[#9fdf]">}</span>
    </div>

    <div class="mb-10 mr-1 flex w-full flex-row justify-between">
        <img alt="" class="hidden w-[45%] rounded-lg md:block" src="{{ asset('assets/img/s-guy.jpeg') }}">
        <div class="space hidden h-full px-4 lg:flex"></div>
        <div class="w-[45%] flex flex-col text-sm">
            <h3 class="mb-4 text-right text-sm font-semibold md:text-lg">O Resultado</h3>
            <p class="text-sm font-light md:text-lg">
                Após a conclusão do questionário, a aplicação usará de alguns critérios antes de retornar um resultado de forma definitiva ao usuário, com base em diversos fatores. Mapeando, assim, o seu perfil empreendedor.
            </p>
        </div>
        
    </div>
    <div class="my-[12.5%] w-full"></div>

    <div class="flex h-fit w-full flex-col items-center justify-center bg-emerald-300 px-[1.5rem] py-[1rem] dark:bg-emerald-500">
        <h3 class="mb-4 text-2xl font-semibold">Nossa Equipe</h3>

        <div class="flex h-full w-full flex-row overflow-x-auto">
            @for ($i = 0; $i < 5; $i++)
                <div class="mx-[.3rem] h-full w-fit flex-shrink-0 rounded-md bg-slate-500 first:ml-0 last:mr-0">
                    <img alt="Imagem" class="w-[2.7cm] md:w-[3cm] lg:w-[5cm]" src="https://i.pinimg.com/1200x/24/16/a5/2416a57ec634dfebcfcc3cf6fad1bc7d.jpg">
                </div>
            @endfor
        </div>
    </div>
@endsection
