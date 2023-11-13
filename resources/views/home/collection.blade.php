<x-guest-layout>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:gap-16 gap-96">
                <div class="md:min-h-96 min-h-24 md:basis-1/2 animate-slideInLeft">
                    @php
                    $image = $collection->image != null ? Storage::url($collection->image) : url('img/office2.png');
                    @endphp
                    <x-hex :image="$image" :classes="'drop-shadow-[9px_9px_30px_#D0A302]'" />
                </div>
                <div class="animate-slideInRight">
                    <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
                        <p class="text-base font-semibold leading-7 text-dark-red">
                            @foreach($collection->tags as $key => $tag)
                            #{{ $tag->name }}
                            @endforeach
                        </p>
                        <h1 class="mt-2 text-3xl font-h2 capitalize font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $collection->name}}</h1>
                        <div class="max-w-xl">
                            <p class="mt-6 font-p">{!! $collection->content !!}</p>
                            <div class="mt-6 italic font-h2 text-sm text-golden">Origine</div>
                            <p class="font-p">{!! $collection->origin !!}</p>
                        </div>
                    </div>
                    <dl class="mt-10 border-t border-gray-900/10 pt-10 ">
                        @if($collection->types === 'jeu')
                        <div class="mt-1 flex flex-col md:flex-row md:justify-between gap-y-4">
                            <div class="">
                                <div class="font-semibold text-lg text-gray-900 font-h2">Nombre de joueurs</div>
                                <div class="">
                                    <span class="font-h2 py-0.5 px-3 bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-xl rounded-br-xl text-gray-900 text-lg font-semibold">
                                        {{ $collection->number_players }}
                                    </span>
                                </div>
                            </div>
                            <div class="">
                                <div class="font-semibold text-lg text-gray-900 font-h2">Durée</div>
                                <div class="">
                                    <span class="font-h2 py-0.5 px-3 bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-xl rounded-br-xl text-gray-900 text-lg font-semibold">
                                        {{ $collection->duration }} heures
                                    </span>
                                </div>
                            </div>
                            <div class="">
                                <div class="font-semibold text-lg text-gray-900 font-h2"><span class="capitalize">à</span> partir de</div>
                                <div class="">
                                    <span class="py-0.5 px-3 font-h2 bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-xl rounded-br-xl text-gray-900 text-lg font-semibold">
                                        {{ $collection->age }} ans
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endif
                    </dl>
                    <div class="mt-24 flex">
                        @if($collection->types === 'jeu')
                        <a href="{{ route('collections', 'jeu') }}" class="hover:drop-shadow-[9px_9px_30px_#D0A302] bg-yellow-400 hover:bg-yellow-500 font-p justify-center transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
                            <span aria-hidden="true">&rarr;</span> Découvrez nos autres jeux
                        </a>
                        @elseif($collection->types === 'concept')
                        <a href="{{ route('collections', 'concept') }}" class="hover:drop-shadow-[9px_9px_30px_#D0A302] bg-yellow-400 hover:bg-yellow-500 font-p justify-center transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
                            <span aria-hidden="true">&rarr;</span> Découvrez nos autres concepts
                        </a>
                        @else
                        <a href="{{ route('collections', 'art') }}" class="hover:drop-shadow-[9px_9px_30px_#D0A302] bg-yellow-400 hover:bg-yellow-500 font-p justify-center transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
                            <span aria-hidden="true">&rarr;</span> Découvrez notre galerie d'art
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
