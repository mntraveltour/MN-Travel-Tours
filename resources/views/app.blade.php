<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Icon -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/LineIcons.2.0.css')}}">
        <!-- Animate -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
        <!-- Animate -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
        <!-- Tiny Slider  -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/tailwind.css')}}">
        

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
