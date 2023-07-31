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
                                        {{-- <a href="{{ route('') }}" --}}
                                        class="block px-4 py-2 font-necryx text-onyx">Jeux</a>
                                    </li>
                                    <li>
                                        {{-- <a href="{{ route('') }}" --}}
                                        class="block px-4 py-2 font-necryx text-onyx">Concepts</a>
                                    </li>
                                    <li>
                                        {{-- <a href="{{ route('') }}" --}}
                                        class="block px-4 py-2 font-necryx text-onyx">Art</a>
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
                {{-- <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="inline-flex p-2 w-10 h-10 justify-center text-sm text-onyx rounded-lg md:hidden"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button> --}}
                <!-- "Sign in" and "Sign up" buttons wrapped in a flex-auto div -->
                <div class="flex justify-end text-onyx font-necryx text-base">
                    <a href="{{ route('login') }}" class="py-2 px-4 font-necryx">Se connecter</a>
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center justify-center px-2.5 text-base font-medium leading-6 text-white whitespace-no-wrap bg-yellow-500 hover:bg-indigo-400border rounded-md">
                        S'inscrire
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

    <footer>
        <div class="bg-white py-16 sm:py-24">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                @if (session('success'))
                    <div class="bg-yellow-500 rounded-md text-seasalt p-4 mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                <div
                    class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 shadow-2xl sm:rounded-3xl sm:px-24 xl:py-32">
                    <h2 class="mx-auto max-w-2xl text-center text-3xl font-bold tracking-tight text-white sm:text-4xl">
                        Restez en contact avec Necryx</h2>
                    <p class="mx-auto mt-2 max-w-xl text-center text-lg leading-8 text-gray-300">Pour être au courant de
                        nos dernières nouveautés, faites le choix d'être informé !</p>
                    <form action="{{ route('newsletter.subscribe') }}" method="POST"
                        class="mx-auto mt-10 flex max-w-md gap-x-4">
                        @csrf
                        <label for="email-address" class="sr-only">Adresse e-mail</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required
                            class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6"
                            placeholder="Entrez votre adresse e-mail">
                        <button type="submit"
                            class="flex-none rounded-md px-3.5 py-2.5 text-sm bg-yellow-500 text-white font-necryx">S'inscrire</button>
                    </form>
                    <svg viewBox="0 0 1024 1024"
                        class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2" aria-hidden="true">
                        <circle cx="512" cy="512" r="512"
                            fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
                        <defs>
                            <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641" cx="0" cy="0"
                                r="1" gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(512 512) rotate(90) scale(512)">
                                <stop stop-color="#7775D6" />
                                <stop offset="1" stop-color="#E935C1" stop-opacity="0" />
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
                <nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
                    <div class="pb-6">
                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Collection</a>
                    </div>
                    <div class="pb-6">
                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Concepts &
                            Conseils</a>
                    </div>
                    <div class="pb-6">
                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Informations</a>
                    </div>
                    <div class="pb-6">
                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Boutique</a>
                    </div>
                </nav>
                <div class="mt-10 flex justify-center space-x-10">
                    <a href="https://fr-fr.facebook.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="https://github.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/" target="_blank" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">YouTube</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <p class="mt-10 text-center text-xs leading-5 text-gray-500">&copy; 2023 Necryx. Tous droits réservés.
                </p>
            </div>
        </div>

    </footer>
    <!-- Scripts -->
    @livewireScripts

</body>

</html>
