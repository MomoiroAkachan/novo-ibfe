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
        <div class="flex h-fit w-full flex-1 flex-row">
            <div class="ml-[.3rem] flex flex-1 flex-col">
                <h3 class="mb-4 text-left font-semibold">O que nós fazemos?</h3>
                <p class="font-light">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias ducimus deleniti temporibus ut a tempora cumque dolore sunt, ad ipsa saepe doloribus aperiam, omnis commodi id optio enim! Ab, cumque.
                </p>
            </div>
            <img alt="" class="ml-1 hidden max-w-[50%] flex-1 rounded-lg md:block" src="https://mentalidadeempreendedora.com.br/wp-content/uploads/2015/08/motivos-para-empreender.jpg">
        </div>
    </div>

    <div class="mr-1 flex h-fit w-full flex-1 flex-row items-center justify-center py-4 md:px-[8%] lg:px-[12%]">
        <span class="mr-[.5rem] flex flex-col items-center justify-center text-[6cm] text-[#9fdf]">{</span>
        <p class="mt-4 flex h-fit text-sm flex-grow-0 font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis quam maxime cum. Quo, provident. Ad omnis numquam aperiam. Fugiat, minus est quam ullam velit suscipit fuga
            voluptatibus accusantium dolores excepturi.</p>
        <span class="ml-[.5rem] flex items-center justify-center text-[6cm] text-[#9fdf]">}</span>
    </div>

    <div class="mb-10 mr-1 flex w-full flex-1 flex-row-reverse justify-center">
        <div class="ml-[.3rem] flex flex-1 flex-col text-sm">
            <h3 class="mb-4 text-right text-sm font-semibold md:text-lg">O resultado final</h3>
            <p class="text-sm font-light md:text-lg">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias ducimus deleniti temporibus ut a tempora cumque dolore sunt, ad ipsa saepe doloribus aperiam, omnis commodi id optio enim! Ab, cumque.
            </p>
        </div>
        <div class="space hidden h-full px-4 lg:flex"></div>
        <img alt="" class="ml-1 hidden max-w-[50%] flex-1 rounded-lg md:block" src="https://mentalidadeempreendedora.com.br/wp-content/uploads/2015/08/motivos-para-empreender.jpg">
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
