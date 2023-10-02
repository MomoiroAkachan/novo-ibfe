@extends('layouts.blank')

@section('title', 'Erro')

@section('content')
    <div class="flex h-full w-full flex-col items-center mt-[3rem]">
        <img alt="Opps!" src="{{ asset('assets/img/oops.svg') }}">

        @isset($code)
            @switch($code)
                @case(404)
                    <p class=" font-semibold text-2xl">Aparentemente esta página não existe.</p>
                    <p class=" text-red-900 font-semibold text-xl">Erro {{ $code }}!</p>
                    <p class=" text-base">A página que está tentando acessar não existe.</p>
                @break

                @case(401)
                    <p class=" font-semibold text-2xl">Você não tem acesso a esta página!</p>
                    <p class=" text-red-900 font-semibold text-xl">Erro {{ $code }}!</p>
                @break

                @default
                    <p>Erro desconhecido.</p>
                @break
            @endswitch
        @endisset
        <div class="spacer w-full h-[2rem]"></div>
        <a class=" hover:bg-transparent transition-all hover:text-emerald-600 hover:outline hover:outline-emerald-500 bg-emerald-500 px-4 py-2 rounded-md font-sans text-lg font-bold text-emerald-50" href="{{ route('home') }}">Início</a>
    </div>
@endsection
