<div class="swiper-slide relative backdrop-blur-sm bg-black/80 pb-20 sm:pb-24 xl:pb-0">
    <div class="mx-auto flex max-w-7xl flex-col items-center sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">
        <div class="-mt-12 max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none">
            <div class="relative aspect-[2/1] h-96 md:-mx-8 xl:mx-0 xl:aspect-auto">
                @php
                    $image = $game->image != null ? Storage::url($game->image) : 'https://images.unsplash.com/photo-1585504198199-20277593b94f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80';
                @endphp
                <x-hex  :image="$image" :classes="'drop-shadow-[9px_9px_30px_#D0A302]'" />
            </div>
        </div>
        <div class="max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-16">
            <div class="truncate w-[40rem] text-extrabold text-seasalt leading-8 font-h1 text-5xl sm:leading-9">
                {{ $game->name }}
            </div>
            <div class="truncate w-[40rem] text-xs text-seasalt leading-8 font-p lg:text-xl sm:leading-9">
                {{ $game->content }}
            </div>
            <div class="my-8 text-sm font-p">
                <div class="mt-1 grid grid-cols-3">
                    <div class="">
                        <div class="font-semibold text-lg text-seasalt">Nombre de joueurs</div>
                        <div class="">
                            <span class="py-0.5 px-3 bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-xl rounded-br-xl text-gray-900 text-lg font-semibold">
                                {{ $game->number_players }}
                            </span>
                        </div>
                    </div>
                    <div class="">
                        <div class="font-semibold text-lg text-seasalt">Durée</div>
                        <div class="">
                            <span class="py-0.5 px-3 bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-xl rounded-br-xl text-gray-900 text-lg font-semibold">
                                {{ $game->duration }} heures
                            </span>
                        </div>
                    </div>
                    <div class="">
                        <div class="font-semibold text-lg text-seasalt">A partir de</div>
                        <div class="">
                            <span class="py-0.5 px-3 bg-gradient-to-br from-yellow-300 to-yellow-700 rounded-tl-xl rounded-br-xl text-gray-900 text-lg font-semibold">
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
