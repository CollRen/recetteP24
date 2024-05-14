@extends('partials.base')
@section('title', 'Index des recettes')

@section('content')
{{-- @dd($recettes) --}}

    <div class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
        @foreach ($recettes as $recette)
            <article class="w-72 h-full bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                @if ($recette->image)
                    <img class="h-80 w-72 object-cover rounded-t-xl" src="/storage/{{ $recette['image'] }}"
                        alt="Image pour {{ $recette['titre'] }}" />
                @else
                    <img class="h-80 w-72 object-cover rounded-t-xl" src="/assets/img/banniere.jpeg"
                        alt="Image pour {{ $recette['titre'] }}" />
                @endif
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">
                        Préparation {{ $recette['temps_preparation'] }} minutes, Cuisson: {{ $recette['temps_cuisson'] }}
                        minutes
                    </span>
                    <h3 class="text-lg font-bold text-black truncate block capitalize">
                        {{ $recette['titre'] }}
                    </h3>
                    <p class="text-clr-fonce-600 text-sm mt-2">
                        {{ $recette['description'] }}
                    </p>
                </div>
            </article>
        @endforeach
    </div>
@endsection
