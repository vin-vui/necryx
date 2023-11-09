<x-app-layout>

    <div class="">

        <div class="pb-4 flex justify-end items-end">
            <a class="py-4 px-6 bg-gray-800 text-white hover:bg-gray-600 flex items-center gap-2" href="{{ route('sliders.create') }}">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2v-6Z"/></svg>
                Ajouter une image au slider
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
                            <th scope="col" class="py-3">
                                nom
                            </th>
                            <th scope="col" class="py-3">
                                description
                            </th>
                            <th scope="col" class="py-3 text-center">
                                status
                            </th>
                            <th scope="col" class="py-3 text-center">
                                ordre
                            </th>
                            <th scope="col" class="py-3">
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                <img class="h-16 w-auto object-cover" src="{{ Storage::url($slider->image) }}" alt="">
                            </td>
                            <td scope="row" class="py-4 font-medium whitespace-nowrap text-white">
                                {{ $slider->name }}
                            </td>
                            <td scope="row" class="py-4 whitespace-nowrap text-white">
                                {{ $slider->description }}
                            </td>
                            <td scope="row" class="py-4 font-medium whitespace-nowrap text-white text-center">
                                <span class="{{ $slider->status ? 'bg-green-500' : 'bg-red-500' }} px-2 rounded-full w-4 h-4">
                                    {{ $slider->status ? 'actif' : 'inactif' }}
                                </span>
                            </td>
                            <td scope="row" class="py-4 font-medium whitespace-nowrap text-white text-center">
                                {{ $slider->order }}
                            </td>
                            <td scope="row" class="py-4 font-medium whitespace-nowrap text-white">
                                <div class="flex items-center ">
                                    <a class="btn btn-primary pr-2 class=font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('sliders.edit', $slider->id) }}">Editer</a>
                                    <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" x-data="{ showModal: false }">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger class=font-medium text-red-600 dark:text-red-500 hover:underline" @click="showModal = true">
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
