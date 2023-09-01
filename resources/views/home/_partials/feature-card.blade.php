<div class="backdrop-blur-sm bg-white/30 mt-16 p-6 shadow-lg">
    <div class="w-20 h-20  -mt-16 bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-full p-6">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
            {!! $icon !!}
        </svg>
    </div>
    <div class="text-base leading-7 pt-10">
        <h3 class="font-semibold h1 text-xl text-black">{{ $title }}</h3>
        <p class="mt-8 font-p text-gray-900">
            {{ $content }}
        </p>
    </div>
    <div class="mt-8 flex justify-end">
        <button type="button" class="bg-yellow-400 hover:bg-yellow-500 transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
            {{ $textButton }}
        </button>
    </div>
</div>
