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

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="pb-5">
                <label class="font-bold text-lg">Type</label>
                <div class=" text-black">
                    <select class="text-black w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400 " name="type_id">
                        @foreach ($types as $type)
                        <option {{ old("type_id") == $type->id ? "selected":"" }} value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="pb-5">
                <label class="font-bold text-lg">Titre</label>
                <div class=" text-black">
                    <input type="text" name="title" class="w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400" value="{{ old('title') }}">
                </div>
            </div>
            <div class="pb-5">
                <label class="font-bold text-lg">Contenu</label>
                <div class=" text-black">
                    <textarea id="myeditorinstance" class="w-full focus:ring-2 ring-1 ring-gray-50 border-0 ring-inset focus:ring-inset focus:ring-yellow-400 " name="content" cols="30" rows="10">{{ old('content') }}</textarea>
                </div>
            </div>
            <div class="pb-5">
                <label class="font-bold text-lg">Visuel</label>
                <div class="flex justify-center border border-dashed border-gray-50 px-6 py-10">
                    <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                        </svg>
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
                            <option {{ old("status") == "draft" ? "selected":"" }} value="draft">Brouillon</option>
                            <option {{ old("status") == "published" ? "selected":"" }} value="published">Publié</option>
                            <option {{ old("status") == "archived" ? "selected":"" }} value="archived">Archivé</option>
                        </select>
                    </div>
                </div>
                <div class="text-center w-full">
                    <button type="submit" class="hover:drop-shadow-[0px_0px_19px_#D0A302] bg-yellow-400 hover:bg-yellow-500 transition-all font-p text-xs uppercase tracking-widest inline-flex justify-center items-center gap-2 py-3 px-4 w-full text-center text-gray-900">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M17 3H3v18h18V7l-4-4zm-5 16c-1.66 0-3-1.34-3-3s1.34-3 3-3s3 1.34 3 3s-1.34 3-3 3zm3-10H5V5h10v4z" /></svg>
                        Enregistrer
                    </button>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
