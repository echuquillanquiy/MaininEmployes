<div>
    <div class="bg-gray-200 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4 focus:outline-none" wire:click="resetFilters">
                <i class="fas fa-briefcase text-xs mr-2"></i>
                Todos los cursos
            </button>

            <div class="relative" x-data="{ open: false }">
                <button class="px-4 text-gray-700 h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = true">
                    <i class="fas fa-tags text-sm mr-2"></i>
                    Categoría
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>

                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">
                    @foreach($tipos as $tipo)
                        <a class="transition-colors duration-200 block px-4 py-2 text-xs text-gray-900 rounded hover:bg-yellow-400 hover:text-white cursor-pointer" wire:click="$set('tipo_id', {{ $tipo->id }})" x-on:click="open = false">{{ $tipo->name }}</a>
                    @endforeach
                </div>
                <!-- // Dropdown Body -->
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-6 gap-y-8">
            @foreach($trabajos as $trabajo)
                <x-trabajos-card :trabajo="$trabajo" />
            @endforeach
        </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{ $trabajos->links() }}
    </div>

</div>
