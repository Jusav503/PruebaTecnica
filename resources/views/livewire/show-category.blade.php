<div>
    {{-- Form --}}
    <x-jet-form-section submit="save" class="mb-6">
        <x-slot name="title">
            Crear subcategoria
        </x-slot>

        <x-slot name="description"></x-slot>

        <x-slot name="form">
            {{-- Name --}}
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>Nombre</x-jet-label>
                <x-jet-input type="text" class="w-full mt-1" wire:model="createForm.name" />

                <x-jet-input-error for="createForm.name" />
            </div>
            {{-- Slug --}}
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>Slug</x-jet-label>
                <x-jet-input disabled type="text" class="w-full mt-1 bg-gray-100" wire:model="createForm.slug" />

                <x-jet-input-error for="createForm.slug" />
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">subcategoría creada</x-jet-action-message>
            <x-jet-button>Crear subcategoría</x-jet-button>
        </x-slot>
    </x-jet-form-section>

    {{-- show subcategories and Edit and delete section --}}
    <x-jet-action-section>
        <x-slot name="title">
            Lista de subcategorías
        </x-slot>

        <x-slot name="description"></x-slot>

        <x-slot name="content">
            <table class="text-gray-600">
                <thead class="border-b border-gray-300">
                    <tr class="text-left">
                        <th class="py-2 w-full">Nombre</th>
                        <th class="py-2">Acción</th>
                    </tr>
                </thead>

                {{-- Buttons --}}
                <tbody class="divide-y divide-gray-300">
                    @foreach ($subcategories as $subcategory)
                        <tr>
                            {{-- Name --}}
                            <td class="py-2">
                                <span class="uppercase">{{ $subcategory->name }}</span>
                            </td>

                            {{-- Edit and delete buttons --}}
                            <td class="py-2">
                                <div class="flex divide-x divide-gray-300 font-semibold">
                                    <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                        wire:click="edit('{{ $subcategory->id }}')">Editar</a>
                                    <a class="pl-2 hover:text-red-600 cursor-pointer"
                                        wire:click="$emit('deleteSubcategory', '{{ $subcategory->id }}')">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-slot>
    </x-jet-action-section>

    {{-- Update section --}}
    <x-jet-dialog-modal wire:model="editForm.open">
        <x-slot name="title">
            Editar categoría
        </x-slot>

        <x-slot name="content">
            <div class="space-y-3">
                {{-- Name --}}
                <div>
                    <x-jet-label>Nombre</x-jet-label>
                    <x-jet-input type="text" class="w-full mt-1" wire:model="editForm.name" />

                    <x-jet-input-error for="editForm.name" />
                </div>
                {{-- Slug --}}
                <div>
                    <x-jet-label>Slug</x-jet-label>
                    <x-jet-input disabled type="text" class="w-full mt-1 bg-gray-100" wire:model="editForm.slug" />

                    <x-jet-input-error for="editForm.slug" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="update">
                Actualizar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

    @push('script')
        <script>
            Livewire.on('deleteSubcategory', subcategoryId => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No podrás revertir esto",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Si, eliminar!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('show-category', 'delete', subcategoryId)

                        Swal.fire(
                            'Eliminado!',
                            'Subcategoría eliminada',
                            'success'
                        )
                    }
                })
            });
        </script>
    @endpush
</div>
