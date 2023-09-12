<!DOCTYPE html>
<html lang="{{ Str::of(config('app.locale'))->replace('_', '-') }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>@yield('title') / {{ Str::upper(config('app.name')) }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/ibfe_framework.js'])

    @yield('head')
</head>

<body>
    <div class="dark:bg-slate-800 dark:text-slate-300 w-full h-full" id="ie-theme-config">
        {{-- Botão de troca de tema, escuro para claro --}}
        <div class="fixed right-0 top-0 p-4 px-[1rem]">
            <button class="rounded-sm bg-black px-[1rem] py-[.5rem] text-sm font-black uppercase text-white transition-all hover:bg-white hover:text-black hover:outline hover:outline-2" id="theme-switch">tema</button>
        </div>

        {{-- Navbar do site --}}
        <x-ie_landing_navbar />

        {{-- Facha verde --}}
        <div class="mx-[1rem] h-[.2rem] flex-1 bg-emerald-400 lg:h-[.5rem]"></div>

        {{-- Tela blur/desfocada --}}
        <div class="fixed left-0 top-0 z-10 hidden h-full w-full items-center justify-center bg-[#0000002a] backdrop-blur-sm" id="ie-blur-screen">
        </div>

        {{-- Conteúdo pré-contexto --}}
        @yield('pre-content')

        {{-- Contexto da página --}}
        <div class="z-0 flex flex-col px-[10%] md:px-[12%] lg:px-[18%]" id="page-content">
            @yield('content')
        </div>

        {{-- Conteúdo pós-contexto --}}
        @yield('post-content')

        {{-- Caixas de Mensagem, ie-framework --}}
        @isset($message_type)
            <x-page_dialog :type='$message_type' :message='$message' />
        @endisset
    </div>
</body>

</html>
