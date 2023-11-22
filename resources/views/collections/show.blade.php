<x-app-layout>
    <div class="m-10">
        <div class="pb-8 flex justify-around items-center">
            <h2 class="font-bold text-lg text-white">CRUD Collections - Necryx</h2>
            <a class="border-4 border-gray-800 bg-gray-800 text-white rounded-xl p-2" href="{{ route('collections.index') }}">
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
                            {{ $collection->type}}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Nom</label>
                            {{ $collection->name}}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Contenu</label>
                            {{ $collection->content}}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Nombre de joueurs</label>
                            {{ $collection->number_players}}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Durée</label>
                            {{ $collection->duration}}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Age</label>
                            {{ $collection->age}}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Origine</label>
                            {{ $collection->origin}}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Exemple</label>
                            {{ $collection->example}}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Image </label>
                            <img src="{{ Storage::url($collection->image) }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
