<!DOCTYPE html>
<html lang="{{ Str::of(config('app.locale'))->replace('_', '-') }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>@yield('title') / {{ Str::upper(config('app.name')) }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">

    @production
        <link href="{{ assets('build/assets/app-e78d9c93.css') }}" rel="stylesheet">
        <link href="{{ assets('build/assets/ie-framework-b9e58ad2.css') }}" rel="stylesheet">
    @else
        @vite(['resources/css/ie-framework.css', 'resources/js/ibfe_framework.js'])
    @endproduction

    @yield('head')
</head>

<body class="dark:bg-slate-800 dark:text-slate-300">
    <div class="h-full w-full" id="ie-theme-config">
        {{-- Navbar do site --}}
        @livewire('ie-navbar')

        {{-- Espaçador --}}
        <div class="flex h-[3.2rem] flex-grow md:h-[3.6rem]"></div>

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
        <footer class="mb-4 flex h-fit w-full flex-col justify-between px-[10%] text-sm md:px-[8%] md:text-base lg:px-[14%]">
            <div class="flex flex-row">
                <div class="flex max-w-[33%] flex-grow flex-col md:max-w-[25%]">
                    <p class="text-justify text-xs md:text-sm">
                        Esta ferramenta é propriedade do Instituto Federal do Norte de Minas Gerais (IFNMG), por meio do registro no INPI nº BR51202300030
                    </p>
                    <ul class="mt-2 flex flex-grow list-none flex-row flex-wrap justify-evenly">
                        <li><img alt="Logotipo do Facebook" class="w-[1.5rem]" src="https://www.svgrepo.com/show/424922/facebook-logo-meta-2.svg"></li>
                        <li><img alt="Logotipo do linkedin" class="w-[1.5rem]" src="https://www.svgrepo.com/show/447416/linkedin.svg"></li>
                        <li><img alt="Logotipo do twitter" class="w-[1.5rem]" src="https://www.svgrepo.com/show/364957/twitter-logo-fill.svg"></li>
                        <li><img alt="Logotipo do Instagram" class="w-[1.5rem]" src="https://www.svgrepo.com/show/424911/instagram-logo-facebook-2.svg"></li>
                    </ul>
                </div>

                <div class="mx-[5%] flex flex-grow flex-col">
                    <div class="flex w-fit flex-1 flex-col">
                        <h5 class="mb-2 font-serif font-semibold">Páginas</h5>
                        <ul class="pages-list list-none text-xs md:text-sm">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Sobre</a></li>
                            <li><a href="#">Questionário</a></li>
                            <li><a href="#">Serviços</a></li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-grow flex-col">
                    <h5 class="mb-1 font-serif font-semibold">Contate-nos</h5>
                    <p class="my-1 text-xs">
                        IFNMG - Campus Teófilo Otoni<br>R. Mocambi, 295 - Viriato, Teófilo Otoni - MG, 39800-430
                    </p>
                    <p class="my-1 text-xs">ibfe.web@ifnmg.edu.br</p>
                    <p class="my-1 text-xs">+55 (33) 3218-7364</p>
                </div>
            </div>
            <div class="mt-3 flex flex-grow flex-col">
                <h5 class="mb-2 font-serif font-semibold text-center">Créditos</h5>
                <p class="text-xs">
                    <a
                        href="https://br.freepik.com/vetores-gratis/lideranca-e-promocao-de-empregos-projeto-de-sucesso-lancamento-de-startup-desenvolvimento-lider-de-equipe-personagem-plano-do-ceo-mulher-dos-desenhos-animados-sentada-no-foguete_12083074.htm#query=rocket&position=5&from_view=author">Imagem
                        de vectorjuice
                    </a> no Freepik
                </p>
                <p class="text-xs">
                    <a
                        href="https://br.freepik.com/vetores-gratis/geracao-de-ideia-de-negocio-desenvolvimento-do-plano-homem-pensativo-com-personagem-de-desenho-animado-de-lampada-mentalidade-tecnica-mente-empreendedora-processo-de-brainstorming_11668582.htm#query=doubt&position=1&from_view=author">Imagem
                        de vectorjuice</a> no Freepik
                </p>

                <p class="text-xs">
                    <a
                        href="https://br.freepik.com/vetores-gratis/dicas-e-ideias-criativas-elemento-de-design-plano-isolado-de-inovacao-empresarial-solucao-de-problemas-conselhos-brainstorming-pensamento-do-personagem-masculino_10780213.htm#query=solution&position=0&from_view=author">Imagem
                        de vectorjuice</a> no Freepik
                </p>
                <p class="text-xs">
                    Vectors and icons by <a href="https://www.figma.com/community/file/1166831539721848736?ref=svgrepo.com" target="_blank">Solar Icons</a> in CC Attribution License via <a href="https://www.svgrepo.com/" target="_blank">SVG Repo</a>
                </p>
            </div>
        </footer>
    </div>
</body>

@production
    <script src="{{ asset('build/assets/app-9795af21.js') }}"></script>
    <script src="{{ asset('build/assets/ibfe_framework-02bf8553.js') }}"></script>
    <script src="{{ asset('build/assets/master-4ed993c7.js') }}"></script>
@endproduction

</html>
