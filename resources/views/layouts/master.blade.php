<!DOCTYPE html>
<html lang="{{ Str::of(config('app.locale'))->replace('_', '-') }}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">

    <title>@yield('title') / {{ Str::upper(config('app.name')) }}</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">

    @if (config('app.env') == 'production')
        <link href="{{ asset('build/assets/home-e00103cd.css') }}" rel="stylesheet">
        <link href="{{ asset('build/assets/ie-framework-1e241295.css') }}" rel="stylesheet">
    @else
        @vite(['resources/scss/master.scss', 'resources/js/ie-framework.js'])
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

{{-- Espaçamento para o rodapé --}}
<div class="m-[20%] w-full"></div>

{{-- Rodapé --}}
@include('layouts.footer_data')
</body>

@if (config('app.env') == 'production')
    <script src="{{ asset('build/assets/ibfe_framework-0d84ccda.js') }}"></script>
@endif
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</html>
