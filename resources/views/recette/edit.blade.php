@extends('partials.base')
@section('title', 'Edit Recette')
@section('content')

    <h1>Edit Recette</h1>
    <div>
        <div>
            <div>
                <div>
                    <h5>EditRecette</h5>
                </div>
                <div>
                    <form action="{{ route('recette.update',['recette' => $recette]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="title">Title</label>
                            <input type="text" id="titre" name="titre" value="{{ old('titre', $recette->titre) }}">
                            @if ($errors->has('titre'))
                                <div>
                                    {{ $errors->first('titre') }}
                                </div>
                            @endif
                        </div>
                        <div>
                            <label for="description">Description</label>
                            <textarea id="description" name="description" rows="3">{{ old('description', $recette->description) }}</textarea>
                            @if ($errors->has('description'))
                                <div>
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="temps_preparation" class="form-label">Temps de préparaion</label>
                            <input type="number"
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                                id="temps_preparation" name="temps_preparation"
                                value="{{ old('temps_preparation', $recette->temps_preparation) }}">
                        </div>

                        <div class="mb-3">
                            <label for="temps_cuisson" class="form-label">Temps de cuisson</label>
                            <input type="number"
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                                id="temps_cuisson" name="temps_cuisson"
                                value="{{ old('temps_cuisson', $recette->temps_cuisson) }}">
                        </div>



                        <label for="category_id">Recette category</label>
                        <select name="category_id" id="category_id">
                            <option value="">Select a Recette category</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category['id'] }}" @selected($category['id'] == old('category_id', $recette->category_id))>
                                    {{ $category['category'][$locale] }}



                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('category_id'))
                            <div>
                                {{ $errors->first('category_id') }}
                            </div>
                        @endif
                </div>
                <button type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
