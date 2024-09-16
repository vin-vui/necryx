<x-guest-layout>

    {{-- Main swiper --}}
    <div class="relative bg-black overflow-x-hidden">
        <div class="swiper-one w-full h-[34rem]">
            <div class="swiper-wrapper animate-slideInTop">
                <!-- Slides -->
                @foreach ($sliders as $slider)
                <div class="swiper-slide">
                    <img class="object-cover object-center fill-black h-full w-full opacity-40" src="{{ Storage::url($slider->image) }}" alt="{{ $slider->description }}">
                </div>
                @endforeach
            </div>
            <!--Text of slider-->
            <div class="absolute md:bottom-60 bottom-52 z-40 text-white py-0 md:ml-20 md:px-0 px-4 animate-slideInRight">
                <h1 class="md:text-7xl text-5xl font-necryx mb-4 font-bold ">Necryx</h1>
                <div class="font-p md:text-xl text-lg">
                    Votre partenaire privilégié pour des concepts novateurs, guidés par l'IA, dans les domaines des jeux, de l'art, du design et des technologies.
                </div>
            </div>
        </div>
    </div>

    {{-- Cards under the slides --}}
    <div class="flex flex-col w-auto md:flex-row justify-evenly md:gap-12 md:mx-20 mx-4 relative -mt-44 z-40 animate-slideInBottom">

        <!--First card-->
        @include('home._partials.feature-card', [
        'title' => 'Concepts & Conseils',
        'content' => 'Besoin d’idées novatrices, de conseils personnalisés ou d’un univers à votre mesure ? Ne cherchez plus, nous sommes là pour tout vos futurs concepts.',
        'icon' => '<path fill="#0a0101" d="M7 5.6L5.6 7L3.5 4.9l1.4-1.4L7 5.6M1 13h3v-2H1v2M13 1h-2v3h2V1m-3 21c0 .6.4 1 1 1h2c.6 0 1-.4 1-1v-1h-4v1m10-11v2h3v-2h-3m-.9-7.5L17 5.6L18.4 7l2.1-2.1l-1.4-1.4M18 12c0 2.2-1.2 4.2-3 5.2V19c0 .6-.4 1-1 1h-4c-.6 0-1-.4-1-1v-1.8c-1.8-1-3-3-3-5.2c0-3.3 2.7-6 6-6s6 2.7 6 6m-9.44-2h6.88C14.75 8.81 13.5 8 12 8s-2.75.81-3.44 2Z" />',
        'textButton' => 'découvrez nos concepts et conseils',
        'link' => route('concepts')
        ])

        <!--Second card-->
        @include('home._partials.feature-card', [
        'title' => 'Nos Jeux',
        'content' => 'Explorez notre collection de jeux et plongez dans des univers uniques. Découvrez des mécanismes de jeu innovants qui raviront les joueurs de tous horizons !',
        'icon' => '<path fill="#0a0101" d="M20.5 11H19V7a2 2 0 0 0-2-2h-4V3.5A2.5 2.5 0 0 0 10.5 1A2.5 2.5 0 0 0 8 3.5V5H4a2 2 0 0 0-2 2v3.8h1.5c1.5 0 2.7 1.2 2.7 2.7c0 1.5-1.2 2.7-2.7 2.7H2V20a2 2 0 0 0 2 2h3.8v-1.5c0-1.5 1.2-2.7 2.7-2.7c1.5 0 2.7 1.2 2.7 2.7V22H17a2 2 0 0 0 2-2v-4h1.5a2.5 2.5 0 0 0 2.5-2.5a2.5 2.5 0 0 0-2.5-2.5Z" />',
        'textButton' => 'visitez notre section jeux',
        'link' => route('collections', 2)
        ])

        <!--Third card-->
        @include('home._partials.feature-card', [
        'title' => 'Apocrypte',
        'content' => 'Vivez des expériences et découvrez de nouveaux concepts avec Spectre dans l\'Apocrypte, Une chaîne dédiée au Game Design, au gaming et à l’exploration de toutes sortes de sujets à travers différents formats.',
        'icon' => '<path fill="currentColor" d="M20.947 8.305a6.5 6.5 0 0 0-.419-2.216a4.6 4.6 0 0 0-2.633-2.633a6.6 6.6 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.6 6.6 0 0 0-2.185.42a4.6 4.6 0 0 0-2.633 2.633a6.6 6.6 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.6 4.6 0 0 0 2.634 2.632a6.6 6.6 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.6 6.6 0 0 0 2.186-.419a4.62 4.62 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187c.043-.962.056-1.267.056-3.71c-.002-2.442-.002-2.752-.058-3.709m-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246m4.807-8.339a1.077 1.077 0 0 1-1.078-1.078a1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078"/><circle cx="11.994" cy="11.979" r="3.003" fill="currentColor"/>',
        'textButton' => 'insta de l\'apocrypte',
        'link' => 'https://www.instagram.com/apocrypte/'
        ])

    </div>

    {{-- Second swiper --}}
    <div class="mt-32 relative overflow-x-hidden bg-cover shapedividers_com-333 bg-fixed" style="background-image: url('{{ url('img/test1.png') }}')">
        <div class="swiper-two w-full ">
            <div class="swiper-wrapper md:py-64 pt-64 pb-52">
                @foreach ($games as $game)
                @include('home._partials.game-slide')
                @endforeach
            </div>
            <div class="swiper-button-prev-two"></div>
            <div class="swiper-button-next-two"></div>
        </div>
    </div>

    <div class="shapedividers_com-9517 w-full h-64 bg-transparent -mt-60"></div>

    {{-- cards of articles --}}
    <div class="relative">
        <div class="relative mt-20 bg-gray-50 px-4 pb-20 pt-16 lg:px-8 lg:pb-28 lg:pt-24">
            <div class=" inset-0 bg-seasalt">
                <div class="h-1/3 bg-seasalt sm:h-2/3"></div>
            </div>
            <div class="relative mx-auto max-w-7xl">
                <div class="text-center" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="text-3xl font-h1 uppercase font-bold tracking-tight text-gray-900 sm:text-4xl">Nos articles</h2>
                    <p class="mx-auto mt-3 font-h2 max-w-2xl text-xl text-gray-500 sm:mt-4">
                        Retrouvez ici nos dernières actualités !
                    </p>
                </div>

                <div class="mx-auto mt-12 grid max-w-lg gap-5 font-p lg:max-w-none lg:grid-cols-3">
                    @foreach ($articles as $article)
                    @include('home._partials.article-card')
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="relative bg-seasalt sm:pt-24 mt-10">
        <div class="bg-black sm:pb-24 xl:pb-0 sm:pt-0 py-12">
            <div class="mx-auto flex max-w-7xl flex-col items-center gap-x-8 gap-y-10 px-6 sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">
                <div class="w-full max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-24" data-aos="fade-right" data-aos-duration="1000">
                    <figure class="relative isolate pt-6 sm:pt-12">
                        <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute left-0 top-0 -z-10 h-32 stroke-white/20">
                            <path id="b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                            <use href="#b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" x="86" />
                        </svg>
                        <blockquote class="text-xl font-semibold leading-8 text-white sm:text-2xl sm:leading-9">
                            <div>Nous allons mettre la Technologie au service de l’Imagination pour réinventer les règles du jeu et ouvrir de nouveaux horizons.</div>
                        </blockquote>
                        <figcaption class="mt-8 text-base">
                            <div class="font-semibold font-p text-white">Valerian Necryx</div>
                            <div class="mt-1 font-p text-gray-400">Persona fondadrice de <span class="font-necryx">Necryx</span></div>
                        </figcaption>
                    </figure>
                </div>
                <div class="md:-mt-28  w-full max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none" data-aos="fade-down" data-aos-duration="1000">
                    <div class="relative aspect-[2/1] h-full mt-1 md:-mx-8 xl:mx-0 xl:aspect-auto">
                        @php $image = url('img/Valerian_Persona.png'); @endphp
                        <x-hex :image="$image" :classes="'drop-shadow-[9px_9px_30px_#D0A302]'" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
