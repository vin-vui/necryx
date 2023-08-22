<x-guest-layout>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pr-4">
                    <div class="relative overflow-hidden rounded-3xl px-6 pb-9 pt-64 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
                        <img class="absolute inset-0 h-full w-full object-cover" src="{{ Storage::url('/alix.jpg') }}" alt="">
                        <figure class="relative isolate">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                                <path d="M192 64c-40.646 0-72.483 11.229-94.627 33.373C75.229 119.517 64 151.354 64 192v256h160V192h-96c0-23.056 4.922-39.666 14.627-49.373C152.334 132.922 168.944 128 192 128" fill="#d0a302" />
                                <path d="M416 64c-40.646 0-72.483 11.229-94.627 33.373C299.229 119.517 288 151.354 288 192v256h160V192h-96c0-23.056 4.922-39.666 14.627-49.373C376.334 132.922 392.944 128 416 128" fill="#d0a302" /></svg>
                            <img src="" alt="" class="h-12 w-auto">
                            <blockquote class="text-xl font-semibold leading-8 text-seasalt">
                                <p>
                                    Nous devons mettre la Technologie au service de l’Imagination pour réinventer les règles du jeu et ouvrir de nouveaux horizons.</p>
                            </blockquote>
                            <figcaption class="mt-6 text-sm leading-6 text-dark-red"><strong class="font-semibold text-white">Alix Faivre,</strong> Fondateur de Necryx</figcaption>
                        </figure>
                    </div>
                </div>
                <div>
                    <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Necryx : La marque de l'Imaginaire</h1>
                        <div class="max-w-xl">
                            <p class="mt-6">Necryx est une marque créative qui explore les limites du jeu et de la technologie. La marque se distingue par sa quête d'originalité, sa passion pour l'innovation et sa volonté de créer des expériences hors du commun.</p>
                            <p class="mt-8">Necryx est animée par une vision audacieuse qui défie les conventions et explore de nouveaux horizons. 
                                Attendez vous à découvrir des créations uniques, des expériences immersives et des produits de qualité exceptionnelle, le tout soutenu par une approche et une utilisation créative de l'intelligence artificielle.</p>
                            <p class="mt-8">La marque Necryx est un univers en constante évolution, où la créativité, la technologie et l'innovation se rejoignent pour offrir des expériences inédites et stimulantes. Rejoignez-nous dans cette aventure et découvrez un nouveau monde d'art et de divertissement à la frontière de l'imagination et de la technologie.</p>
                        </div>
                    </div>
                    <dl class="mt-10 grid grid-cols-2 gap-8 border-t border-gray-900/10 pt-10 sm:grid-cols-4">
                        <div>
                            <dt class="text-sm font-semibold leading-6 text-gray-600">Fondé en</dt>
                            <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">2023</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-semibold leading-6 text-gray-600">Nombre de jeux créés</dt>
                            <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">6+</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-semibold leading-6 text-gray-600">Tasses de café consommées</dt>
                            <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">∞</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-semibold leading-6 text-gray-600">Image AI générée</dt>
                            <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">16.000+</dd>
                        </div>
                    </dl>
                    <div class="mt-10 flex">
                        <a href="#" class="text-base font-semibold leading-7 text-dark-red">En savoir plus sur Necryx<span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="bg-white pb-16 pt-24 sm:pb-24 sm:pt-32 xl:pb-32">
        <div class="bg-gray-900 pb-20 sm:pb-24 xl:pb-0">
            <div class="mx-auto flex max-w-7xl flex-col items-center gap-x-8 gap-y-10 px-6 sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">
                <div class="-mt-8 w-full max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none">
                    <div class="relative aspect-[2/1] h-full md:-mx-8 xl:mx-0 xl:aspect-auto">
                        <img class="absolute inset-0 h-full w-full rounded-2xl bg-gray-800 object-cover shadow-2xl" src="{{ Storage::url('/alix.jpg') }}" alt="">
    </div>
    </div>
    <div class="w-full max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-24">
        <figure class="relative isolate pt-6 sm:pt-12">
            <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute left-0 top-0 -z-10 h-32 stroke-white/20">
                <path id="b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                <use href="#b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" x="86" />
            </svg>
            <blockquote class="text-xl font-semibold leading-8 text-white sm:text-2xl sm:leading-9">
                <p>Necryx est une marque créative qui explore les limites du jeu et de la technologie. La marque se distingue par sa quête d'originalité, sa passion pour l'innovation et sa volonté de créer des expériences hors du commun.</p>
            </blockquote>
            <figcaption class="mt-8 text-base">
                <div class="font-semibold text-white">Alix Faivre</div>
                <div class="mt-1 text-gray-400">Fondateur de Necryx</div>
            </figcaption>
        </figure>
    </div>
    </div>
    </div>
    </div> --}}
</x-guest-layout>
