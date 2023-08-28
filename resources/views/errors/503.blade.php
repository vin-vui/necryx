<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-cover bg-center bg-fixed flex items-center justify-center min-h-screen" style="background-image: url(img/banner.png);">

    <article class="backdrop-blur-sm bg-white/70 mx-8 px-4 pb-8 flex flex-col justify-center text-center items-center shadow-xl gap-y-4">
        <div class="bg-black -mt-8">
            <div class="animate-spin">
                <x-application-logo />
            </div>
        </div>
        <h1 class="font-necryx">Site en maintenance !</h1>
        <div class="font-h1">
            <p>
                Le site est actuellement en maintenance, mettez vous à l'aise.
            </p>
            {{-- <p>&mdash; Blaise</p> --}}
        </div>
    </article>

</body>
</html>
