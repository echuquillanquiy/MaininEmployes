<x-app-layout>
    <section class="bg-gray-700 py-12 mb-6">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class="h-60 w-full object-cover rounded-lg" src="{{ asset('img/trabajos/reclutamiento.jpg') }}" alt="{{ $trabajo->titulo }}">
            </figure>

            <div class="text-white">
                <h1 class="text-4xl mb-4">{{ $trabajo->titulo }}</h1>
                <p class="mb-3"><i class="fas fa-tags mr-2"></i>Categoría: {{ $trabajo->tipo->name }}</p>
                <p class="mb-3 text-green-400"><i class="fas fa-calendar-alt mr-2"></i>Inicio: {{ $trabajo->inicio }}</p>
                <p class="mb-3 text-red-400"><i class="fas fa-calendar-alt mr-2"></i>Fin: {{ $trabajo->fin }}</p>
                <p><i class="fas fa-users mr-2"></i>Postulados: {{ $trabajo->postulantes_count }}</p>
            </div>
        </div>
    </section>

    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="order-2 lg:col-span-2 lg:order-1">
            <section class="card mb-4">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-4">Descripción del Puesto</h1>
                    <p class="text-gray-700 text-base">{{ $trabajo->descripcion }}</p>
                </div>
            </section>

            <section class="card">
                <div class="card-body">
                    <h1 class="font-bold text-3xl mb-4">Requerimientos del Puesto</h1>
                    <ul class="list-disc list-inside">
                        @foreach($trabajo->requerimientos as $requerimiento)
                            <li class="text-gray-700 text-md mb-6">{{ $requerimiento->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>

        <div class="order-1 lg:order-2">
            <section class="card mb-4">
                <div class="card-body">
                    <div class="flex items-center">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{ $trabajo->user->profile_photo_url }}" alt="{{ $trabajo->user->username }}">
                        <div class="ml-4">
                            <h1 class="text-gray-500 text-lg">Por: {{ $trabajo->user->username }}</h1>
                        </div>
                    </div>
                    @can('postulado', $trabajo)
                        <a href="{{ route('trabajos.index') }}" class="btn btn-primary btn-block mt-2">Ya te postulaste al puesto</a>
                    @else
                        <form action="{{ route('trabajos.postulado', $trabajo) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-block mt-2">Postular a este puesto</button>
                        </form>
                    @endcan
                </div>
            </section>

            <aside class="hidden lg:block">
                @foreach($similares as $similar)
                    <article class="flex mb-6">
                        <img class="h-32 w-40 object-cover" src="{{ asset('img/home/trabajo.jpg') }}" alt="{{ $similar->titulo }}">
                        <div class="ml-3">
                            <h1>
                                <a class="font-bold text-gray-500 mb-3" href="{{ route('trabajos.show', $similar) }}">{{ Str::limit( $similar->titulo, 40) }}</a>
                            </h1>

                            <p class="text-sm">
                                <i class="fas fa-users mr-2 text-yellow-600"> {{ $similar->postulantes_count }}</i>
                            </p>

                            <div>
                                <p class="text-sm text-gray-500"><i class="fas fa-calendar-alt"></i> {{ $similar->inicio }}</p>
                                <p class="text-sm text-gray-500"><i class="fas fa-calendar-alt"></i> {{ $similar->fin }}</p>
                            </div>
                            <p class="text-xs text-gray-500 mt-2">
                                <strong>{{ $similar->tipo->name }}</strong>
                            </p>
                        </div>

                    </article>
                @endforeach
            </aside>
        </div>
    </div>
</x-app-layout>
