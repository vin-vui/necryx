<x-app-layout>
    <div class="m-10">
        <div class="pb-8 flex justify-around items-center">
            <h2 class="font-bold text-lg text-white">CRUD Types - Necryx</h2>
            <a class="border-4 border-gray-800 bg-gray-800 text-white rounded-xl p-2" href="{{ route('types.index') }}">
                Retour</a>
        </div>
        <div class="row mt-2">
            <div class=" italic pb-4 text-white">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            </div>
            <div class="border-4 border-gray-800 p-4 rounded-xl bg-gray-800 text-white drop-shadow-2xl">
                <div class="row">
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Nom </label>
                            {{ $type->name }}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Persona </label>
                            {{ $type->persona }}
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Image </label>
                            <img src="{{ Storage::url($type->image) }}"> 
                        
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="flex flex-col">
                            <label class="font-bold text-lg">Description </label>
                            {{ $type->description }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
