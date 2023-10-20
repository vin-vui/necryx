<x-guest-layout>
    <div class="relative bg-seasalt pb-20 pt-16 lg:pb-28 lg:pt-32">

        <div class="px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-base font-semibold leading-7 font-h1 text-yellow-600 animate-slideInLeft">
                    Collection
                </p>
                <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl font-h2 capitalize animate-slideInRight">
                    @switch(request()->route()->parameters['type'])
                    @case('jeu')
                    Jeux
                    @break
                    @case('concept')
                    Concepts
                    @break
                    @case('art')
                    Arts
                    @break
                    @endswitch
                </h2>
                <p class="mt-6 font-p text-lg leading-8 text-gray-600 animate-slideInTop">
                    @switch(request()->route()->parameters['type'])
                    @case('jeu')
                    De la chaleur des jeux en bois inspirés de l'univers viking à la complexité captivante de l'univers de Necropolis, notre passion se traduit par une gamme diversifiée. Chez Necryx, nous fusionnons créativité et innovation pour vous proposer des expériences de jeu exceptionnelles, quels que soient vos préférences !
                    @break
                    @case('concept')
                    Chez Necryx, notre créativité n'a pas de limites. En passant par des concepts uniques, du game design innovant à des idées audacieuses et ambitieuses, nous repoussons constamment les frontières pour vous offrir des expériences conceptuelles sans pareil. Explorez notre univers où chaque concept est une invitation à la découverte et à l'innovation.
                    @break
                    @case('art')
                    De la fusion entre la créativité humaine et l'intelligence artificielle à l'art directement façonné par l'homme, toutes nos créations, parfois étranges, conceptuelles ou dérangeantes, reflètent notre passion pour l'Art. Chez Necryx, l'Art est une exploration continue, vous invitant à la réflexion et à la découverte de l'inattendu...
                    @break
                    @endswitch
                </p>
            </div>
        </div>

        @switch(request()->route()->parameters['type'])
        @case('jeu')
        <div class="flex flex-col gap-32 mt-24">
            @foreach ($collections as $game)
            <div data-aos="fade-right" class="{{ $loop->first ? 'animate-slideInBottom' : '' }}">
                @include('home._partials.game-slide')
            </div>
            @endforeach
        </div>
        @break
        @case('concept')
        <div class="mx-auto px-8 mt-12 grid max-w-lg gap-8 lg:max-w-none lg:grid-cols-4">
            @foreach ($collections as $collection)
            @include('home._partials.collection-card')
            @endforeach
        </div>
        @break
        @case('art')
        <div class="mx-auto px-8 mt-12 grid max-w-lg gap-8 lg:max-w-none lg:grid-cols-4">
            @foreach ($collections as $collection)
            @include('home._partials.collection-card')
            @endforeach
        </div>
        @break
        @endswitch

    </div>
</x-guest-layout>
