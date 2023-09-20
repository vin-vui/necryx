<div class="swiper-slide relative backdrop-blur-sm bg-black/80 sm:pb-24 xl:pb-0">
    <div class="mx-auto xl:flex max-w-7xl items-center gap-y-8 px-4 lg:px-8 xl:flex-row xl:items-stretch">
        <div class="md:-mt-12 -mt-16 flex justify-center md:block mx-auto max-w-7xl xl:-mb-8 xl:w-96">
            <div class="relative aspect-[2/1] md:h-96 h-24 md:-mx-8 xl:mx-0 xl:aspect-auto">
                @php
                    $image = $game->image != null ? Storage::url($game->image) : url('img/office2.png');
                @endphp
                <x-hex  :image="$image" :classes="'drop-shadow-[9px_9px_30px_#D0A302]'" />
            </div>
        </div>
        <div class="max-w-2xl xl:max-w-none flex xl:px-16 py-16 flex-col md:mt-0 mt-24">
            <div class="truncate xl:w-[40rem] text-extrabold text-seasalt leading-8 font-h1 text-5xl sm:leading-9">
                {{ $game->name }}
            </div>
            <div class="truncate xl:w-[40rem]  text-seasalt leading-8 font-p text-xl pt-2">
                {{ $game->content }}
            </div>
            <div class="my-8 text-sm font-p">
                <div class="mt-1 flex flex-col md:flex-row md:justify-between gap-y-4">
                    <div class="">
                        <div class="font-semibold text-lg text-seasalt font-h2">Nombre de joueurs</div>
                        <div class="">
                            <span class="font-h2 py-0.5 px-3 bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-xl rounded-br-xl text-gray-900 text-lg font-semibold">
                                {{ $game->number_players }}
                            </span>
                        </div>
                    </div>
                    <div class="">
                        <div class="font-semibold text-lg text-seasalt font-h2">Durée</div>
                        <div class="">
                            <span class="font-h2 py-0.5 px-3 bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-xl rounded-br-xl text-gray-900 text-lg font-semibold">
                                {{ $game->duration }} heures
                            </span>
                        </div>
                    </div>
                    <div class="">
                        <div class="font-semibold text-lg text-seasalt font-h2"><span class="capitalize">à</span> partir de</div>
                        <div class="">
                            <span class="py-0.5 px-3 font-h2 bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-xl rounded-br-xl text-gray-900 text-lg font-semibold">
                                {{ $game->age }} ans
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-seasalt opacity-80">{{ $game->origin }}</div>
        </div>
    </div>
</div>
