<x-app-layout>

    <div class="fixed right-4 top-4 z-50">
        <a class="hover:drop-shadow-[0px_0px_19px_#D0A302] bg-yellow-400 hover:bg-yellow-500 transition-all font-p text-xs uppercase tracking-widest inline-flex justify-center items-center gap-2 py-3 px-4 text-center text-gray-900" href="{{ route('types.create') }}">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2v-6Z" />
            </svg>
            Ajouter un persona
        </a>
    </div>

    @if ($message = Session::get('success'))
    <div class="italic fixed right-4 bottom-4 z-50 text-gray-900 bg-white py-3 px-4">
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    </div>
    @endif

    <div class="relative overflow-x-auto shadow-md mt-12">
        <table class="w-full text-sm text-left text-gray-400">
            <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        visuel
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Persona
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Type
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3 text-right">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                <tr class="border-b bg-gray-800 border-gray-700">
                    <td class="px-6 py-2">
                        <img class="h-16 w-16 object-cover rounded-full" src="{{ Storage::url($type->image) }}" alt="">
                    </td>
                    <td scope="row" class="px-6 py-4 font-mediumwhitespace-nowrap text-white">
                        {{ $type->persona }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $type->name }}
                    </td>
                    <td scope="row" class="px-4 py-6">
                        {{ $type->description }}
                    </td>
                    <td class="px-6 font-medium whitespace-nowrap">
                        <div class="flex items-end justify-end">
                            <a class="btn btn-primary pr-2 class=font-medium text-blue-500 hover:underline" href="{{ route('types.edit', $type) }}">Editer</a>
                            <form action="{{ route('types.destroy', $type->id) }}" method="POST" x-data="{ showModal: false }">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger class=font-medium text-red-500 hover:underline" @click="showModal = true">
                                    Supprimer
                                </button>
                                <x-delete-modal />
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>

</x-app-layout>
