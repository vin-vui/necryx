<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=bruno-ace:400|nunito-sans:500" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

    <!-- Styles -->
    @livewireStyles
</head>


<body>
    <header class="bg-seasalt text-onyx">
        <nav class="w-full py-4 px-6">
            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center">
                    <!-- Wrap logo and menu items together -->
                    <a href="{{ url('/') }}" class="flex items-center">
                        <img src="{{ Storage::url('/Logo_Final.png') }}" alt="Logo" class="h-24">
                    </a>
                    <ul
                        class="ml-8 flex flex-row font-medium space-x-8 md:text-sm md:border-0 md:bg-transparent dark:bg-white-800 md:dark:bg-white-900 dark:border-gray-700">
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between rounded md:border-0 text-base"> Collection
                                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"
                                class="z-10 hidden w-44 font-necryx text-onyx divide-y divide-gray-100 rounded-lg shadow">
                                <ul class="mt-4 py-2 text-sm dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 font-necryx text-onyx">Item 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 font-necryx text-onyx">Item 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 font-necryx text-onyx">Item 3</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="md:p-0 text-onyx py-2 pl-3 pr-4 text-base">Concepts & Conseils</a>
                        </li>
                        <li>
                            <a href="#" class="md:p-0 text-onyx py-2 pl-3 pr-4 text-base">Informations</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between rounded md:border-0 text-base">Boutique
                                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"
                                class="z-10 hidden w-44 font-normal divide-y divide-gray-100 rounded-lg shadow">
                                <ul class="py-2 text-sm text-onyx" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2">Item 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2">Item 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2">Item 3</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Mobile menu button -->
                <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="inline-flex p-2 w-10 h-10 justify-center text-sm text-onyx rounded-lg md:hidden"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <!-- "Sign in" and "Sign up" buttons wrapped in a flex-auto div -->
                <div class="flex justify-end text-onyx font-necryx text-base mr-9">
                    <a href="#" class="py-4 px-4 font-necryx">Sign in</a>
                    <a href="#_" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white bg-indigo-500 border rounded-md" data-rounded="rounded-md" data-primary="indigo-500" data-primary-reset="{}">
                       Sign up
                        </a>
                </div>
            </div>


        </nav>
    </header>



    <!-- Page content -->
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    <!-- Footer -->

    </footer>


    <!-- Scripts -->
    @livewireScripts

</body>

</html>
