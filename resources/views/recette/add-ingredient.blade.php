@extends('partials.base')
@section('title', 'Recette create')
@section('content')

{{-- @dd($recette) --}}
{{-- @dd($categories[0]['category'][$locale]) --}}
<x-progress-bar :type="'ingredient'">Progression de la création de votre recette</x-progress-bar>
  <div class="mt-8">
            <h2 class="text-xl font-semibold">{{ $recette['titre'] }}</h2>
            <ul class="mt-4 flex justify-between">
                <li>Temps de préparation: {{ $recette['temps_preparation'] }} minutes</li>
                <li>Temps de cuisson: {{ $recette['temps_cuisson'] }} minutes</li>
                {{-- <li>Par {{ $auteur }}</li> --}}
            </ul>
        </div>
    <h1 class="mt-5 mb-4">Ajoutez vos ingrédients</h1>
    <div class="flex flex-wrap  justify-center mt-5 mb-5">
        <div class="md:w-1/3 pr-4 pl-4">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                    <h5 class="mb-3">Général</h5>
                </div>
                <div class="flex-auto p-6">
                    <form action="{{ route('recette.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="titre" class="form-label">Titre</label>
                            <input type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="titre" name="titre" value="{{old('titre')}}">
                        </div>

  





                                
                            </div>
                       
                        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
