<x-guest-layout>
    <div class="relative bg-seasalt px-6 pb-20 pt-16 lg:px-8 lg:pb-28 lg:pt-24">
        <div class="mx-auto mt-12 grid max-w-lg gap-8 lg:max-w-none lg:grid-cols-3">
            @foreach ($collections as $collection)
                @include('home._partials.collection-card')
            @endforeach
        </div>
    </div>
</x-guest-layout>
