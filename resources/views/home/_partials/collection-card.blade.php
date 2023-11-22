<a href="{{ route('collection', $collection->id) }}" class="flex flex-col overflow-hidden shadow-lg hover:shadow-golden/30 group hover:scale-105 duration-300">

    <div class="relative">
        <img class="h-96 w-full object-cover hover:opacity-80 duration-300" src="{{ $collection->image != null ? Storage::url($collection->image) : url('img/office2.png') }}" alt="{{ $collection->title}}">
    </div>

    <div class="flex flex-1 flex-col justify-between bg-white p-6">
        <div class="flex-1">
            <div class="mt-2 block">
                <div class="flex justify-between">
                    <h2 class="truncate w-[40rem] text-extrabold text-black leading-8 font-h1 text-2xl sm:leading-9">{{ $collection->name}}</h2>
                </div>
                @switch(request()->route()->parameters['type'])
                @case('jeu')
                <div class="flex justify-between">
                    <p class="text-l font-semibold font-p text-dark-red capitalize hover:underline">
                        {{ $collection->players}} joueurs
                    </p>
                    <p class="text-l font-semibold font-p text-dark-red capitalize hover:underline">
                        {{ $collection->duration}} heures
                    </p>
                    <p class="text-l font-semibold font-p text-dark-red capitalize hover:underline">
                        à partir de {{ $collection->age}} ans
                    </p>
                </div>
                @break
                @case('concept')
                Explorez des concepts innovants !
                @break
                @case('art')
                Des créations fusionnant la créativité humaine à la technologie
                @break
                @endswitch

                <p class="mt-3 text-base font-p text-gray-500">{{ $collection->content}}</p>
            </div>
        </div>
    </div>
</a>
