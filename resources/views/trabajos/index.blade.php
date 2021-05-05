<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/trabajos/reclutamiento.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-48">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">UNETE A NUESTRO GRANDIOSO GRUPO DE TRABAJO</h1>
                <p class="text-white text-lg mt-2 mb-4">Trabaja con nosotros, pertenece a una de las mas grande empresas del Perú</p>

                @livewire('search')
            </div>
        </div>
    </section>

    @livewire('trabajo-index')

</x-app-layout>
