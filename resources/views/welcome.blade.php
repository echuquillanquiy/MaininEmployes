<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/home/portada.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-48">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">MANTENIMIENTO E INGENIERIA INDUSTRIAL</h1>
                <p class="text-white text-lg mt-2 mb-4">Proveemos bienes y servicios de mantenimiento electrico, mécanico</p>

                @livewire('search')
            </div>
        </div>
    </section>

    <section class="mt-8">
        <h1 class="text-gray-600 text-center text-3xl mb-6">SERVICIOS</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-48 w-full object-cover" src="{{ asset('img/home/serv1.jpg') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">MANTENIMIENTO MECÁNICO</h1>
                </header>

                <p class="text-sm text-gray-500">Soporte con personal para cambios de fajas transportadoras, polines, raspadores primarios, secundarios y terciarios, biplow, linatex laterales de arrastre.</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-48 w-full object-cover" src="{{ asset('img/home/serv2.jpg') }}" alt="">
                </figure>
                <h1 class="text-center text-xl text-gray-700">MANTENIMIENTO ELÉCTRICO</h1>
                <p class="text-sm text-gray-500">Mantenimiento a instrumentos de faja transportadora.
                    Mantenimiento de arrancadores de baja y media tensión.
                    Mantenimiento de de motores de baja y media tención..</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-48 w-full object-cover" src="{{ asset('img/home/serv3.jpg') }}" alt="">
                </figure>
                <h1 class="text-center text-md text-gray-700">FABRICACIÓN, MONTAJE Y DESMONTAJE DE EQUIPOS Y ESTRUCTURAS INDUSTRIALES</h1>
                <p class="text-sm text-gray-500">Fabricación, montaje y desmontaje de naves industriales en diferentes minas.</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-48 w-full object-cover" src="{{ asset('img/home/serv4.jpg') }}" alt="">
                </figure>
                <h1 class="text-center text-md text-gray-700">DESARROLLO DE PROYECTOS ELECTROMECÁNICO</h1>
                <p class="text-sm text-gray-500">Montaje eléctrico, mecánico y mantenimiento de chancadoras cónicas.</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-48 w-full object-cover" src="{{ asset('img/home/serv5.jpg') }}" alt="">
                </figure>
                <h1 class="text-center text-xl text-gray-700">DESARROLLO DE PROYECTOS CIVILES</h1>
                <p class="text-sm text-gray-500">Instalación de tuberías de 20”, 16” y otros diametros incluye montaje de instrumentación</p>
            </article>
        </div>
    </section>

    <section class="mt-8 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿QUIÉNES SOMOS?</h1>
        <h2 class="text-center text-white text-md mb-4">EL DESARROLLO DE NUESTROS PROYECTOS SON REALIZADOS CON LOS MAS ALTOS ESTANDARES DE SEGURIDAD Y CALIDAD DEL MERCADO.</h2>
        <div class="flex justify-center mb-4">
            <a href="{{ route('trabajos.index') }}" type="submit" class="bg-red-500 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded right-0 top-0 mt-4">
                ¿Quieres ser parte de nosotros?
            </a>
        </div>

        <p class="text-center text-sm mb-6 text-white w-full">Somos una empresa proveedora de bienes y servicios de Mantenimiento eléctrico,
            mecanico, ejecución de obras electromecanicas, construccion civil en los sectores de minería, industria,
            energéticas y edificaciones en general desde la etapa de planificación, consultoría y ejecución.
        </p>
    </section>


    <section class="my-8">
        <h1 class="text-center text-gray-600 text-3xl">ULTIMOS TRABAJOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Nuestro servicio de calidad nos ha permitido trabajar en los proyectos de minería más importantes del Perú.</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-6 gap-y-8">
            @foreach($trabajos as $trabajo)
                <x-trabajos-card :trabajo="$trabajo" />
            @endforeach
        </div>
    </section>

    <footer class="bg-gray-700 py-32">
        <div class="w-full text-center">

        </div>
    </footer>
</x-app-layout>
