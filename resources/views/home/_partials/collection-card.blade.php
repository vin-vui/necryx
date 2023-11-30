<a href="{{ route('collection', $collection->id) }}" class="flex flex-col overflow-hidden shadow-lg hover:shadow-golden/30 group hover:scale-105 duration-300">

    <div class="relative">
        <img class="h-96 w-full object-cover hover:opacity-80 duration-300" src="{{ $collection->image != null ? Storage::url($collection->image) : url('img/office2.png') }}" alt="{{ $collection->title}}">
    </div>

    <div class="flex flex-1 flex-col justify-between bg-white p-6">
        <div class="flex-1">
            <div class="mt-2 block">
                <h2 class="truncate w-full text-extrabold text-black leading-8 font-h1 text-2xl sm:leading-9">{{ $collection->name}}</h2>
                <p class="mt-3 text-base font-p text-gray-500">
                    {{ Str::limit($collection->content, 250) }}
                </p>
                <div class="mt-4  justify-center text-center w-full hover:drop-shadow-[0px_0px_19px_#D0A302] bg-yellow-400 hover:bg-yellow-500 transition-all font-p text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M8.59 16.59L13.17 12L8.59 7.41L10 6l6 6l-6 6l-1.41-1.41z" />
                    </svg>
                    lire la suite
                </div>
            </div>
        </div>
    </div>
    
</a>
