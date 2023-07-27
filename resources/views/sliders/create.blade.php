<x-app-layout>
    <div class="m-10">
        <div class="pb-8 flex justify-around items-center">
            <h2 class="font-bold text-lg text-white">CRUD sliders - Necryx</h2>
            <a class="border-4 border-gray-800 bg-gray-800 text-white rounded-xl p-2" href="{{ route('sliders.index') }}">
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

                <form action="{{ route('sliders.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Nom:</label>
                            <div class="form-group text-black">
                                <input type="text" name="name" class="form-control w-full" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Description :</label>
                            <div class="form-group text-black">
                                <textarea class="form-control w-full" name="description" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group py-2">
                            <label class="font-bold text-lg" for="image">Image :</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>
                        {{-- <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Ordre :</label>
                            <div class="form-group text-black">
                                <select name="order" class="form-select">
                                    <option value="1"></option>
                                    <option value="1">Première</option>
                                    <option value="2">Seconde</option>
                                    <option value="3">Troisième</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Status :</label>
                            <div class="form-group text-black">
                                <select name="status" class="form-select">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="border-4 border-gray-800 bg-white  text-gray-800 rounded-xl p-3 px-5">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>