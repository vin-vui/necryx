<x-app-layout>

    <div class="fixed right-4 top-4 z-50">
        <a class="hover:drop-shadow-[0px_0px_19px_#D0A302] bg-yellow-400 hover:bg-yellow-500 transition-all font-p text-xs uppercase tracking-widest inline-flex justify-center items-center gap-2 py-3 px-4 text-center text-gray-900" href="{{ route('tags.index') }}">
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

        <form action="{{ route('tags.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="pb-5">
                    <label class="font-bold text-lg">Nom</label>
                    <div class="form-group text-black">
                        <input type="text" name="name" class="w-full">
                    </div>
                </div>
                <div class="pb-5">
                    <label class="font-bold text-lg">Description</label>
                    <div class="form-group text-black">
                        <textarea class="w-full" name="description" rows="10"></textarea>
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
