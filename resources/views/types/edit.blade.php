<x-app-layout>
    <div class="m-10">
        <div class="pb-8 flex justify-around items-center">
            <h2 class="font-bold text-lg text-white">CRUD Types - Necryx</h2>
            <a class="border-4 border-gray-800 bg-gray-800 text-white rounded-xl p-2" href="{{ route('types.index') }}">
                Retour</a>
        </div>
        <div class="row mt-2">
            <div class="italic pb-4 text-white">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            </div>
            <div class="border-4 border-gray-800 p-4 rounded-xl bg-gray-800 text-white drop-shadow-2xl">
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

                <form action="{{ route('types.update', $type->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="pb-5">
                            <label class="font-bold text-lg">Nom :</label>
                            <div>
                                <select class="text-black" name="name" id="nom">
                                    <option value="art" data-persona="alpha"
                                        {{ $type->name === 'art' ? 'selected' : '' }}> Art</option>
                                    <option value="jeu" data-persona="omega"
                                        {{ $type->name === 'jeu' ? 'selected' : '' }}> Jeu</option>
                                    <option value="concept" data-persona="beta"
                                        {{ $type->name === 'concept' ? 'selected' : '' }}> Concept</option>
                                </select>
                            </div>
                        </div>
                        <div class="pb-5">
                            <label class="font-bold text-lg">Persona :</label>
                            <div>
                                <select class="text-black" name="persona" id="persona">
                                    <option value="alpha" data-nom="art"
                                        {{ $type->persona === 'alpha' ? 'selected' : '' }}>Alpha</option>
                                    <option value="omega" data-nom="jeu"
                                        {{ $type->persona === 'omega' ? 'selected' : '' }}>Omega</option>
                                    <option value="beta" data-nom="concept"
                                        {{ $type->persona === 'beta' ? 'selected' : '' }}>Beta</option>
                                </select>
                            </div>
                            <div class="pb-5">
                                <label class="font-bold text-lg">Description :</label>
                                <div class="flex flex-col">
                                    <textarea class="form-control w-full text-black" rows="6" name="description" placeholder="Description">{{ $type->description }}</textarea>
                                </div>
                            </div>
                            <div class="flex flex-col py-2">
                                <label class="font-bold text-lg" for="image">Image :</label>
                                <input type="file" name="image" id="image" class="form-control-file">
                            </div>
                            <div class="text-center">
                                <button type="submit"
                                    class="border-4 border-gray-800 bg-white  text-gray-800 rounded-xl p-2">Envoyer</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
