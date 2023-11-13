<div x-cloak x-show="showModal" class="fixed inset-0 flex items-center justify-center z-50">
    <div class="bg-white dark:bg-gray-600 p-6 rounded-lg shadow-lg dark:text-gray-300 border-gray-900 border-2">
        <h2 class="text-lg font-bold mb-4">Confirmation de suppression</h2>
        <p class="mb-4">Êtes-vous sûr de vouloir supprimer ce tag ?</p>
        <div class="flex justify-end">
            <button type="button"
                class="btn btn-secondary mr-2 border-2 border-transparent rounded-md px-2 py-1 hover:border-gray-700 hover:bg-gray-700 "
                @click.prevent="showModal = false">Annuler</button>
             <button type="submit"
                class="btn btn-danger border-2 border-transparent rounded-md px-2 py-1 hover:border-red-500 hover:bg-red-500 "
                @click="showModal = false">Supprimer</button>
        </div>
    </div>
</div>
