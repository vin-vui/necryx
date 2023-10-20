<a href="{{ route('home') }}" class="text-sm font-semibold leading-6 font-p text-white md:pb-5 md:mt-6 border-b-4 border-transparent hover:border-white hover:shadow-[0px_15px_15px_-15px_#FFFFFF] transition-all {{ request()->routeIs('home') ? 'border-yellow-400 shadow-[0px_15px_15px_-15px_#D0A302]' : '' }}">
    Accueil
</a>
<div class="hidden md:flex relative pb-2 mt-2" x-data="{ open: false }">
    <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 font-p text-white" @click="open = !open">
        Collections
        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
        </svg>
    </button>
    <div x-cloak x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-1"
        x-description="'Product' flyout menu, show/hide based on flyout menu state."
        class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden bg-white shadow-lg ring-1 ring-gray-900/5" x-ref="panel" @click.away="open = false">
        <div class="p-4">
            <div class="group relative flex gap-x-6  p-4 text-sm leading-6 hover:bg-gray-50">
                <div class="mt-1 flex h-12 w-12 flex-none items-center justify-center  bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-3xl rounded-br-3xl group-hover:bg-white">
                    <svg class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill="#0a0101" d="M20.5 11H19V7a2 2 0 0 0-2-2h-4V3.5A2.5 2.5 0 0 0 10.5 1A2.5 2.5 0 0 0 8 3.5V5H4a2 2 0 0 0-2 2v3.8h1.5c1.5 0 2.7 1.2 2.7 2.7c0 1.5-1.2 2.7-2.7 2.7H2V20a2 2 0 0 0 2 2h3.8v-1.5c0-1.5 1.2-2.7 2.7-2.7c1.5 0 2.7 1.2 2.7 2.7V22H17a2 2 0 0 0 2-2v-4h1.5a2.5 2.5 0 0 0 2.5-2.5a2.5 2.5 0 0 0-2.5-2.5Z" />
                    </svg>
                </div>
                <div class="flex-auto">
                    <a href="{{ route('collections', 'jeu') }}" class="block font-semibold text-gray-900">
                        Jeux
                        <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600">Des jeux uniques, pour des moments épiques !</p>
                </div>
            </div>
            <div class="group relative flex gap-x-6  p-4 text-sm leading-6 hover:bg-gray-50">
                <div class="mt-1 flex h-12 w-12 flex-none items-center justify-center bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-3xl rounded-br-3xl bg-gray-50 group-hover:bg-white">
                    <svg class="h-6 w-6 text-gray-900" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill="#0a0101" d="M7 5.6L5.6 7L3.5 4.9l1.4-1.4L7 5.6M1 13h3v-2H1v2M13 1h-2v3h2V1m-3 21c0 .6.4 1 1 1h2c.6 0 1-.4 1-1v-1h-4v1m10-11v2h3v-2h-3m-.9-7.5L17 5.6L18.4 7l2.1-2.1l-1.4-1.4M18 12c0 2.2-1.2 4.2-3 5.2V19c0 .6-.4 1-1 1h-4c-.6 0-1-.4-1-1v-1.8c-1.8-1-3-3-3-5.2c0-3.3 2.7-6 6-6s6 2.7 6 6m-9.44-2h6.88C14.75 8.81 13.5 8 12 8s-2.75.81-3.44 2Z" />
                    </svg>
                </div>
                <div class="flex-auto">
                    <a href="{{ route('collections', 'concept') }}" class="block font-semibold text-gray-900">
                        Concepts
                        <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600">Explorez des concepts innovants !</p>
                </div>
            </div>
            <div class="group relative flex gap-x-6  p-4 text-sm leading-6 hover:bg-gray-50">
                <div class="mt-1 flex h-12 w-12 flex-none items-center justify-center bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-3xl rounded-br-3xl bg-gray-50 group-hover:bg-white">
                    <svg class="h-6 w-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20">
                        <g fill="currentColor">
                            <path fill-rule="evenodd" d="M16.22 13.956c1.044-3.896-1.428-7.92-5.489-9.008c-4.586-1.23-11.095 1.964-9.647 6.061c.48 1.355 1.404 1.672 3.147 1.697l.109.002c.921.011 1.18.071 1.258.197c.127.208.129.539-.014 1.45c-.068.43-.09.58-.116.815c-.159 1.431.083 2.547 1.02 3.557c2.928 3.153 8.553-.373 9.732-4.771ZM2.97 10.341c-.729-2.06 3.936-4.349 7.243-3.463c3.017.809 4.826 3.754 4.075 6.559c-.838 3.128-4.782 5.6-6.334 3.928c-.48-.516-.599-1.068-.498-1.975c.021-.194.041-.328.104-.726c.219-1.397.216-2.035-.258-2.806c-.594-.967-1.3-1.13-2.937-1.151l-.106-.002c-.964-.013-1.193-.092-1.29-.364Z" clip-rule="evenodd" />
                            <path d="M6 10a1.25 1.25 0 1 1 0-2.5A1.25 1.25 0 0 1 6 10Zm3.75 0a1.25 1.25 0 1 1 0-2.5a1.25 1.25 0 0 1 0 2.5Zm2.5 3a1.25 1.25 0 1 1 0-2.5a1.25 1.25 0 0 1 0 2.5Zm-1.5 3.5a1.25 1.25 0 1 1 0-2.5a1.25 1.25 0 0 1 0 2.5Zm3.62-12.895a1 1 0 0 1 1.371.443l4.093 8.4a.652.652 0 0 1-1.149.611l-4.708-8.07a.998.998 0 0 1 .394-1.384Z" />
                            <path fill-rule="evenodd" d="M12.537 3.484c.487.915 1.306 1.171 2.098.75c.791-.42 1.038-1.243.551-2.158C14.63 1.028 13.438.078 12.648.497c-.79.42-.668 1.939-.11 2.987Zm.883-.47a3.165 3.165 0 0 1-.32-1.137a1.975 1.975 0 0 1 .018-.496l.018.009c.05.024.205.096.403.254c.302.241.602.596.764.901c.229.43.164.646-.138.807c-.3.16-.516.092-.745-.337Z" clip-rule="evenodd" />
                        </g>
                    </svg>
                </div>
                <div class="flex-auto">
                    <a href="{{ route('collections', 'art') }}" class="block font-semibold text-gray-900">
                        Arts
                        <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600">Des créations fusionnant la créativité humaine à la technologie</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="md:hidden flex text-sm font-semibold leading-6 font-p text-white md:pb-5 md:mt-6 border-b-4 border-transparent hover:border-white hover:shadow-[0px_15px_15px_-15px_#FFFFFF] transition-all {{ request()->routeIs('collections') ? 'border-yellow-400 shadow-[0px_15px_15px_-15px_#D0A302]' : '' }}">
    Collections
</div>
<div class="md:hidden flex flex-col gap-4 ml-4">
    <a href="{{ route('collections', 'jeu') }}" class="font-semibold text-gray-400 flex items-center -mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 24 24"><path fill="currentColor" d="m19 15l-6 6l-1.42-1.42L15.17 16H4V4h2v10h9.17l-3.59-3.58L13 9l6 6z"/></svg>
        Jeux
    </a>
    <a href="{{ route('collections', 'concept') }}" class="font-semibold text-gray-400 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 24 24"><path fill="currentColor" d="m19 15l-6 6l-1.42-1.42L15.17 16H4V4h2v10h9.17l-3.59-3.58L13 9l6 6z"/></svg>
        Concepts
    </a>
    <a href="{{ route('collections', 'art') }}" class="font-semibold text-gray-400 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 24 24"><path fill="currentColor" d="m19 15l-6 6l-1.42-1.42L15.17 16H4V4h2v10h9.17l-3.59-3.58L13 9l6 6z"/></svg>
        Arts
    </a>
</div>
<a href="{{ route('concepts') }}" class="text-sm font-semibold leading-6 font-p text-white md:pb-5 md:mt-6 border-b-4 border-transparent hover:border-white hover:shadow-[0px_15px_15px_-15px_#FFFFFF] transition-all {{ request()->routeIs('concepts') ? 'border-yellow-400 shadow-[0px_15px_15px_-15px_#D0A302]' : '' }}">
    Concepts & Conseils
</a>
<a href="{{ route('informations') }}" class="text-sm font-semibold leading-6 font-p text-white md:pb-5 md:mt-6 border-b-4 border-transparent hover:border-white hover:shadow-[0px_15px_15px_-15px_#FFFFFF] transition-all {{ request()->routeIs('informations') ? 'border-yellow-400 shadow-[0px_15px_15px_-15px_#D0A302]' : '' }}">
    Informations
</a>
<a href="{{ route('articles') }}" class="text-sm font-semibold leading-6 font-p text-white md:pb-5 md:mt-6 border-b-4 border-transparent hover:border-white hover:shadow-[0px_15px_15px_-15px_#FFFFFF] transition-all {{ request()->routeIs('articles') ? 'border-yellow-400 shadow-[0px_15px_15px_-15px_#D0A302]' : '' }}">
    Nos Articles
</a>
<a href="{{ route('shop') }}" class="text-sm font-semibold leading-6 font-p text-white md:pb-5 md:mt-6 border-b-4 border-transparent hover:border-white hover:shadow-[0px_15px_15px_-15px_#FFFFFF] transition-all {{ request()->routeIs('store') ? 'border-yellow-400 shadow-[0px_15px_15px_-15px_#D0A302]' : '' }}">
    Boutique
</a>

<div class="md:hidden flex pt-8">
    @include('home._partials._nav-user')
</div>
