<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
    <x-banner />
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <nav class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
            <div class="flex flex-wrap justify-between items-center">
                <div class="flex justify-start items-center">
                    <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation" class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg aria-hidden="true" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Toggle sidebar</span>
                    </button>
                    <a href="{{ route('dashboard') }}" class="flex items-center justify-between mr-4">
                        <x-application-logo class="" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Necryx</span>
                    </a>
                    <form action="#" method="GET" class="hidden md:block md:pl-2">
                        <label for="topbar-search" class="sr-only">Rechercher</label>
                        <div class="relative w-64 md:w-96">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                                </svg>
                            </div>
                            <input type="text" name="email" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Rechercher" />
                        </div>
                    </form>
                </div>
                <div class="flex items-center lg:order-2">
                    <button type="button" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation" class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                        <span class="sr-only">Toggle search</span>
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                        </svg>
                    </button>
                    <!-- Notifications -->
                    <button type="button" data-dropdown-toggle="notification-dropdown" class="p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                        <span class="sr-only">View notifications</span>
                        <!-- Bell icon -->
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                        </svg>
                    </button>


                    <!-- Dropdown menu profile -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                    {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.admin') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </nav>

        <!-- Sidebar -->

        <aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-24 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidenav" id="drawer-navigation">
            <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
                <form action="#" method="GET" class="md:hidden mb-2">
                    <label for="sidebar-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                            </svg>
                        </div>
                        <input type="text" name="search" id="sidebar-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" />
                    </div>
                </form>
                <ul class="space-y-2">
                    <li>
                        <a href="" class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M440.88 129.37L288.16 40.62a64.14 64.14 0 0 0-64.33 0L71.12 129.37a4 4 0 0 0 0 6.9L254 243.85a4 4 0 0 0 4.06 0L440.9 136.27a4 4 0 0 0-.02-6.9ZM256 152c-13.25 0-24-7.16-24-16s10.75-16 24-16s24 7.16 24 16s-10.75 16-24 16Zm-18 118.81L54 163.48a4 4 0 0 0-6 3.46v173.92a48 48 0 0 0 23.84 41.39L234 479.48a4 4 0 0 0 6-3.46V274.27a4 4 0 0 0-2-3.46ZM96 368c-8.84 0-16-10.75-16-24s7.16-24 16-24s16 10.75 16 24s-7.16 24-16 24Zm96-32c-8.84 0-16-10.75-16-24s7.16-24 16-24s16 10.75 16 24s-7.16 24-16 24Zm266-172.49L274 271.56a4 4 0 0 0-2 3.45V476a4 4 0 0 0 6 3.46l162.15-97.23A48 48 0 0 0 464 340.86V167a4 4 0 0 0-6-3.49ZM320 424c-8.84 0-16-10.75-16-24s7.16-24 16-24s16 10.75 16 24s-7.16 24-16 24Zm0-88c-8.84 0-16-10.75-16-24s7.16-24 16-24s16 10.75 16 24s-7.16 24-16 24Zm96 32c-8.84 0-16-10.75-16-24s7.16-24 16-24s16 10.75 16 24s-7.16 24-16 24Zm0-88c-8.84 0-16-10.75-16-24s7.16-24 16-24s16 10.75 16 24s-7.16 24-16 24Z" /></svg>
                            <span class="ml-3">Collection</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M464 249.93a10.58 10.58 0 0 0-9.36-9.94L429 235.84a5.42 5.42 0 0 1-4.5-4.67c-.49-3.15-1-6.42-1.7-9.52a5.52 5.52 0 0 1 2.63-5.85l22.78-12.65a10.35 10.35 0 0 0 5-12.83l-3.95-10.9a10.32 10.32 0 0 0-12.13-6.51l-25.55 5a5.51 5.51 0 0 1-5.82-2.81c-1.49-2.79-3.11-5.63-4.8-8.42a5.6 5.6 0 0 1 .44-6.5l17-19.64a10.42 10.42 0 0 0 .39-13.76l-7.42-8.91a10.24 10.24 0 0 0-13.58-2l-22.37 13.43a5.39 5.39 0 0 1-6.39-.63c-2.47-2.17-5-4.26-7.37-6.19a5.45 5.45 0 0 1-1.72-6.21l9.26-24.4a10.35 10.35 0 0 0-4.31-13.07l-10.09-5.89a10.3 10.3 0 0 0-13.45 2.83L325 96.28a4.6 4.6 0 0 1-5.6 1.72c-.61-.25-5.77-2.36-9.78-3.7a5.42 5.42 0 0 1-3.74-5.23l.39-26.07a10.48 10.48 0 0 0-8.57-10.88l-11.45-2a10.45 10.45 0 0 0-11.75 7.17L266 82.1a5.46 5.46 0 0 1-5.36 3.65h-9.75a5.5 5.5 0 0 1-5.3-3.67l-8.46-24.67a10.46 10.46 0 0 0-11.77-7.25l-11.47 2a10.46 10.46 0 0 0-8.56 10.79l.4 26.16a5.45 5.45 0 0 1-3.86 5.25c-2.29.89-7.26 2.79-9.52 3.63c-2 .72-4.18-.07-5.94-2.1l-16.26-20A10.3 10.3 0 0 0 156.69 73l-10.06 5.83A10.36 10.36 0 0 0 142.31 92l9.25 24.34a5.54 5.54 0 0 1-1.7 6.23c-2.43 2-4.92 4-7.4 6.22a5.38 5.38 0 0 1-6.35.64L114 115.74a10.4 10.4 0 0 0-13.61 2L93 126.63a10.31 10.31 0 0 0 .37 13.75L110.45 160a5.42 5.42 0 0 1 .45 6.45c-1.71 2.72-3.34 5.58-4.82 8.44a5.53 5.53 0 0 1-5.86 2.82l-25.51-4.93a10.34 10.34 0 0 0-12.14 6.51l-4 10.88a10.38 10.38 0 0 0 5 12.85l22.78 12.65a5.39 5.39 0 0 1 2.65 5.92l-.24 1.27c-.52 2.79-1 5.43-1.46 8.24a5.48 5.48 0 0 1-4.46 4.64l-25.69 4.15A10.42 10.42 0 0 0 48 250.16v11.58A10.26 10.26 0 0 0 57.16 272l25.68 4.14a5.41 5.41 0 0 1 4.5 4.67c.49 3.16 1 6.42 1.7 9.52a5.52 5.52 0 0 1-2.63 5.85l-22.77 12.67a10.35 10.35 0 0 0-5 12.83l4 10.9a10.33 10.33 0 0 0 12.13 6.51l25.55-4.95a5.49 5.49 0 0 1 5.82 2.81c1.5 2.8 3.11 5.63 4.8 8.42a5.58 5.58 0 0 1-.44 6.5l-17 19.63a10.41 10.41 0 0 0-.5 13.77l7.41 8.91a10.23 10.23 0 0 0 13.58 2l22.37-13.43a5.39 5.39 0 0 1 6.39.63c2.48 2.17 5 4.26 7.37 6.19a5.47 5.47 0 0 1 1.73 6.21l-9.27 24.4a10.35 10.35 0 0 0 4.31 13.07l10.11 5.84a10.3 10.3 0 0 0 13.45-2.82L187 415.92c1.4-1.73 3.6-2.5 5.23-1.84c3.48 1.44 5.81 2.25 9.94 3.63a5.44 5.44 0 0 1 3.75 5.23l-.4 26.05a10.5 10.5 0 0 0 8.57 10.88l11.45 2a10.43 10.43 0 0 0 11.75-7.17l8.5-24.77a5.45 5.45 0 0 1 5.36-3.65h9.75a5.49 5.49 0 0 1 5.3 3.67l8.47 24.67a10.48 10.48 0 0 0 10 7.41a9.74 9.74 0 0 0 1.78-.16l11.47-2a10.46 10.46 0 0 0 8.56-10.79l-.4-26.16a5.43 5.43 0 0 1 3.75-5.2c3.84-1.29 6.54-2.33 8.91-3.25l.6-.23c3.1-1.07 4.6.23 5.47 1.31l16.75 20.63A10.3 10.3 0 0 0 355 439l10.07-5.83a10.35 10.35 0 0 0 4.31-13.1l-9.24-24.34a5.52 5.52 0 0 1 1.69-6.23c2.43-2 4.92-4 7.4-6.22a5.39 5.39 0 0 1 6.38-.62l22.39 13.4a10.39 10.39 0 0 0 13.61-2l7.4-8.9a10.31 10.31 0 0 0-.37-13.75l-17.06-19.67a5.42 5.42 0 0 1-.45-6.45c1.71-2.71 3.34-5.57 4.82-8.44a5.55 5.55 0 0 1 5.86-2.82l25.48 4.97a10.34 10.34 0 0 0 12.14-6.51l3.95-10.88a10.37 10.37 0 0 0-5-12.84l-22.8-12.67a5.4 5.4 0 0 1-2.61-5.89l.24-1.27c.52-2.79 1-5.43 1.46-8.24a5.48 5.48 0 0 1 4.46-4.64l25.69-4.14a10.43 10.43 0 0 0 9.18-10.28v-11.71Zm-282.45 94a15.8 15.8 0 0 1-25.47 2.66a135.06 135.06 0 0 1 .42-181.65a15.81 15.81 0 0 1 25.5 2.77l45.65 80.35a15.85 15.85 0 0 1 0 15.74ZM256 391.11a134.75 134.75 0 0 1-28.31-3a15.81 15.81 0 0 1-10.23-23.36l46-80a15.79 15.79 0 0 1 13.7-7.93h92.14a15.8 15.8 0 0 1 15.1 20.53c-17.49 54.32-68.4 93.76-128.4 93.76Zm7.51-163.9L218 147.07a15.81 15.81 0 0 1 10.31-23.3a134 134 0 0 1 27.69-2.88c60 0 110.91 39.44 128.37 93.79a15.8 15.8 0 0 1-15.1 20.53h-92a15.78 15.78 0 0 1-13.76-8Z" /></svg>
                            <span class="ml-3">Types</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tags.index') }}" class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M400 0H176a64.11 64.11 0 0 0-62 48h228a74 74 0 0 1 74 74v304.89l22 17.6a16 16 0 0 0 19.34.5a16.41 16.41 0 0 0 6.66-13.42V64a64 64 0 0 0-64-64Z" />
                                <path fill="currentColor" d="M320 80H112a64 64 0 0 0-64 64v351.62A16.36 16.36 0 0 0 54.6 509a16 16 0 0 0 19.71-.71L216 388.92l141.69 119.32a16 16 0 0 0 19.6.79a16.4 16.4 0 0 0 6.71-13.44V144a64 64 0 0 0-64-64Z" /></svg>
                            <span class="ml-3">Tags</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('articles.index') }}" class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M439.91 112h-23.82a.09.09 0 0 0-.09.09V416a32 32 0 0 0 32 32a32 32 0 0 0 32-32V152.09A40.09 40.09 0 0 0 439.91 112Z" />
                                <path fill="currentColor" d="M384 416V72a40 40 0 0 0-40-40H72a40 40 0 0 0-40 40v352a56 56 0 0 0 56 56h342.85a1.14 1.14 0 0 0 1.15-1.15a1.14 1.14 0 0 0-.85-1.1A64.11 64.11 0 0 1 384 416ZM96 128a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v64a16 16 0 0 1-16 16h-64a16 16 0 0 1-16-16Zm208 272H112.45c-8.61 0-16-6.62-16.43-15.23A16 16 0 0 1 112 368h191.55c8.61 0 16 6.62 16.43 15.23A16 16 0 0 1 304 400Zm0-64H112.45c-8.61 0-16-6.62-16.43-15.23A16 16 0 0 1 112 304h191.55c8.61 0 16 6.62 16.43 15.23A16 16 0 0 1 304 336Zm0-64H112.45c-8.61 0-16-6.62-16.43-15.23A16 16 0 0 1 112 240h191.55c8.61 0 16 6.62 16.43 15.23A16 16 0 0 1 304 272Zm0-64h-63.55c-8.61 0-16-6.62-16.43-15.23A16 16 0 0 1 240 176h63.55c8.61 0 16 6.62 16.43 15.23A16 16 0 0 1 304 208Zm0-64h-63.55c-8.61 0-16-6.62-16.43-15.23A16 16 0 0 1 240 112h63.55c8.61 0 16 6.62 16.43 15.23A16 16 0 0 1 304 144Z" /></svg>
                            <span class="ml-3">Articles</span>
                        </a>
                    </li>
                </ul>
                <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
                </ul>
            </div>
            <div class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20">
                <a href="#" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path>
                    </svg>
                </a>
                <a href="#" data-tooltip-target="tooltip-settings" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <div id="tooltip-settings" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
                    Settings page
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

            </div>
        </aside>

        <main class="p-4 md:ml-64 min-h-screen pt-20">
            {{$slot}}
        </main>
    </div>

    @stack('modals')

    @livewireScripts

</body>
</html>
