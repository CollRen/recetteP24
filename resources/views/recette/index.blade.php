@extends('partials.base')
@section('title', 'Index des recettes')

@section('content')
{{-- @dd($locale) --}}
    <div class="flex">

        <aside class="flex-0 px-4">
            <x-filter :categories="$categories" :locale="$locale"></x-filter>
        {{ $recettes->links() }}
        </aside>
        {{-- @dd($recettes) --}}
        <main class="flex-1">
            <div
                class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-4 mt-10 mb-5 px-8">
                @foreach ($recettes as $recette)

                    <div class="">
                        <a href="/recette/{{ $recette['id'] }}">
                            <article
                                class="w-full h-full bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                                @if ($recette->image)
                                    <img class="h-80 w-full object-cover rounded-t-xl" src="/storage/{{ $recette['image'] }}"
                                        alt="Image pour {{ $recette['titre'] }}" />
                                @else
                                    <img class="h-80 w-full object-cover rounded-t-xl" src="/assets/img/banniere.jpeg"
                                        alt="Image pour {{ $recette['titre'] }}" />
                                @endif
                                <div class="px-4 py-3 w-full">
                                    <span class="text-gray-400 mr-3 uppercase text-xs">
                                        Préparation {{ $recette['temps_preparation'] }} minutes, Cuisson:
                                        {{ $recette['temps_cuisson'] }}
                                        minutes
                                    </span>
                                    <span class="text-gray-400 mr-3 uppercase text-xs">
                                        @lang('Category'): {{$recette->category->category[$locale]}}
                                    </span>
                                    <h3 class="text-lg font-bold text-black truncate block capitalize">
                                        {{ $recette['titre'] }}
                                    </h3>
                                    <p class="text-clr-fonce-600 text-sm mt-2">
                                        {{ $recette['description'] }}
                                    </p>
                                </div>
                            </article>
                        </a>
                        <form action="{{ route('recette.destroy', $recette) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </div>
                @endforeach



            </div>
        </main>
    </div>
@endsection
