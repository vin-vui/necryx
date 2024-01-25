<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Necryx') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#myeditorinstance',
            plugins: 'powerpaste advcode table lists checklist custom_formats',
            toolbar: 'undo redo | blocks | bold italic | bullist numlist checklist | code | table',
            extended_valid_elements: 'ul[class],ol[class],li[class]',
            setup: function (editor) {
                editor.on('NodeChange', function (e) {
                    if (e.element.nodeName === 'LI') {
                        e.element.className = 'mb-1';
                        let parent = e.element.parentNode;
                        if (parent.nodeName === 'UL') {
                            parent.className = 'list-disc pl-5';
                        } else if (parent.nodeName === 'OL') {
                            parent.className = 'list-decimal pl-5';
                        }
                    }
                    if (e.element.nodeName === 'TABLE') {
                        e.element.className = 'table-auto border-collapse w-full';
                    }
                    if (e.element.nodeName === 'TH') {
                        e.element.className = 'border border-gray-300 p-2';
                    }
                    if (e.element.nodeName === 'TD') {
                        e.element.className = 'border border-gray-300 p-2';
                    }
                });
            },
            formats: {
                h1: { block: 'h1', classes: 'text-2xl font-bold' },
                h2: { block: 'h2', classes: 'text-xl font-semibold' },
                h3: { block: 'h3', classes: 'text-lg font-medium' },
                p: { block: 'p', classes: 'text-base' },
                blockquote: { block: 'blockquote', classes: 'border-l-4 border-gray-500 pl-4 italic' },
                a: { selector: 'a', classes: 'text-blue-600 hover:text-blue-800' },
            },
        });
    </script>

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">

    <x-banner />

    <div class="antialiased bg-gray-900">

        <!-- Sidebar -->
        <nav class="fixed top-0 left-0 z-40 w-64 h-screen pt-8 transition-transform -translate-x-full md:translate-x-0 bg-gray-800 border-gray-700" aria-label="Sidenav" id="drawer-navigation">
            <a href="{{ route('home') }}" class="flex items-center justify-start gap-2 px-4">
                <x-application-logo />
                <span class="text-2xl font-semibold whitespace-nowrap text-white font-necryx">Necryx</span>
            </a>
            <div class="overflow-y-auto py-6 px-3 h-full bg-gray-800">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-base font-medium text-white hover:bg-gray-700 group {{ request()->routeIs('dashboard') ? 'bg-gray-700' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                            </svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sliders.index') }}" class="flex items-center p-2 text-base font-medium text-white hover:bg-gray-700 group {{ request()->routeIs('sliders.*') ? 'bg-gray-700' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <g fill="currentColor">
                                    <path d="M5.846 8c0-2.828 0-4.243.901-5.121C7.65 2 9.1 2 12 2c2.901 0 4.351 0 5.253.879c.9.878.9 2.293.9 5.121v8c0 2.828 0 4.243-.9 5.121C16.35 22 14.9 22 12 22c-2.901 0-4.351 0-5.253-.879c-.9-.878-.9-2.293-.9-5.121V8Z" />
                                    <path fill-rule="evenodd" d="M2.77 3.75a.76.76 0 0 1 .768.75v15a.76.76 0 0 1-.769.75A.76.76 0 0 1 2 19.5v-15a.76.76 0 0 1 .77-.75Zm18.46 0a.76.76 0 0 1 .77.75v15a.76.76 0 0 1-.77.75a.76.76 0 0 1-.768-.75v-15a.76.76 0 0 1 .769-.75Z" clip-rule="evenodd" />
                                </g>
                            </svg>
                            <span class="ml-3">Slider</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('collections.index') }}" class="flex items-center p-2 text-base font-medium text-white hover:bg-gray-700 group {{ request()->routeIs('collections.*') ? 'bg-gray-700' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M440.88 129.37L288.16 40.62a64.14 64.14 0 0 0-64.33 0L71.12 129.37a4 4 0 0 0 0 6.9L254 243.85a4 4 0 0 0 4.06 0L440.9 136.27a4 4 0 0 0-.02-6.9ZM256 152c-13.25 0-24-7.16-24-16s10.75-16 24-16s24 7.16 24 16s-10.75 16-24 16Zm-18 118.81L54 163.48a4 4 0 0 0-6 3.46v173.92a48 48 0 0 0 23.84 41.39L234 479.48a4 4 0 0 0 6-3.46V274.27a4 4 0 0 0-2-3.46ZM96 368c-8.84 0-16-10.75-16-24s7.16-24 16-24s16 10.75 16 24s-7.16 24-16 24Zm96-32c-8.84 0-16-10.75-16-24s7.16-24 16-24s16 10.75 16 24s-7.16 24-16 24Zm266-172.49L274 271.56a4 4 0 0 0-2 3.45V476a4 4 0 0 0 6 3.46l162.15-97.23A48 48 0 0 0 464 340.86V167a4 4 0 0 0-6-3.49ZM320 424c-8.84 0-16-10.75-16-24s7.16-24 16-24s16 10.75 16 24s-7.16 24-16 24Zm0-88c-8.84 0-16-10.75-16-24s7.16-24 16-24s16 10.75 16 24s-7.16 24-16 24Zm96 32c-8.84 0-16-10.75-16-24s7.16-24 16-24s16 10.75 16 24s-7.16 24-16 24Zm0-88c-8.84 0-16-10.75-16-24s7.16-24 16-24s16 10.75 16 24s-7.16 24-16 24Z" /></svg>
                            <span class="ml-3">Collection</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tags.index') }}" class="flex items-center p-2 text-base font-medium text-white hover:bg-gray-700 group {{ request()->routeIs('tags.*') ? 'bg-gray-700' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M400 0H176a64.11 64.11 0 0 0-62 48h228a74 74 0 0 1 74 74v304.89l22 17.6a16 16 0 0 0 19.34.5a16.41 16.41 0 0 0 6.66-13.42V64a64 64 0 0 0-64-64Z" />
                                <path fill="currentColor" d="M320 80H112a64 64 0 0 0-64 64v351.62A16.36 16.36 0 0 0 54.6 509a16 16 0 0 0 19.71-.71L216 388.92l141.69 119.32a16 16 0 0 0 19.6.79a16.4 16.4 0 0 0 6.71-13.44V144a64 64 0 0 0-64-64Z" /></svg>
                            <span class="ml-3">Tags</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('articles.index') }}" class="flex items-center p-2 text-base font-medium text-white hover:bg-gray-700 group {{ request()->routeIs('articles.*') ? 'bg-gray-700' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M439.91 112h-23.82a.09.09 0 0 0-.09.09V416a32 32 0 0 0 32 32a32 32 0 0 0 32-32V152.09A40.09 40.09 0 0 0 439.91 112Z" />
                                <path fill="currentColor" d="M384 416V72a40 40 0 0 0-40-40H72a40 40 0 0 0-40 40v352a56 56 0 0 0 56 56h342.85a1.14 1.14 0 0 0 1.15-1.15a1.14 1.14 0 0 0-.85-1.1A64.11 64.11 0 0 1 384 416ZM96 128a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v64a16 16 0 0 1-16 16h-64a16 16 0 0 1-16-16Zm208 272H112.45c-8.61 0-16-6.62-16.43-15.23A16 16 0 0 1 112 368h191.55c8.61 0 16 6.62 16.43 15.23A16 16 0 0 1 304 400Zm0-64H112.45c-8.61 0-16-6.62-16.43-15.23A16 16 0 0 1 112 304h191.55c8.61 0 16 6.62 16.43 15.23A16 16 0 0 1 304 336Zm0-64H112.45c-8.61 0-16-6.62-16.43-15.23A16 16 0 0 1 112 240h191.55c8.61 0 16 6.62 16.43 15.23A16 16 0 0 1 304 272Zm0-64h-63.55c-8.61 0-16-6.62-16.43-15.23A16 16 0 0 1 240 176h63.55c8.61 0 16 6.62 16.43 15.23A16 16 0 0 1 304 208Zm0-64h-63.55c-8.61 0-16-6.62-16.43-15.23A16 16 0 0 1 240 112h63.55c8.61 0 16 6.62 16.43 15.23A16 16 0 0 1 304 144Z" /></svg>
                            <span class="ml-3">Articles</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('types.index') }}" class="flex items-center p-2 text-base font-medium text-white hover:bg-gray-700 group {{ request()->routeIs('types.*') ? 'bg-gray-700' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M6.196 17.485q1.275-.918 2.706-1.451Q10.332 15.5 12 15.5q1.667 0 3.098.534q1.43.533 2.706 1.45q.99-1.024 1.593-2.42Q20 13.666 20 12q0-3.325-2.337-5.663T12 4Q8.675 4 6.337 6.337T4 12q0 1.667.603 3.063q.603 1.397 1.593 2.422ZM12 12.5q-1.263 0-2.132-.868Q9 10.763 9 9.5q0-1.263.868-2.132Q10.737 6.5 12 6.5q1.263 0 2.132.868Q15 8.237 15 9.5q0 1.263-.868 2.132q-.869.868-2.132.868Zm0 8.5q-1.883 0-3.525-.701q-1.642-.7-2.858-1.916q-1.215-1.216-1.916-2.858Q3 13.883 3 12t.701-3.525q.7-1.642 1.916-2.858q1.216-1.215 2.858-1.916Q10.117 3 12 3t3.525.701q1.642.7 2.858 1.916q1.215 1.216 1.916 2.858Q21 10.117 21 12t-.701 3.525q-.7 1.642-1.916 2.858q-1.216 1.215-2.858 1.916Q13.883 21 12 21Z" /></svg>
                            <span class="ml-3">Personas</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-gray-800 z-20">
                <a href="{{ route('profile.admin') }}" class="inline-flex justify-center p-2 cursor-pointer text-gray-400 hover:text-white hover:bg-gray-600">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path>
                    </svg>
                </a>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="group inline-flex justify-center p-2 cursor-pointer  hover:bg-gray-600">
                        <svg class="w-6 h-6 text-gray-400 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2a9.985 9.985 0 0 1 8 4h-2.71a8 8 0 1 0 .001 12h2.71A9.985 9.985 0 0 1 12 22Zm7-6v-3h-8v-2h8V8l5 4l-5 4Z" />
                        </svg>
                    </a>
                </form>
            </div>
        </nav>

        <main class="p-4 md:ml-64 min-h-screen pt-8">
            {{$slot}}
        </main>

    </div>

    @stack('modals')

    @livewireScripts

</body>
</html>
