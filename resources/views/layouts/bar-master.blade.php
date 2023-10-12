<!DOCTYPE html>
<html lang="{{ Str::of(config('app.locale'))->replace('_', '-') }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>@yield('title') / {{ Str::upper(config('app.name')) }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}">

    @production
        <link href="{{ assets('build/assets/app-a235776a.css') }}" rel="stylesheet">
    @else
        @vite(['resources/css/ie-framework.css', 'resources/js/ibfe_framework.js'])
    @endproduction

    @yield('head')
</head>

<body class="dark:bg-slate-800 dark:text-slate-300">
    <div class="h-full w-full" id="ie-theme-config">
        {{-- Navbar do site --}}
        <style>
            .ie-navbar{
                position: static;
            }
        </style>
        @livewire('ie-navbar')

        {{-- Facha verde --}}
        <div class="h-[.2rem] flex-1 bg-emerald-400 lg:h-[.5rem]"></div>

        {{-- Conteúdo pré-contexto --}}
        @yield('pre-content')

        {{-- Contexto da página --}}
        <div class="z-0 flex flex-col px-[10%] md:px-[12%] lg:px-[18%]" id="page-content">
            @yield('content')
        </div>

        {{-- Conteúdo pós-contexto --}}
        @yield('post-content')
    </div>
</body>

@production
    <script src="{{ asset('build/assets/ibfe_framework-02bf8553.js') }}"></script>
    <script src="{{ asset('build/assets/master-4ed993c7.js') }}"></script>
@endproduction

</html>
