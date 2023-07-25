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
                    <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                        <div class="form-group">
                            <label class="font-bold text-lg">Type :</label><br>
                            {{ $collection->types}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                        <div class="form-group">
                            <label class="font-bold text-lg">Nom :</label><br>
                            {{ $collection->name}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                        <div class="form-group">
                            <label class="font-bold text-lg">Contenu :</label><br>
                            {{ $collection->content}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                        <div class="form-group">
                            <label class="font-bold text-lg">Nombre de joueurs :</label><br>
                            {{ $collection->number_players}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                        <div class="form-group">
                            <label class="font-bold text-lg">Durée :</label><br>
                            {{ $collection->duration}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                        <div class="form-group">
                            <label class="font-bold text-lg">Age :</label><br>
                            {{ $collection->age}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                        <div class="form-group">
                            <label class="font-bold text-lg">Origine :</label><br>
                            {{ $collection->origin}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                        <div class="form-group">
                            <label class="font-bold text-lg">Exemple :</label><br>
                            {{ $collection->example}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>