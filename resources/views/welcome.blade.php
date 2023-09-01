<!DOCTYPE html>
<html lang="{{ str_replace(config('app.locale'), '_', '-') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-red-50">
    <h1 class="text-[3rem] text-slate-800 font-semibold font-sans">Semibolder</h1>
</body>
</html>