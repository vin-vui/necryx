<x-guest-layout>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="flex flex-col items-start md:flex-row md:gap-16 gap-96">
                <div class="md:basis-1/2 animate-slideInLeft md:sticky md:top-24">
                    <img src="{{ $article->image != null ? Storage::url($article->image) : url('img/office2.png') }}" alt="{{ $article->title }}" class="object-contain w-full drop-shadow-[9px_9px_30px_#D0A302]">
                </div>
                <div class="animate-slideInRight">
                    <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
                        <h1 class="mt-2 text-3xl font-h2 capitalize font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $article->title }}</h1>
                        <div class="max-w-xl">
                            <p class="mt-6 font-p whitespace-pre-wrap">{!! $article->content !!}</p>
                        </div>
                    </div>
                    <div class="mt-24 flex">
                        <a href="{{ route('articles') }}" class="hover:drop-shadow-[9px_9px_30px_#D0A302] bg-yellow-400 hover:bg-yellow-500 font-p justify-center transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M8.59 16.59L13.17 12L8.59 7.41L10 6l6 6l-6 6l-1.41-1.41z" />
                            </svg>
                            Je découvre d'autres articles
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
