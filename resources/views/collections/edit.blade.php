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
                @if ($errors->any())
                <div class="alert alert-danger">
                    Il y a un problème avec votre enregistrement.<br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('collections.update', $collection->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Nom :</label>
                            <div class="form-group text-black">
                                <input type="text" name="name" value="{{ $collection->name }}" class="form-control w-full" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Types : </label>
                            <div>
                                <select class="text-black" name="types">
                                    <option value="jeu" @if($collection->types == 'jeu') selected @endif>Jeu</option>
                                    <option value="concept" @if($collection->types == 'concept') selected @endif>Concept</option>
                                    <option value="art" @if($collection->types == 'art') selected @endif>Art</option>
                                    <option value="" @if($collection->types == '') selected @endif></option>
                                </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Contenu :</label>
                            <div class="form-group">
                                <input class="form-control w-full text-black" rows="6" name="content" value="{{ $collection->content }}" placeholder="Contenu">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Nombre de joueurs : </label>
                            <div>
                                <select class="text-black" name="number_players">
                                    <option value="" @if($collection->number_players == '') selected @endif></option>
                                    <option value="1" @if($collection->number_players == '1') selected @endif>1</option>
                                    <option value="2" @if($collection->number_players == '2') selected @endif>2</option>
                                    <option value="3" @if($collection->number_players == '3') selected @endif>3</option>
                                    <option value="3" @if($collection->number_players == '4') selected @endif>4</option>
                                    <option value="3" @if($collection->number_players == '5') selected @endif>5</option>
                                    <option value="3" @if($collection->number_players == '6') selected @endif>6</option>
                                    <option value="3" @if($collection->number_players == '7') selected @endif>7</option>
                                    <option value="3" @if($collection->number_players == '8') selected @endif>8</option>
                                    <option value="3" @if($collection->number_players == '9') selected @endif>9</option>
                                    <option value="3" @if($collection->number_players == '10') selected @endif>10</option>
                                </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Durée : </label>
                            <div>
                                <select class="text-black" name="duration">
                                    <option value="" @if($collection->duration == '') selected @endif></option>
                                    <option value="1" @if($collection->duration == '1') selected @endif>1</option>
                                    <option value="2" @if($collection->duration == '2') selected @endif>2</option>
                                    <option value="3" @if($collection->duration == '3') selected @endif>3</option>
                                    <option value="3" @if($collection->duration == '4') selected @endif>4</option>
                                    <option value="3" @if($collection->duration == '5') selected @endif>5</option>
                                    <option value="3" @if($collection->duration == '6') selected @endif>6</option>
                                    <option value="3" @if($collection->duration == '7') selected @endif>7</option>
                                    <option value="3" @if($collection->duration == '8') selected @endif>8</option>
                                    <option value="3" @if($collection->duration == '9') selected @endif>9</option>
                                    <option value="3" @if($collection->duration == '10') selected @endif>10</option>
                                </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Age : </label>
                            <div>
                                <select class="text-black" name="age">
                                    <option value="" @if($collection->age == '') selected @endif></option>
                                    <option value="12" @if($collection->age == '1') selected @endif>A partir de 12 ans</option>
                                    <option value="14" @if($collection->age == '2') selected @endif>A partir de 14 ans</option>
                                    <option value="16" @if($collection->age == '3') selected @endif>A partir de 16 ans</option>
                                </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Origine :</label>
                            <div class="form-group text-black">
                                <input type="text" name="origin" value="{{ $collection->origin }}" class="form-control w-full" placeholder="Origine">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Exemple :</label>
                            <div class="form-group text-black">
                                <input type="text" name="example" value="{{ $collection->example }}" class="form-control w-full" placeholder="Exemple">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5 ">
                            <label class="font-bold text-lg"> Tags :</label>
                            <div>
                                @foreach ($tags as $tag)
                                <div>
                                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}" @if($collection->tags->contains($tag->id)) checked @endif/>
                                    <label>{{ $tag->name }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group py-2">
                            <label class="font-bold text-lg" for="image">Image :</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="border-4 border-gray-800 bg-white  text-gray-800 rounded-xl p-2">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>