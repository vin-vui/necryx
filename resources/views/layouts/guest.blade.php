<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Necryx') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=bruno-ace:400" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="overflow-x-hidden">

    <!-- Header -->
    @if (!request()->routeIs('login'))
    @if (!request()->routeIs('register'))
    @if (!request()->routeIs('password.request'))
    @include('home._partials.header')
    @endif
    @endif
    @endif

    <!-- Page content -->
    <div class="font-sans text-gray-900 antialiased bg-seasalt">
        {{ $slot }}
    </div>

    <!-- Footer -->
    @if (!request()->routeIs('login'))
    @if (!request()->routeIs('register'))
    @if (!request()->routeIs('password.request'))
    @include('home._partials.footer')
    @endif
    @endif
    @endif

    @if (session('success'))
    <div class="fixed z-50 bottom-4 right-4 bg-yellow-500 hover:bg-yellow-600 transition-all cursor-pointer text-black p-4 font-p">
        {{ session('success') }}
    </div>
    @endif

    <!-- Scripts -->
    @livewireScripts
</body>
</html>
