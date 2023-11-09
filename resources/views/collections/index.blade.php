<x-app-layout>

    <div class="">

        <div class="pb-4 flex justify-end items-end">
            <a class="py-4 px-6 bg-gray-800 text-white hover:bg-gray-600 items-center gap-2 flex" href="{{ route('collections.create') }}">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2v-6Z"/></svg>
                Ajouter un item
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
            <div class="relative overflow-x-auto shadow-md">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                visuel
                            </th>
                            <th scope="col" class="px-6 py-3">
                                nom
                            </th>
                            <th scope="col" class="px-6 py-3">
                                type
                            </th>
                            <th scope="col" class="px-4 py-3 text-center">
                                status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($collections as $collection)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                <img class="h-16 w-auto object-cover" src="{{ Storage::url($collection->image) }}" alt="">
                            </td>
                            <td class="px-6 py-4 font-medium whitespace-nowrap text-white">{{ $collection->name }}</td>
                            <td class="px-6 py-4">
                                @switch($collection->types)
                                    @case('jeu')
                                        <span class="bg-yellow-400 text-gray-900 py-0.5 px-2 rounded-md">jeu</span>
                                        @break
                                    @case('concept')
                                        <span class="bg-blue-400 text-gray-900 py-0.5 px-2 rounded-md">concept</span>
                                        @break
                                    @case('art')
                                        <span class="bg-violet-400 text-gray-900 py-0.5 px-2 rounded-md">art</span>
                                        @break
                                @endswitch
                            </td>
                            <td scope="row" class="py-4 font-medium whitespace-nowrap text-white text-center">
                                <span class="{{ $collection->status ? 'bg-green-500' : 'bg-red-500' }} py-0.5 px-2 rounded-full">
                                    {{ $collection->status ? 'actif' : 'inactif' }}
                                </span>
                            </td>
                            <td scope="row" class="py-4 font-medium whitespace-nowrap text-white">
                                <div class="flex items-center ">
                                <a class="btn btn-primary pr-2 class=font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('collections.edit', $collection->id) }}">Editer</a>
                                <form action="{{ route('collections.destroy', $collection->id) }}" method="POST" x-data="{ showModal: false }">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger class=font-medium text-red-600 dark:text-red-500 hover:underline" @click="showModal = true">Supprimer</button>
                                    <x-delete-modal />
                                </form>
                                </div>
                            </td>
                        </tr>
                        </thead>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
