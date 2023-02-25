<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
   {{-- PARA PERSONALIZAR LOS TITULOS EN CADA SECCION --}}
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/js/j.js'])

</head>

<body>
 @include('nav.side')

</body>
</html>
