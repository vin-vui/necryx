<x-app-layout>

    <div class="py-12">
        <div class="max-w-none mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900">
                <div class="mx-auto ">
                    <div class="grid grid-cols-1 gap-px bg-white/5 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Article publiés</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">{{ App\Models\Article::where('status', 'published')->count() }}</span>                            </p>
                        </div>
                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Jeux</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">{{ App\Models\Collection::where('type_id', 2)->where('status', 'published')->count() }}</span>
                            </p>
                        </div>
                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Arts</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">{{ App\Models\Collection::where('type_id', 1)->where('status', 'published')->count() }}</span>
                            </p>
                        </div>
                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Concepts</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">{{ App\Models\Collection::where('type_id', 3)->where('status', 'published')->count() }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <iframe plausible-embed src="https://plausible.io/share/necryx.com?auth=Xsz6N3YlMnHkkUkmG2ja2&embed=true&theme=dark" scrolling="no" frameborder="0" loading="lazy" style="width: 1px; min-width: 100%; height: 1600px;"></iframe>
                <script async src="https://plausible.io/js/embed.host.js"></script>
            </div>
        </div>
    </div>
</x-app-layout>
