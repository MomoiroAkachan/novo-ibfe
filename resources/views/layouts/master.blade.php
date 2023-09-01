<!DOCTYPE html>
<html lang="{{ Str::of(config('app.locale'))->replace('_', '-') }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>@yield('title') / {{ Str::upper(config('app.name')) }}</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/master.js'])
    @yield('head')
</head>

<body>
    <x-ie_landing_navbar/>
    <div id="ie-blur-screen" class="fixed left-[20%] top-[20%] z-10 bg-[#0000002a] p-10 backdrop-blur-md" style="display: none;"></div>

    <div class="pg-context z-0">
        @yield('content')
        @yield('post-content')
    </div>

    @isset($message_type)
        <x-page_dialog :type='$message_type' :message='$message' />
    @endisset
</body>

</html>
