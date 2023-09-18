<div class="flex flex-col overflow-hidden shadow-xl hover:shadow-golden/30 group hover:scale-105 transition duration-300">
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
        <div class="mt-6 flex items-center">
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
    </div>
</div>
