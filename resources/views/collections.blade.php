<x-guest-layout>
    <div class="relative bg-seasalt px-6 pb-20 pt-16 lg:px-8 lg:pb-28 lg:pt-24">
        <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
            @foreach ($collections as $collection)
            <div class="flex flex-col overflow-hidden rounded-lg shadow-lg group hover:scale-105 duration-300">
                <div class="relative">
                    <a href="{{ route('collection', $collection->id)}}">
                        <img class="h-96 w-full object-cover hover:opacity-80 duration-300" src="{{ Storage::url($collection->image) }}" alt="{{ $collection->title}}">
                </div>
                <div class="flex flex-1 flex-col justify-between bg-seasalt p-6">
                    <div class="flex-1">

                        <a href="{{ route('collection', $collection->id)}}" class="mt-2 block">
                            <div class="flex justify-between">
                                <h2 class="text-2xl font-semibold font-h2 capitalize text-black-bean">{{ $collection->name}}</h2>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-l font-semibold font-p text-dark-red capitalize hover:underline">
                                    {{ $collection->number_players}} joueurs</p>
                                <p class="text-l font-semibold font-p text-dark-red capitalize hover:underline">
                                    {{ $collection->duration}} heures</p>
                            </div>
                            <p class="text-l font-semibold font-p text-dark-red capitalize hover:underline">
                                à partir de {{ $collection->age}} ans</p>
                            <p class="text-2xl font-semibold font-h3 text-black-bean"></p>
                            <p class="mt-3 text-base font-p text-gray-500">{{ $collection->content}}</p>
                        </a>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
