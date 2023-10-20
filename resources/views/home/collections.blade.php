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
                    Des jeux uniques, pour des moments épiques !
                    @break
                    @case('concept')
                    Explorez des concepts innovants !
                    @break
                    @case('art')
                    Des créations fusionnant la créativité humaine à la technologie
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
