<x-guest-layout>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="flex flex-col items-start md:flex-row md:gap-16 gap-16">

                <div class="md:basis-1/2 animate-slideInLeft md:sticky md:top-28">
                    @php
                    $image = $collection->image != null ? Storage::url($collection->image) : url('img/office2.png');
                    @endphp

                    @if ($collection->type_id === 2)
                        <x-hex :image="$image" :classes="'drop-shadow-[9px_9px_30px_#D0A302]'" />
                    @else
                        <img src="{{ $image }}" alt="{{ $collection->name }}" class="object-contain object-center w-full drop-shadow-[9px_9px_30px_#D0A302]">
                    @endif

                </div>

                <div class="animate-slideInRight">
                    <div class="text-base leading-7 text-gray-700 lg:max-w-lg">

                        <p class="text-base font-semibold leading-7 text-dark-red">
                            @foreach($collection->tags as $key => $tag)
                            #{{ $tag->name }}
                            @endforeach
                        </p>

                        <h1 class="mt-2 text-3xl font-h2 capitalize font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $collection->name }}</h1>

                        <div class="max-w-xl">

                            <p class="mt-6 font-p whitespace-pre-wrap">{!! $collection->content !!}</p>

                            @if($collection->origin)
                            <div class="mt-6 italic font-h2 text-sm text-golden">Origine</div>
                            <p class="font-p whitespace-pre-wrap">{!! $collection->origin !!}</p>
                            @endif

                        </div>

                    </div>
                    <dl class="mt-10 border-t border-gray-900/10 pt-10 ">
                        @if($collection->type_id === 2)
                        <div class="mt-1 flex flex-col gap-y-4">
                            <div class="">
                                <div class="font-semibold text-md text-gray-900 font-h2">Nombre de joueurs</div>
                                <div class="">
                                    <span class="font-h2 py-0.5 px-3 bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-xl rounded-br-xl text-gray-900 text-lg font-semibold">
                                        {{ $collection->players }}
                                    </span>
                                </div>
                            </div>
                            <div class="">
                                <div class="font-semibold text-md text-gray-900 font-h2">Durée</div>
                                <div class="">
                                    <span class="font-h2 py-0.5 px-3 bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-xl rounded-br-xl text-gray-900 text-lg font-semibold">
                                        {{ $collection->duration }}
                                    </span>
                                </div>
                            </div>
                            <div class="">
                                <div class="font-semibold text-md text-gray-900 font-h2 capitalize">âge</div>
                                <div class="">
                                    <span class="py-0.5 px-3 font-h2 bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-xl rounded-br-xl text-gray-900 text-lg font-semibold">
                                        {{ $collection->age }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endif
                    </dl>
                    <div class="mt-24 flex">
                        @if($collection->type_id === 2)
                        <a href="{{ route('collections', 2) }}" class="hover:drop-shadow-[9px_9px_30px_#D0A302] bg-yellow-400 hover:bg-yellow-500 font-p justify-center transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M8.59 16.59L13.17 12L8.59 7.41L10 6l6 6l-6 6l-1.41-1.41z" />
                            </svg>
                            Je découvre les autres jeux
                        </a>
                        @elseif($collection->type_id === 3)
                        <a href="{{ route('collections', 3) }}" class="hover:drop-shadow-[9px_9px_30px_#D0A302] bg-yellow-400 hover:bg-yellow-500 font-p justify-center transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M8.59 16.59L13.17 12L8.59 7.41L10 6l6 6l-6 6l-1.41-1.41z" />
                            </svg>
                            Je découvre les autres concepts
                        </a>
                        @else
                        <a href="{{ route('collections', 1) }}" class="hover:drop-shadow-[9px_9px_30px_#D0A302] bg-yellow-400 hover:bg-yellow-500 font-p justify-center transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M8.59 16.59L13.17 12L8.59 7.41L10 6l6 6l-6 6l-1.41-1.41z" />
                            </svg>
                            Je découvre la galerie d'art
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
