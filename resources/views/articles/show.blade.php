<x-app-layout>
    <div class="m-10">
        <div class="pb-8 flex justify-around items-center">
            <h2 class="font-bold text-lg text-white">CRUD Articles - Necryx</h2>
            <a class="border-4 border-gray-800 bg-gray-800 text-white rounded-xl p-2" href="{{ route('articles.index') }}">
                Retour</a>
        </div>
        <div class="row mt-2">
            <div class="col-lg-12 italic pb-4 text-white">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
            </div>
            <div class="col-lg-12 border-4 border-gray-800 p-4 rounded-xl bg-gray-800 text-white drop-shadow-2xl">
                <div class="row">
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Type</label>
                            {{ $article->type_id}}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Titre</label>
                            {{ $article->title }}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Contenu</label>
                            {{ $article->content }}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Image </label>
                            <img src="{{ Storage::url($article->image) }}"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>