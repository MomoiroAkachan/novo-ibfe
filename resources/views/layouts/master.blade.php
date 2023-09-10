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
    <div class="fixed top-0 right-0 px-[1rem]">
        <button id="theme-switch" class="text-sm hover:bg-white hover:outline hover:outline-2 hover:text-black bg-black text-white transition-all rounded-sm px-[.5rem] font-black">MUDAR</button>
    </div>

    <x-ie_landing_navbar />
    <div class="h-[.2rem] lg:h-[.5rem] flex-1 bg-emerald-400 mx-[1rem]"></div>
    <div class="fixed left-0 top-0 z-10 bg-[#0000002a] flex items-center justify-center w-full h-full backdrop-blur-md" id="ie-blur-screen" style="display: none;"></div>

    @yield('pre-content')

    <div class="pg-context z-0 px-[1.5rem] flex flex-col">
        @yield('content')
    </div>

    @yield('post-content')

    @isset($message_type)
        <x-page_dialog :type='$message_type' :message='$message' />
    @endisset
</body>
</html>
