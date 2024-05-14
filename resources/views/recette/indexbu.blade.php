@extends('partials.base')
@section('title', $recette['titre'])

@section('content')

    @foreach ($recettes as $recette)
        <article className="w-72 h-full bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            @if ($menu->image)
                <img className="h-80 w-72 object-cover rounded-t-xl" src="/storage/{{ $recette['image'] }}"
                    alt="Image pour {{ $recette['titre'] }}" />
            @else
                <img className="h-80 w-72 object-cover rounded-t-xl" src="/assets/img/banniere.jpeg"
                    alt="Image pour {{ $recette['titre'] }}" />
            @endif


            <div className="px-4 py-3 w-72">
                <span className="text-gray-400 mr-3 uppercase text-xs">
                    Préparation {{ $recette['temps_préparation'] }} minutes, Cuisson: {{ $recette['temps_cuisson'] }}
                    minutes
                </span>
                <h3 className="text-lg font-bold text-black truncate block capitalize">
                    {{ $recette['titre'] }}
                </h3>
                <p className="text-clr-fonce-600 text-sm mt-2">
                    {{ $recette['description'] }}
                </p>
            </div>
        </article>
    @endforeach
@endsection
