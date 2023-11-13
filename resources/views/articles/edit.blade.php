<x-app-layout>

    <div class="fixed right-4 top-4 z-50">
        <a class="hover:drop-shadow-[0px_0px_19px_#D0A302] bg-yellow-400 hover:bg-yellow-500 transition-all font-p text-xs uppercase tracking-widest inline-flex justify-center items-center gap-2 py-3 px-4 text-center text-gray-900" href="{{ route('articles.index') }}">
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

        <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="pb-5">
                <label class="font-bold text-lg">Type</label>
                <div class=" text-black">
                    <select class="text-black w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400 " name="type_id">
                        {{-- TODO: faire un foreach des types --}}
                        <option @selected($article->type->name == "jeu") value="1">Jeu</option>
                        <option @selected($article->type->name == "concept") value="2">Concept</option>
                        <option @selected($article->type->name == "art") value="3">Art</option>
                    </select>
                </div>
            </div>
            <div class="pb-5">
                <label class="font-bold text-lg">Titre</label>
                <div class=" text-black">
                    <input type="text" name="title" value="{{ $article->title }}" class="w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400" value="{{ $article->title }}">
                </div>
            </div>
            <div class="pb-5">
                <label class="font-bold text-lg">Contenu</label>
                <div class=" text-black">
                    <textarea class="w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400 " name="content" cols="30" rows="10">{{ $article->content }}</textarea>
                </div>
            </div>
            <div class="pb-5">
                <label class="font-bold text-lg">Visuel</label>
                <div class="flex justify-center border border-dashed border-gray-50 px-6 py-10">
                    <div class="text-center">
                        <div class="flex justify-center">
                            <img class="h-96 w-auto object-cover" src="{{ Storage::url($article->image) }}" alt="">
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
                            <option @selected($article->status == "draft") value="draft">Brouillon</option>
                            <option @selected($article->status == "published") value="published">Publié</option>
                            <option @selected($article->status == "archived") value="archived">Archivé</option>
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
        </form>
    </div>

</x-app-layout>
