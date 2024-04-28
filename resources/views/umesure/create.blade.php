@extends('partials.base')
@section('title', 'umesure')
@section('content')
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
    <h1 class="mt-5 mb-4">umesure</h1>
    <div class="flex flex-wrap  justify-center mt-5 mb-5">
        <div class="md:w-1/3 pr-4 pl-4">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                    <h5 class="mb-3">umesure</h5>
                </div>
                <div class="flex-auto p-6">
                    <form action="{{ route('umesure.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="umesure_en" class="form-label">umesure in English</label>
                            <input type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="umesure_en" name="umesure_en" value="{{old('umesure_en')}}">
                        </div>
                        <div class="mb-3">
                            <label for="umesure_fr" class="form-label">umesure in French</label>
                            <input type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="umesure_fr" name="umesure_fr" value="{{old('umesure_fr')}}">
                        </div>
                        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
