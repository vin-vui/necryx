<header x-data="{ openMenu: false }" class="bg-black sticky top-0 z-50">
    <nav class="mx-auto flex items-center justify-between px-4 md:px-8" aria-label="Global">

        <div class="hidden md:flex md:gap-x-12 flex-1">
            @include('home._partials._nav-links')
        </div>

        <a href="{{ route('home') }}" class="relative z-50 -m-8 p-1.5 md:translate-y-6 translate-y-4">
            <span class="sr-only">Necryx</span>
            <img src="{{ url('img/logo_black_squared.png') }}" class="h-12 lg:h-20 bg-transparent" />
        </a>

        <div class="flex flex-1 justify-end">
            <div class="md:flex hidden ">
                @include('home._partials._nav-user')
            </div>
            <div class='flex  md:hidden' x-data="{ open: false }">
                <div class="relative z-50 flex items-center">
                    <button class='text-white transition duration-500 ease-in-out transform rotate-0 cursor-pointer group focus:outline-none' @click="open = !open">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24"><path fill="currentColor" d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
                    </button>
                </div>
                <div class='fixed top-0 left-0 z-40 w-screen px-4 py-16 overflow-y-scroll bg-black sm:px-8' @keydown.escape.window="open = false" x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-full" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-full" style="display: none;">
                    <div class='flex flex-col items-center justify-center w-full h-full'>
                        <div class='flex flex-col items-center w-full mx-auto space-y-6 justify-evenly'>

                            @include('home._partials._nav-links')

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </nav>
</header>
