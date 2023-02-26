<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--sweet alert--}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- PARA PERSONALIZAR LOS TITULOS EN CADA SECCION --}}
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>

        @include('nav.superiornav')
        <main class="mt-5 pt-5 ">
            @yield('content')
        </main>


    <script src="sweetalert2.all.min.js"></script>


</body>
</html>
