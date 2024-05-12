@extends('partials.base')
@section('title', 'Recette create')
@section('content')

{{-- @dd($categories[0]['category'][$locale]) --}}
    @if(!$errors->isEmpty())
 <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800  opacity-0 opacity-100 block" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>     
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>                
    @endif
    <h1 class="mt-5 mb-4">Recette create</h1>
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

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="description" name="description" value="{{old('description')}}">
                        </div>

                        <div class="mb-3">
                            <label for="temps_preparation" class="form-label">Temps de préparaion</label>
                            <input type="number" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="temps_preparation" name="temps_preparation" value="{{old('temps_preparation')}}">
                        </div>

                        <div class="mb-3">
                            <label for="temps_cuisson" class="form-label">Temps de cuisson</label>
                            <input type="number" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="temps_cuisson" name="temps_cuisson" value="{{old('temps_cuisson')}}">
                        </div>



                                <label for="category_id">Recette category</label>
                                <select name="category_id" id="category_id">
                                    <option value="">Select a Recette category</option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}" @selected($category['id'] == old('category_id'))>{{ $category['category'][$locale] }}

                                        
                                       
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                    <div>
                                        {{ $errors->first('category_id') }}
                                    </div>
                                @endif
                            </div>
                       
                        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
