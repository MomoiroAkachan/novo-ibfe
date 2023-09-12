@extends('layouts.master')

@section('title', 'Sobre')

@section('pre-content')
    <div class="flex h-[7rem] md:h-[15rem] w-full items-end justify-center bg-emerald-700 text-black">
        <h1 class="w-fit md:text-3xl md:px-[4rem] md:py-[1.2rem] md:rounded-t-lg rounded-t-md dark:bg-slate-800 dark:text-slate-300 bg-white px-[1rem] text-center text-lg">
            Sobre
        </h1>
    </div>
@endsection

@section('content')
    <div class="flex h-fit w-full flex-col mt-[5rem]">
        <div class="flex w-full h-fit flex-row flex-1">
            <div class="flex flex-1 flex-col ml-[.3rem]">
                <h3 class="font-noto_serif mb-4 text-lg font-semibold">O que nós fazemos?</h3>
                <p class="text-sm font-light">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias ducimus deleniti temporibus ut a tempora cumque dolore sunt, ad ipsa saepe doloribus aperiam, omnis commodi id optio enim! Ab, cumque.
                </p>
            </div>
            <div class="ml-1 flex-1 bg-slate-500">
            </div>
        </div>

        <div class="my-[5rem] mr-1 flex w-full flex-row justify-center flex-1">
            <p class="text-sm w-[75%] font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis quam maxime cum. Quo, provident. Ad omnis numquam aperiam. Fugiat, minus est quam ullam velit suscipit fuga
                voluptatibus accusantium dolores excepturi.</p>
        </div>

        <div class="mb-10 mr-1 flex w-full flex-row-reverse justify-center flex-1">
            <div class="flex flex-1 ml-[.3rem] flex-col text-sm">
                <h3 class="mb-4 text-lg font-semibold">O resultado final</h3>
                <p class="text-sm font-light">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias ducimus deleniti temporibus ut a tempora cumque dolore sunt, ad ipsa saepe doloribus aperiam, omnis commodi id optio enim! Ab, cumque.
                </p>
            </div>
            <div class="ml-1 flex-1 bg-slate-500">
            </div>
        </div>
    </div>


    <div class="flex h-fit w-full flex-col items-center justify-center bg-emerald-300 mt-[2rem] py-[1rem] px-[1.5rem]">
        <h3 class="mb-4 text-2xl font-semibold">Nossa Equipe</h3>

        <div class="flex h-full w-full flex-row overflow-x-auto">
            @for ($i = 0; $i < 5; $i++)
                <div class="mx-[.3rem] first:ml-0 last:mr-0 h-full w-fit rounded-md bg-slate-500 flex-shrink-0">
                    <img class="w-[2.7cm] md:w-[3cm] lg:w-[5cm]" src="https://i.pinimg.com/1200x/24/16/a5/2416a57ec634dfebcfcc3cf6fad1bc7d.jpg" alt="Imagem">
                </div>
            @endfor
        </div>
    </div>
@endsection
