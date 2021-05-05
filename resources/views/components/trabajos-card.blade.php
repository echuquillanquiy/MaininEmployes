@props(['trabajo'])
<article class="card">
    <img class="h-36 w-full object-cover" src="{{ asset('img/home/trabajo.jpg') }}" alt="{{ $trabajo->titulo }}">
    <div class="card-body">
        <h1 class="card-title">{{ Str::limit($trabajo->titulo, 40) }}</h1>
        <p class="text-gray-500 text-sm mb-2">Publicado: {{ $trabajo->user->name }}</p>

        <div class="flex mb-4">
            <p class="text-green-500 text-xs">
                <i class="far fa-calendar-alt"></i> Inicio: {{ $trabajo->inicio }}
            </p>

            <p class="text-red-600 text-xs ml-auto">
                <i class="far fa-calendar-alt"></i> Fin: {{ $trabajo->fin }}
            </p>
        </div>

        <div class="flex w-full">
            <p class="text-gray-500 text-xs">Categoría: <strong>{{ $trabajo->tipo->name }}</strong></p>

            <p class="text-yellow-700 text-sm ml-auto"><i class="fas fa-users"></i> ({{ $trabajo->postulantes_count }})</p>
        </div>

        <a href="{{ route('trabajos.show', $trabajo) }}" type="submit"  class="mt-4 btn btn-primary btn-block">
            Más Información
        </a>
    </div>
</article>
