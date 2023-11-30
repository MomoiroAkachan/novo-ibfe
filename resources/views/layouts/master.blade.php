<!DOCTYPE html>
<html lang="{{ Str::of(config('app.locale'))->replace('_', '-') }}">
<head>
    {{-- Algumas metatags --}}
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    {{-- Recursos do site --}}    
    <link rel="shortcut icon" href="../../images/app_logo.svg" type="image/x-icon">
    <title>@yield('title') / {{ Str::upper(config('app.name')) }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    @if (config('app.env') == 'production')
        <link rel="stylesheet" href="build/assets/master.css">
    @else
        @vite(['resources/scss/master.scss', 'resources/js/ie-fwk.js'])
    @endif

    @php
        if(!isset($ie_fixed_navbar))
            $ie_fixed_navbar = true;

        if(!isset($ie_show_navbar))
            $ie_show_navbar = true;
    @endphp

    @yield('head')

</head>

<body>
{{-- Espaçador --}}
<div class="flex bg-slate-100 h-[.6rem] flex-grow"></div>

<a href="{{ route('profile.delete') }}" class="fixed bottom-0 right-0 z-10 px-4 py-2 rounded-md border border-green-200">Reiniciar Questionário</a>

{{-- Navbar do site --}}
@livewire('ie-navbar', ['ie_fix_navbar' => $ie_fixed_navbar, 'ie_show_navbar' => $ie_show_navbar])

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

{{-- Rodapé --}}
@include('layouts.footer_data')
</body>

{{-- @if (config('app.env') == 'prod')
    <script src="{{ asset('build/assets/ie-fwk-3181b1e4.js') }}"></script>
@endif --}}

<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

</html>
