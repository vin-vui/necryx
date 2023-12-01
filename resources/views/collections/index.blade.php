<x-app-layout>

    <div class="fixed right-4 top-4 z-50">
        <a class="hover:drop-shadow-[0px_0px_19px_#D0A302] bg-yellow-400 hover:bg-yellow-500 transition-all font-p text-xs uppercase tracking-widest inline-flex justify-center items-center gap-2 py-3 px-4 text-center text-gray-900" href="{{ route('collections.create') }}">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2v-6Z" />
            </svg>
            Ajouter un item
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
                    <th scope="col" class="px-6 py-3">
                        nom
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        type
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        status
                    </th>
                    <th scope="col" class="px-6 py-3 text-right">
                        actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collections as $collection)
                <tr class="border-b bg-gray-800 border-gray-700">
                    <td class="px-6 py-2">
                        <img class="h-16 w-auto object-cover" src="{{ Storage::url($collection->image) }}" alt="">
                    </td>
                    <td class="px-6 font-medium whitespace-nowrap text-white">
                        {{ $collection->name }}
                    </td>
                    <td class="px-6 text-center">
                        <span class="bg-yellow-400 text-gray-900 py-0.5 px-2 rounded-tl-md rounded-br-md">{{ $collection->type != null ? $collection->type->name : 'N/A' }}</span>
                    </td>
                    <td class="px-6 font-medium whitespace-nowrap text-white text-center">
                        @switch($collection->status)
                            @case('draft')
                                <span class="bg-yellow-500 py-0.5 px-2 rounded-full">brouillon</span>
                                @break
                            @case('published')
                                <span class="bg-green-500 py-0.5 px-2 rounded-full">publié</span>
                                @break
                            @case('archived')
                                <span class="bg-red-500 py-0.5 px-2 rounded-full">archivé</span>
                                @break
                        @endswitch
                    </td>
                    <td class="px-6 font-medium whitespace-nowrap">
                        <div class="flex items-end justify-end">
                            <a class="btn btn-primary pr-2 class=font-medium text-blue-500 hover:underline" href="{{ route('collections.edit', $collection->id) }}">Editer</a>
                            <form action="{{ route('collections.destroy', $collection->id) }}" method="POST" x-data="{ showModal: false }">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger class=font-medium text-red-500 hover:underline" @click="showModal = true">Supprimer</button>
                                <x-delete-modal />
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
