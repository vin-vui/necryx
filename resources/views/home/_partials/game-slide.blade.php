<div class="swiper-slide relative backdrop-blur-sm bg-black/80 sm:pb-24 xl:pb-0">
    <div class="mx-auto xl:flex max-w-7xl items-center gap-y-8 px-4 lg:px-8 xl:flex-row xl:items-stretch">
        <div class="md:-mt-12 flex justify-center md:block mx-auto max-w-7xl xl:-mb-8 xl:w-96">
            <div class="relative aspect-[2/1] md:h-96 h-24 -mt-16 md:mt-0 md:-mx-8 xl:mx-0 xl:aspect-auto">
                @php
                $image = $game->image != null ? Storage::url($game->image) : url('img/office2.png');
                @endphp
                <x-hex :image="$image" :classes="'drop-shadow-[9px_9px_30px_#D0A302]'" />
            </div>
        </div>
        <div class="max-w-2xl xl:max-w-none flex xl:px-16 py-16 flex-col md:mt-0 mt-24">
            <div class="truncate xl:w-[40rem] text-extrabold text-seasalt leading-8 font-h1 text-5xl sm:leading-9">
                {{ $game->name }}
            </div>
            <div class="truncate xl:w-[40rem] text-seasalt leading-8 font-p text-xl pt-2">
                {{ $game->content }}
            </div>
            <div class="my-4 text-sm font-p">
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
            <div class="md:mt-4 mt-12">
                <a href="{{ route('collection', $game) }}" class="hover:drop-shadow-[9px_9px_30px_#D0A302] bg-yellow-400 hover:bg-yellow-500 font-p justify-center transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 md:py-3 md:px-4 py-5 md:w-auto w-full">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M7.1 11.35q.35-.7.725-1.35t.825-1.3l-1.4-.275l-2.1 2.1l1.95.825Zm12.05-6.875q-1.75.05-3.737 1.025T11.8 8.1q-1.05 1.05-1.875 2.25T8.7 12.6l2.85 2.825q1.05-.4 2.25-1.225t2.25-1.875q1.625-1.625 2.6-3.6T19.675 5q0-.1-.038-.2t-.112-.175q-.075-.075-.175-.112t-.2-.038Zm-5.5 6q-.575-.575-.575-1.412t.575-1.413q.575-.575 1.425-.575t1.425.575q.575.575.575 1.413t-.575 1.412q-.575.575-1.425.575t-1.425-.575Zm-.85 6.55L13.625 19l2.1-2.1l-.275-1.4q-.65.45-1.3.813t-1.35.712Zm8.775-13.35q.2 2.75-.9 5.363T17.2 14.025l.5 2.475q.1.5-.05.975t-.5.825L14 21.45q-.375.375-.9.288t-.725-.588l-1.525-3.575L6.575 13.3L3 11.775q-.5-.2-.6-.725t.275-.9L5.825 7q.35-.35.837-.5t.988-.05l2.475.5q2.375-2.375 4.988-3.475t5.362-.9q.2.025.4.113t.35.237q.15.15.238.35t.112.4Zm-17.65 12.3q.875-.875 2.138-.887t2.137.862q.875.875.863 2.138t-.888 2.137q-.625.625-2.087 1.075t-4.038.8q.35-2.575.8-4.038t1.075-2.087Zm1.425 1.4q-.25.25-.5.913t-.35 1.337q.675-.1 1.338-.338t.912-.487q.3-.3.325-.725T6.8 17.35q-.3-.3-.725-.288t-.725.313Z" />
                    </svg>
                    Découvrir ce jeu
                </a>
            </div>
        </div>
    </div>
</div>
