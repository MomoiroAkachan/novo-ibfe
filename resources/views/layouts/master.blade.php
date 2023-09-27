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

<body class="dark:bg-slate-800 dark:text-slate-300">
    <div class="h-full w-full" id="ie-theme-config">
        {{-- Navbar do site --}}
        <x-ie_landing_navbar />

        {{-- Espaçador --}}
        <div class="spacer w-full h-14"></div>

        {{-- Facha verde --}}
        <div class="h-[.2rem] flex-1 bg-emerald-400 lg:h-[.5rem]"></div>

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

        {{-- Espaçamento para o rodapé --}}
        <div class="m-[20%] w-full"></div>

        {{-- Rodapé --}}
        <footer class="flex h-fit mb-4 w-full justify-between flex-row text-sm md:text-base px-[10%] md:px-[12%] lg:px-[18%]">
            <div class="flex flex-1 flex-col pr-[10%]">
                <p class="font-light text-xs md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <ul class="mt-2 flex list-none flex-row flex-wrap">
                    <li><img class="w-[1rem]" alt="Logotipo do Facebook" src="https://www.svgrepo.com/show/424922/facebook-logo-meta-2.svg"></li>
                    <li><img class="w-[1rem]" alt="Logotipo do linkedin" src="https://www.svgrepo.com/show/447416/linkedin.svg"></li>
                    <li><img class="w-[1rem]" alt="Logotipo do twitter" src="https://www.svgrepo.com/show/364957/twitter-logo-fill.svg"></li>
                    <li><img class="w-[1rem]" alt="Logotipo do Instagram" src="https://www.svgrepo.com/show/424911/instagram-logo-facebook-2.svg"></li>
                </ul>
            </div>

            <div class="flex flex-1 flex-col w-fit">
                <h5 class="mb-3 font-serif font-semibold">Páginas</h5>
                <ul class="pages-list list-none text-xs md:text-sm">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Questionário</a></li>
                    <li><a href="#">Serviços</a></li>
                </ul>
            </div>

            <div class="flex flex-1 flex-col">
                <h5 class="mb-3 font-serif font-semibold">Contate-nos</h5>
                <p class="my-2 text-xs">Rua A, nº95, Bairro B, Teófilo Otoni - MG</p>
                <p class="my-2 text-xs">ibfe@ibfmail.com</p>
                <p class="my-2 text-xs">+55 (33) 9 1232 - 4924</p>
            </div>
        </footer>
    </div>
</body>

</html>
