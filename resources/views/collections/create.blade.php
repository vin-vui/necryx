<x-app-layout>
    <div class="">


        <div class="pb-4 flex justify-end items-end">
            <a class="py-4 px-6 bg-gray-800 text-white hover:bg-gray-600 items-center gap-2 flex" href="{{ route('collections.index') }}">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="currentColor" d="m14 17l-5-5l5-5v10Z" /></svg>
                Retour
            </a>
        </div>

        <div class="">
            <div class="col-lg-12 italic pb-4 text-white">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
            </div>
            <div class="col-lg-12 border-4 border-gray-800 p-4 bg-gray-800 text-white drop-shadow-2xl">
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

                <form action="{{ route('collections.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Nom</label>
                            <div class="form-group text-black">
                                <input type="text" name="name" class="w-full">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Types</label>
                            <div class="form-group text-black">
                                <select class="text-black w-full" name="types">
                                    <option value="jeu">Jeu</option>
                                    <option value="concept">Concept</option>
                                    <option value="art">Art</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Contenu</label>
                            <div class="form-group text-black">
                                <textarea class="w-full" name="content" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="flex justify-between gap-4">
                            <div class="col-xs-12 col-sm-12 col-md-12 pb-5 w-full">
                                <label class="font-bold text-lg">Nombre de joueurs</label>
                                <div class="form-group text-black">
                                    <input type="text" name="number_players" class="w-full">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 pb-5 w-full">
                                <label class="font-bold text-lg">Durée</label>
                                <div class="form-group text-black">
                                    <input type="text" name="duration" class=" w-full">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 pb-5 w-full">
                                <label class="font-bold text-lg">Age</label>
                                <div class="form-group text-black">
                                    <input type="text" name="age" class=" w-full">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Origine</label>
                            <div class="form-group text-black">
                                <input type="text" name="origin" class="w-full">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Exemple</label>
                            <div class="form-group text-black">
                                <textarea class="w-full" name="example" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5 ">
                            <label class="font-bold text-lg">Tags</label>
                            <div class="flex flex-wrap gap-4">
                                @foreach ($tags as $tag)
                                <div class="bg-gray-50 text-gray-900 py-1 px-2">
                                    <input id="tag_{{ $tag->id }}" type="checkbox" name="tags[]" value="{{ $tag->id }}">
                                    <label for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group py-2">
                            <label class="font-bold text-lg" for="image">Image</label>
                            <input type="file" name="image" id="image" class="">
                        </div>
                        {{-- <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Ordre :</label>
                            <div class="form-group text-black">
                                <input type="number" name="order" class=" w-full" placeholder="Ordre">
                            </div>
                        </div> --}}
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Status</label>
                            <div class="form-group text-black">
                                <select name="status" class="form-select">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="border-4 border-gray-800 bg-white  text-gray-800 p-3 px-5">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
