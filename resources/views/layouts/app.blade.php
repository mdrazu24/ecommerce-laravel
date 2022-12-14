<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'E-commerce') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">



    @section('header')
        <x-header />
    @show



    <div class="min-h-screen flex">
        {{-- @section('sidebar')
            <x-sidebar />
        @show --}}
        <main class="p-4">
            @yield('content')
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
