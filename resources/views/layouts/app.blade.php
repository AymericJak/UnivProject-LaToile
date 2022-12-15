<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <script type="text/javascript" src="script.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/scss/app.scss','resources/css/app.css','resources/js/app.js'])
</head>
<body>
@include('layouts.header')

@yield('content')

@include('layouts.footer')

</body>
</html>
