<x-guest-layout>
    <div>
        <div class="relative bg-seasalt px-6 pb-20 pt-16 lg:px-8 lg:pb-28 lg:pt-24">
            <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
                @foreach ($collections as $collection)
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg group hover:scale-105 duration-300">
                    <div class="relative">
                        <a href="{{ route('collection', $collection->id)}}">
                            <img class="h-96 w-full object-cover hover:opacity-80 duration-300" src="{{ Storage::url($collection->image) }}" alt="{{ $collection->title}}">
                            {{-- <div class="absolute inset-0 bg-seasalt opacity-0 group-hover:opacity-80 flex flex-col items-center justify-center duration-300">
                                <p class="text-rich-black text-lg font-bold font-p capitalize">{{ $collection->name}}</p>
                            <p class="text-rich-black text-lg font-bold font-p capitalize">{{ $collection->types}}</p>
                    </div> --}}
                </div>
                <div class="flex flex-1 flex-col justify-between bg-seasalt p-6">
                    <div class="flex-1">
                        <div class="flex justify-between">
                            <p class="text-l font-medium font-p text-forest-green capitalize hover:underline">
                                {{ $collection->thematic}}</p>
                            <p class="text-l font-medium font-p text-forest-green capitalize hover:underline">
                                {{ $collection->public}} {{ $collection->age_range }}</p>
                        </div>
                        <a href="{{ route('collection', $collection->id)}}" class="mt-2 block">
                            <div class="flex justify-between">
                                <h2 class="text-2xl font-semibold font-h2 capitalize text-black-bean">{{ $collection->name}}</h2>
                                <p class="text-2xl font-semibold font-h3 text-black-bean"></p>
                            </div>
                            <p class="mt-3 text-base font-p text-gray-500">{{ $collection->content}}</p>
                        </a>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only"></span>
                                    <img class="h-10 w-10 rounded-full" src="" alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium font-p text-rich-black">
                                    <a href="#" class="hover:underline"></a>
                                </p>
                                <div class="capitalize flex space-x-1 text-sm font-p text-gray-500">
                                    <time>{{Carbon\Carbon::parse($collection->created_at)->isoFormat('LLLL')}}</time>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="flex gap-2 font-semibold font-p text-black-bean">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                        <path fill="none" stroke="#3C0000" stroke-linejoin="round" stroke-width="32" d="M408 64H104a56.16 56.16 0 0 0-56 56v192a56.16 56.16 0 0 0 56 56h40v80l93.72-78.14a8 8 0 0 1 5.13-1.86H408a56.16 56.16 0 0 0 56-56V120a56.16 56.16 0 0 0-56-56Z" /></svg>
                        {{ $game->commentaries->count() }}
                    </div> --}}

                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-guest-layout>
