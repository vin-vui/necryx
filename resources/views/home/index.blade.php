<x-guest-layout>


    <div class="relative bg-gray-900 py-2">
        {{-- main slider --}}

        <div class="">
            <div class="swiper w-full h-[30rem]">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    @foreach ($sliders as $slider)
                        <!-- Slides -->
                        <div class="swiper-slide relative ">
                            <img class="object-contain fill-gray-800 h-full w-full opacity-40"
                                src="{{ Storage::url($slider->image) }}" alt="{{ $slider->description }}">

                            <!--Text of slider-->
                            <div class="absolute bottom-60 z-50 text-white p-4 ml-24">
                                <h2 class="text-5xl font-necryx mb-4 font-bold ">Necryx</h2>
                                <div class="font-p text-xl ">Necryx, votre partenaire privilégié pour des concepts
                                    novateurs, </br> guidés par l'IA, dans les domaines des jeux, de l'art, du design et
                                    des technologies.</div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        {{-- Cards under the slides --}}
        <div class="flex justify-around gap-x-20 mx-24 absolute top-2/4 mt-8 z-50 h-auto ">

            <!--First card-->
            <div
                class="gap-x-4 flex flex-col p-6 rounded-2xl mx-auto mt-16 w-1/3 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8  bg-seasalt  ring-1 ring-inset ring-white/10 shadow-xl ">
                <div class="flex absolute top-10 bg-golden rounded-xl p-6 ring-1 ring-inset ring-white/10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="#0a0101"
                            d="M20.5 11H19V7a2 2 0 0 0-2-2h-4V3.5A2.5 2.5 0 0 0 10.5 1A2.5 2.5 0 0 0 8 3.5V5H4a2 2 0 0 0-2 2v3.8h1.5c1.5 0 2.7 1.2 2.7 2.7c0 1.5-1.2 2.7-2.7 2.7H2V20a2 2 0 0 0 2 2h3.8v-1.5c0-1.5 1.2-2.7 2.7-2.7c1.5 0 2.7 1.2 2.7 2.7V22H17a2 2 0 0 0 2-2v-4h1.5a2.5 2.5 0 0 0 2.5-2.5a2.5 2.5 0 0 0-2.5-2.5Z" />
                    </svg>
                </div>
                <div class="text-base leading-7 pt-12">
                    <h3 class="font-semibold font-h2 text-smoky-black">Nos Jeux</h3>

                    <div class="mt-8 font-p text-smoky-black">Explorez notre collection de jeux et plongez dans des
                        univers uniques.</div>
                    <div class="mt-8 font-p text-smoky-black">Découvrez des mécanismes de jeu innovants qui raviront les
                        joueurs de tous horizons !</div>
                </div>
            </div>

            <!--Second card-->
            <div
                class="gap-x-4 flex flex-col rounded-2xl mx-auto mt-16 w-1/3 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8  bg-seasalt p-6 ring-1 ring-inset ring-white/10 shadow-xl ">
                <div class="flex absolute top-10 bg-golden rounded-xl  p-6 ring-1 ring-inset ring-white/10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="#0a0101"
                            d="M7 5.6L5.6 7L3.5 4.9l1.4-1.4L7 5.6M1 13h3v-2H1v2M13 1h-2v3h2V1m-3 21c0 .6.4 1 1 1h2c.6 0 1-.4 1-1v-1h-4v1m10-11v2h3v-2h-3m-.9-7.5L17 5.6L18.4 7l2.1-2.1l-1.4-1.4M18 12c0 2.2-1.2 4.2-3 5.2V19c0 .6-.4 1-1 1h-4c-.6 0-1-.4-1-1v-1.8c-1.8-1-3-3-3-5.2c0-3.3 2.7-6 6-6s6 2.7 6 6m-9.44-2h6.88C14.75 8.81 13.5 8 12 8s-2.75.81-3.44 2Z" />
                    </svg>
                </div>
                <div class="text-base leading-7 pt-12 h-72">
                    <h3 class="font-semibold font-h2 text-smoky-black">Concepts & conseils</h3>
                    <div class="mt-8 font-p text-smoky-black">Besoin d’idées novatrices, de conseils personnalisés ou
                        d’un univers à votre mesure ?</div>

                    <div class="mt-8 font-p text-smoky-black">Ne cherchez plus, nous sommes là pour tout vos futurs
                        concepts.</div>
                </div>
            </div>


            <!--Third card-->
            <div
                class="gap-x-4 flex flex-col rounded-2xl mx-auto mt-16 w-1/3 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8  bg-seasalt p-6 ring-1 ring-inset ring-white/10 shadow-xl ">
                <div class="flex absolute top-10 bg-golden rounded-xl p-6 ring-1 ring-inset ring-white/10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="#0a0101"
                            d="M12 13a5 5 0 0 1-5-5h2a3 3 0 0 0 3 3a3 3 0 0 0 3-3h2a5 5 0 0 1-5 5m0-10a3 3 0 0 1 3 3H9a3 3 0 0 1 3-3m7 3h-2a5 5 0 0 0-5-5a5 5 0 0 0-5 5H5c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Z" />
                    </svg>
                </div>
                <div class="text-base leading-7 pt-12">
                    <h3 class="font-semibold font-h2 text-smoky-black">Boutique</h3>
                    <div class="mt-8 font-p text-smoky-black">Le meilleur vous attend ici avec les créations exclusives
                        de Necryx.</div>

                    <div class="mt-8 font-p text-smoky-black"> Laissez-vous séduire par nos produits d'exception,
                        alliant créativité, technologie et gameplay captivant.</div>
                </div>
            </div>

        </div>
    </div>

    <div>
        <br>
        <br><br><br><br><br><br><br>
    </div>


    <div class="relative py-2">
        {{-- second slider --}}

        <div class="">
            <div class="swipeer w-full ">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <div class="bg-white pb-16 pt-24 sm:pb-24 sm:pt-32 xl:pb-32 h-auto ">
                        @foreach ($collections as $collection)
                            <div class="bg-gray-900 pb-20 sm:pb-24 xl:pb-0">
                                <div
                                    class="mx-auto flex max-w-7xl flex-col items-center gap-x-8 gap-y-10 px-6 sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">
                                    <div class="-mt-8 w-full max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none">
                                        <div class="relative aspect-[2/1] h-full md:-mx-8 xl:mx-0 xl:aspect-auto">
                                            <img class="object-contain fill-gray-800 h-full w-full"
                                                src="{{ Storage::url($collection->image) }}"
                                                alt="{{ $collection->name }}">
                                        </div>
                                    </div>
                                    <div class="w-full max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-24">
                                        <div
                                            class="text-xl font-semibold leading-8 text-white sm:text-2xl sm:leading-9">
                                            {{ $collection->content }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>


    {{-- <div>
        <div class="swipeer mt-24"> --}}
    <!-- Additional required wrapper -->
    {{-- <div class="swiper-wrappeer">
                <!-- Slides -->
                @foreach ($collections as $collection)
                    <!-- Slides -->
                    <div class="swiper-slide relative ">
                        {{ $collection->types }}
                    </div>
            </div>
            @endforeach --}}


    {{-- <div class="swiper w-full h-[30rem]">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <div class="bg-white pb-16 pt-24 sm:pb-24 sm:pt-32 xl:pb-32">
                        @foreach ($collections as $collection)
                            <div class="bg-gray-900 pb-20 sm:pb-24 xl:pb-0">
                                <div
                                    class="mx-auto flex max-w-7xl flex-col items-center gap-x-8 gap-y-10 px-6 sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">
                                    <div class="-mt-8 w-full max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none">
                                        <div class="relative aspect-[2/1] h-full md:-mx-8 xl:mx-0 xl:aspect-auto">
                                            <img class="absolute inset-0 h-full w-full rounded-2xl bg-gray-800 object-cover shadow-2xl"
                                                src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="w-full max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-24">
                                        <figure class="relative isolate pt-6 sm:pt-12">
                                            <svg viewBox="0 0 162 128" fill="none" aria-hidden="true"
                                                class="absolute left-0 top-0 -z-10 h-32 stroke-white/20">
                                                <path id="b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb"
                                                    d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                                                <use href="#b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" x="86" />
                                            </svg>
                                            <blockquote
                                                class="text-xl font-semibold leading-8 text-white sm:text-2xl sm:leading-9">
                                                <p>Gravida quam mi erat tortor neque molestie. Auctor aliquet at
                                                    porttitor a enim nunc suscipit tincidunt nunc. Et non lorem tortor
                                                    posuere. Nunc eu scelerisque interdum eget tellus non nibh
                                                    scelerisque bibendum.</p>
                                            </blockquote>
                                            <figcaption class="mt-8 text-base">
                                                <div class="font-semibold text-white">Judith Black</div>
                                                <div class="mt-1 text-gray-400">CEO of Workcation</div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
                
            </div>



            <!-- If we need navigation buttons -->
                <div class="swiper-button-preev"></div>
                <div class="swiper-button-neext"></div>
        </div>
    </div> --}}



</x-guest-layout>
