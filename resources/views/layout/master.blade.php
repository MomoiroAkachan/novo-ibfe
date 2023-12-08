<!DOCTYPE html>
<html lang="{{ Str::of(config('app.locale'))->replace('_', '-') }}">
<head>
    {{-- Algumas metatags para melhorar compatibilidade --}}
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    {{-- Recursos do site --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>{{ Str::upper(config('app.name')) }} | @yield('title')</title>
    
    {{-- Material icons - ícones gratuitos do google --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- Dependências do vite, inclusas 1 vez apenas --}}
    @once
        @vite('resources/scss/master.scss')
    @endonce

    @yield('head')

</head>

<body>
<a href="{{ route('profile.delete') }}" class="mt-4 fixed bottom-0 right-0 z-10 px-4 py-2 rounded-md border border-green-200">Reiniciar Questionário</a>

{{-- Navbar do site --}}
@livewire('ie-navbar')

{{-- Conteúdo pré-contexto --}}
@yield('pre-content')

{{-- Contexto da página --}}
<div class="z-0 flex flex-col px-[10%] md:px-[12%] lg:px-[18%]" id="page-content">
    @yield('content')
</div>

{{-- Conteúdo pós-contexto --}}
@yield('post-content')

{{-- Rodapé --}}
@include('layout.footer')
</body>

<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

</html>