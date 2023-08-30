<x-guest-layout>

    {{-- Main swiper --}}
    <div class="relative bg-black">
        <div class="swiper-one w-full h-[30rem]">
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($sliders as $slider)
                <div class="swiper-slide">
                    <img class="object-cover object-center fill-black h-full w-full opacity-40" src="{{ Storage::url($slider->image) }}" alt="{{ $slider->description }}">
                </div>
                @endforeach
            </div>
            <!--Text of slider-->
            <div class="absolute bottom-60 z-40 text-white py-4 ml-20">
                <h2 class="text-7xl font-necryx mb-4 font-bold ">Necryx</h2>
                <div class="font-p text-xl ">Necryx, votre partenaire privilégié pour des concepts
                    novateurs, <br> guidés par l'IA, dans les domaines des jeux, de l'art, du design et
                    des technologies.
                </div>
            </div>
            <div class="swiper-button-prev-one"></div>
            <div class="swiper-button-next-one"></div>
        </div>
    </div>

    {{-- Cards under the slides --}}
    <div class="flex flex-col w-auto lg:flex-row justify-around gap-x-20 mx-20 relative -mt-44 z-40">

        <!--First card-->
        @include('home._partials.feature-card', [
            'title' => 'Nos Jeux',
            'content' => 'Explorez notre collection de jeux et plongez dans des univers uniques. Découvrez des mécanismes de jeu innovants qui raviront les joueurs de tous horizons !',
            'icon' => '<path fill="#0a0101" d="M20.5 11H19V7a2 2 0 0 0-2-2h-4V3.5A2.5 2.5 0 0 0 10.5 1A2.5 2.5 0 0 0 8 3.5V5H4a2 2 0 0 0-2 2v3.8h1.5c1.5 0 2.7 1.2 2.7 2.7c0 1.5-1.2 2.7-2.7 2.7H2V20a2 2 0 0 0 2 2h3.8v-1.5c0-1.5 1.2-2.7 2.7-2.7c1.5 0 2.7 1.2 2.7 2.7V22H17a2 2 0 0 0 2-2v-4h1.5a2.5 2.5 0 0 0 2.5-2.5a2.5 2.5 0 0 0-2.5-2.5Z" />',
            'textButton' => 'section jeux',
            'link' => '#'
        ])

        <!--Second card-->
        @include('home._partials.feature-card', [
            'title' => 'Concepts & conseils',
            'content' => 'Besoin d’idées novatrices, de conseils personnalisés ou d’un univers à votre mesure ? Ne cherchez plus, nous sommes là pour tout vos futurs concepts.',
            'icon' => '<path fill="#0a0101" d="M7 5.6L5.6 7L3.5 4.9l1.4-1.4L7 5.6M1 13h3v-2H1v2M13 1h-2v3h2V1m-3 21c0 .6.4 1 1 1h2c.6 0 1-.4 1-1v-1h-4v1m10-11v2h3v-2h-3m-.9-7.5L17 5.6L18.4 7l2.1-2.1l-1.4-1.4M18 12c0 2.2-1.2 4.2-3 5.2V19c0 .6-.4 1-1 1h-4c-.6 0-1-.4-1-1v-1.8c-1.8-1-3-3-3-5.2c0-3.3 2.7-6 6-6s6 2.7 6 6m-9.44-2h6.88C14.75 8.81 13.5 8 12 8s-2.75.81-3.44 2Z" />',
            'textButton' => 'section concepts et conseils',
            'link' => '#'
        ])

        <!--Third card-->
        @include('home._partials.feature-card', [
            'title' => 'Boutique',
            'content' => 'Le meilleur vous attend ici avec les créations exclusives de Necryx. Laissez-vous séduire par nos produits d\'exception, alliant créativité, technologie et gameplay captivant.',
            'icon' => '<path fill="#0a0101" d="M12 13a5 5 0 0 1-5-5h2a3 3 0 0 0 3 3a3 3 0 0 0 3-3h2a5 5 0 0 1-5 5m0-10a3 3 0 0 1 3 3H9a3 3 0 0 1 3-3m7 3h-2a5 5 0 0 0-5-5a5 5 0 0 0-5 5H5c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Z" />',
            'textButton' => 'boutique',
            'link' => '#'
        ])

    </div>

    {{-- Second swiper --}}
    <div class="mt-64 relative">
        <div class="swiper-two w-full h-[20rem]">
            <div class="swiper-wrapper bg-white pb-16 pt-24 sm:pb-24 sm:pt-32 xl:pb-32">
                @foreach ($collections as $collection)
                <!--Slides-->
                <div class="swiper-slide relative bg-lightblack pb-20 sm:pb-24 xl:pb-0">
                    <div class="mx-auto flex max-w-7xl flex-col items-center sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">
                        <div class="-mt-8 max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none">
                            <div class="relative aspect-[2/1] h-96 md:-mx-8 xl:mx-0 xl:aspect-auto">
                                <img class="inset-0 h-full rounded-2xl bg-gray-800 shadow-2xl" src="{{ Storage::url($collection->image) }}" alt="{{ $collection->name }}">
                            </div>
                        </div>
                        <div class="max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-24">
                            <div class="truncate w-[40rem] text-xs text-seasalt leading-8 font-p lg:text-xl sm:leading-9">
                                {{ $collection->content }}
                            </div>
                            <div class="mt-8 text-sm font-p">
                                <div class="mt-1 text-seasalt">Nombre de joueurs :
                                    {{ $collection->number_players }} / Durée : {{ $collection->duration }}
                                    / A partir de : {{ $collection->age }} ans / </div>
                                <div class="mt-1 text-seasalt">{{ $collection->origin }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-prev-two"></div>
            <div class="swiper-button-next-two"></div>
        </div>
    </div>

    {{-- cards of articles --}}
    <div class="relative">
        <div class="relative mt-44 bg-gray-50 px-6 pb-20 pt-16 lg:px-8 lg:pb-28 lg:pt-24">
            <div class=" inset-0 bg-seasalt">
                <div class="h-1/3 bg-seasalt sm:h-2/3"></div>
            </div>
            <div class="relative mx-auto max-w-7xl">
                <div class="text-center">
                    <h2 class="text-3xl font-h1 uppercase font-bold tracking-tight text-gray-900 sm:text-4xl">Nos articles</h2>
                    <p class="mx-auto mt-3 font-h2 max-w-2xl text-xl text-gray-500 sm:mt-4">Retrouvez ici nos dernières
                        actualités !</p>
                </div>

                <div class="mx-auto mt-12 grid max-w-lg gap-5 font-p lg:max-w-none lg:grid-cols-3">
                    @php $count = 0; @endphp
                    @foreach ($articles as $article)
                    @if ($count >= 3)
                    @break
                    @endif
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg group hover:scale-105 transition duration-300">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full group-hover:opacity-80 duration-300" src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
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
                                        <img class="h-10 w-10 rounded-full" src="{{ Storage::url($article->type->image) }}" alt="">
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
                    @php $count++; @endphp
                    @endforeach
                </div>

            </div>
        </div>
        <div class="relative bg-white pb-16 sm:pb-24 sm:pt-24 xl:pb-24 mt-10">
            <div class="bg-gray-900 pb-20 sm:pb-24 xl:pb-0">
                <div class="mx-auto flex max-w-7xl flex-col items-center gap-x-8 gap-y-10 px-6 sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">

                    <div class="w-full max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-24">
                        <figure class="relative isolate pt-6 sm:pt-12">
                            <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute left-0 top-0 -z-10 h-32 stroke-white/20">
                                <path id="b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                                <use href="#b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" x="86" />
                            </svg>
                            <blockquote class="text-xl font-semibold leading-8 text-white sm:text-2xl sm:leading-9">
                                <div>Nous devons mettre la Technologie au service de l’Imagination pour réinventer les règles du jeu et ouvrir de nouveaux horizons.</div>
                            </blockquote>
                            <figcaption class="mt-8 text-base">
                                <div class="font-semibold font-p text-white">Alix Faivre</div>
                                <div class="mt-1 font-p text-gray-400">Fondateur de Necryx</div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="-mt-8 w-full max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none">
                        <div class="relative aspect-[2/1] h-full md:-mx-8 xl:mx-0 xl:aspect-auto">
                            <img class="absolute inset-0 h-full w-full object-cover shadow-2xl" src="{{ url('img/pp.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
