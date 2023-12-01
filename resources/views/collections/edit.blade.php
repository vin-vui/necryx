<x-app-layout>

    <div class="fixed right-4 top-4 z-50">
        <a class="hover:drop-shadow-[0px_0px_19px_#D0A302] bg-yellow-400 hover:bg-yellow-500 transition-all font-p text-xs uppercase tracking-widest inline-flex justify-center items-center gap-2 py-3 px-4 text-center text-gray-900" href="{{ route('collections.index') }}">
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

        <form action="{{ route('collections.update', $collection->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="pb-5">
                    <label class="font-bold text-lg">Titre</label>
                    <div class=" text-black">
                        <input type="text" name="name" value="{{ $collection->name }}" class="w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400" value="{{ $collection->name }}">
                    </div>
                </div>
                <div class="pb-5">
                    <label class="font-bold text-lg">Type</label>
                    <div class=" text-black">
                        <select class="text-black w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400 " name="type_id">
                            @foreach ($types as $type)
                            <option @selected($collection->type_id == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="pb-5">
                    <label class="font-bold text-lg">Contenu</label>
                    <div class=" text-black">
                        <textarea class="w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400 " name="content" cols="30" rows="10">{{ $collection->content }}</textarea>
                    </div>
                </div>
                <div class="flex justify-between gap-4">
                    <div class="pb-5 w-full">
                        <label class="font-bold text-lg">Nombre de joueurs</label>
                        <div class=" text-black">
                            <input type="text" name="players" class="w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400 " value="{{ $collection->players }}">
                        </div>
                    </div>
                    <div class="pb-5 w-full">
                        <label class="font-bold text-lg">Durée</label>
                        <div class=" text-black">
                            <input type="text" name="duration" class="w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400 " value="{{ $collection->duration }}">
                        </div>
                    </div>
                    <div class="pb-5 w-full">
                        <label class="font-bold text-lg">Age</label>
                        <div class=" text-black">
                            <input type="text" name="age" class="w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400 " value="{{ $collection->age }}">
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <label class="font-bold text-lg">Origine</label>
                    <div class=" text-black">
                        <textarea class="w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400 " name="origin" cols="30" rows="5">{{ $collection->origin }}</textarea>
                    </div>
                </div>
                <div class="pb-5 ">
                    <label class="font-bold text-lg">Tags</label>
                    <div class="flex flex-wrap gap-4">
                        @foreach ($tags as $tag)
                        <div class="bg-gray-50 text-gray-900 py-1 px-2">
                            <input id="tag_{{ $tag->id }}" type="checkbox" name="tags[]" @checked($collection->tags->contains($tag->id)) value="{{ $tag->id }}" class="text-yellow-400 focus:ring-yellow-400">
                            <label for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="pb-5">
                    <label class="font-bold text-lg">Visuel</label>
                    <div class="flex justify-center border border-dashed border-gray-50 px-6 py-10">
                        <div class="text-center">
                            <div class="flex justify-center">
                                <img class="h-96 w-auto object-cover" src="{{ Storage::url($collection->image) }}" alt="">
                            </div>
                            <div class="mt-4 flex justify-center text-sm leading-6 text-gray-600">
                                <label for="file-upload" class="relative cursor-pointer bg-yellow-500 px-3 font-semibold text-gray-900 focus-within:outline-none focus-within:ring-2 focus-within:ring-yellow-400 focus-within:ring-offset-2 hover:text-gray-50">
                                    <span>Choisir un fichier</span>
                                    <input id="file-upload" name="image" type="file" class="sr-only">
                                </label>
                            </div>
                            <p class="text-xs leading-5 text-gray-600">jpeg, png, jpg, gif, svg, webp jusqu'à 10Mo</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-end justify-between gap-10">
                    <div class="w-full">
                        <label class="font-bold text-lg">Status</label>
                        <div class="w-full text-black">
                            <select class="text-black w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400 " name="status">
                                <option @selected($collection->status == "draft") value="draft">Brouillon</option>
                                <option @selected($collection->status == "published") value="published">Publié</option>
                                <option @selected($collection->status == "archived") value="archived">Archivé</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center w-full">
                        <button type="submit" class="hover:drop-shadow-[0px_0px_19px_#D0A302] bg-yellow-400 hover:bg-yellow-500 transition-all font-p text-xs uppercase tracking-widest inline-flex justify-center items-center gap-2 py-3 px-4 w-full text-center text-gray-900">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M17 3H3v18h18V7l-4-4zm-5 16c-1.66 0-3-1.34-3-3s1.34-3 3-3s3 1.34 3 3s-1.34 3-3 3zm3-10H5V5h10v4z" />
                            </svg>
                            Enregistrer
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
