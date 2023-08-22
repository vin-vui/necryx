<x-guest-layout>


    <div class="relative bg-black py-2">
        {{-- main slider --}}

        <div class="">
            <div class="swiper w-full h-[30rem]">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    @foreach ($sliders as $slider)
                        <!-- Slides -->
                        <div class="swiper-slide relative ">
                            <img class="object-contain fill-black h-full w-full opacity-40"
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
        <div class="flex justify-around gap-x-20 mx-24 absolute top-2/4 mt-16 z-50 h-auto ">

            <!--First card-->
            <div
                class="gap-x-4 flex flex-col p-6 rounded-2xl mx-auto mt-16 w-1/3 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8  bg-seasalt  ring-1 ring-inset ring-white/10 shadow-xl ">
                <div
                    class="flex absolute top-10 bg-gradient-to-b from-yellow-300 to-yellow-600 rounded-xl p-6 ring-1 ring-inset ring-white/10">
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
                <div
                    class="flex absolute top-10 bg-gradient-to-b from-yellow-300 to-yellow-600 rounded-xl  p-6 ring-1 ring-inset ring-white/10">
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
                <div
                    class="flex absolute top-10 bg-gradient-to-b from-yellow-300 to-yellow-600 rounded-xl p-6 ring-1 ring-inset ring-white/10">
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



    <!-- Second slider -->
    <div class="mt-64">

        <div class="swiper_two h-[20rem]">
            <!-- Additional required wrapper -->

            <div class="swiper-wrapper bg-white pb-16 pt-24 sm:pb-24 sm:pt-32 xl:pb-32">
                @foreach ($collections as $collection)
                    <!--Slides-->
                    <div class="swiper-slide  bg-black pb-20 sm:pb-24 xl:pb-0">
                        <div
                            class="mx-auto flex max-w-7xl flex-col items-center sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">
                            <div class="-mt-8 max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none">
                                <div class="relative aspect-[2/1] h-96 md:-mx-8 xl:mx-0 xl:aspect-auto">
                                    <img class="absolute inset-0 h-full rounded-2xl bg-gray-800 shadow-2xl"
                                        src="{{ Storage::url($collection->image) }}" alt="{{ $collection->name }}">
                                </div>
                            </div>
                            <div class="max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-24">
                                <div class="text-xs text-seasalt leading-8 font-p lg:text-xl sm:leading-9">
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
           
        </div>

         <!-- If we need navigation buttons -->
            <div class="second-swiper-button-preev"></div>
            <div class="second-swiper-button-neext"></div>

    </div>
    </div>




</x-guest-layout>
