<x-guest-layout>
    <div class="relative bg-seasalt pb-20 pt-16 lg:pb-28 lg:pt-32">

        <div class="px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="mt-2 text-4xl font-h2 font-bold tracking-tight text-gray-900 sm:text-6xl capitalize">
                    Blog
                </h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Retrouvez ici nos dernières actualités !
                </p>
            </div>
        </div>

        <div class="mx-auto px-8 mt-12 grid max-w-lg gap-8 lg:max-w-none lg:grid-cols-4">
            @foreach ($articles as $article)
            @include('home._partials.article-card')
            @endforeach
        </div>

    </div>
</x-guest-layout>
