<div class="flex flex-col overflow-hidden shadow-xl hover:shadow-golden/30 group hover:scale-105 transition duration-300" data-aos="{{ Arr::random(['fade-up', 'fade-down']) }}" data-aos-duration="{{ Arr::random(['1000', '1500', '500']) }}">
    <div class="flex-shrink-0">
        <img class="h-48 w-full group-hover:opacity-80 duration-300 object-cover" src="{{ $article->image != null ? Storage::url($article->image) : url('img/office1.png') }}" alt="{{ $article->title }}">
    </div>
    <div class="flex flex-1 flex-col justify-between bg-white p-6">
        <div class="flex-1">
            <p class="text-sm font-medium capitalize text-dark-red">
                <a href="{{ route('collections', $article->type->name) }}" class="hover:underline">{{ $article->type->name }}</a>
            </p>
            <a href="#" class="mt-2 block">
                <p class="text-xl font-semibold text-gray-900">{{ $article->title }}</p>
                <p class="mt-3 text-base text-gray-500">{{ $article->content }}</p>
            </a>
        </div>
        <div class="mt-6 flex items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div>
                        <span class="sr-only">{{ $article->type->persona }}</span>
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ $article->type->image != null ? Storage::url($article->type->image) : url('img/persona.png') }}" alt="">
                    </div>
                </div>
                <div class="ml-3">
                    <div class="text-sm font-medium capitalize text-gray-900">
                        {{ $article->type->persona }}
                    </div>
                </div>
            </div>
            <a href="{{ route('article', $article) }}" class="hover:drop-shadow-[0px_0px_19px_#D0A302] bg-yellow-400 hover:bg-yellow-500 transition-all font-p text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M8.59 16.59L13.17 12L8.59 7.41L10 6l6 6l-6 6l-1.41-1.41z"/></svg>
                lire la suite
            </a>
        </div>
    </div>
</div>
