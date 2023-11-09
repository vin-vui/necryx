<x-app-layout>

    <div class="fixed right-4 top-4 z-50">
        <a class="hover:drop-shadow-[0px_0px_19px_#D0A302] bg-yellow-400 hover:bg-yellow-500 transition-all font-p text-xs uppercase tracking-widest inline-flex justify-center items-center gap-2 py-3 px-4 text-center text-gray-900" href="{{ route('sliders.index') }}">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="currentColor" d="m14 17l-5-5l5-5v10Z" />
            </svg>
            Retour
        </a>
    </div>

    <div class="border-4 mt-12 border-gray-800 p-4 bg-gray-800 text-white drop-shadow-2xl">

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

        <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                    <label class="font-bold text-lg">Nom :</label>
                    <div class="form-group text-black">
                        <input type="text" name="name" value="{{ $slider->name }}" class="form-control w-full" placeholder="Nom">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                    <label class="font-bold text-lg">Description :</label>
                    <div class="form-group">
                        <textarea class="form-control w-full text-black" rows="6" name="description" value="" placeholder="Description">{{ $slider->description }}</textarea>
                    </div>
                </div>
                <div class="form-group py-2">
                    <label class="font-bold text-lg" for="image">Image :</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                    <label class="font-bold text-lg">Ordre :</label>
                    <div class="form-group text-black">
                        <input type="number" name="order" class="form-control w-full" placeholder="Ordre">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                    <label class="font-bold text-lg">Status :</label>
                    <div class="form-group text-black">
                        <select name="status" class="form-select">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="border-4 border-gray-800 bg-white  text-gray-800 rounded-xl p-2">Envoyer</button>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
