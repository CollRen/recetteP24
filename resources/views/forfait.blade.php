@extends('partials.base')

@section('titre', 'Pricing')

@section('content')

<body>
<div class="mt-24">
  
  <main class="max-w-6xl mx-auto pt-10 pb-36 px-8">
  
    <div class="max-w-md mx-auto mb-14 text-center">
      <h1 class="text-4xl font-semibold mb-6 lg:text-5xl"><span class="text-indigo-600">Plans</span>Flexibles </h1>
      <p class="text-xl text-gray-500 font-medium">Choisissez votre plan.</p>
    </div>
  
    <div class="flex flex-col justify-between items-center lg:flex-row lg:items-start">
  
      <div class="w-full flex-1 mt-8 p-8 order-2 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-1 lg:rounded-r-none">
        <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
          <img src="https://res.cloudinary.com/williamsondesign/abstract-1.jpg"  alt="" class="rounded-3xl w-20 h-20" />
          <div class="ml-5">
            <span class="block text-2xl font-semibold">Base</span>
            <span><span class="font-medium text-gray-500 text-xl align-top">$&thinsp;</span><span class="text-3xl font-bold">10 </span></span><span class="text-gray-500 font-medium">/ utilisateur</span>
          </div>
        </div>
        <ul class="mb-7 font-medium text-gray-500">
          <li class="flex text-lg mb-2">
            <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
            <span class="ml-3">Débutant en création de <span class="text-black">recette</span></span>
          </li>
          <li class="flex text-lg mb-2">
            <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
            <span class="ml-3">Création <span class="text-black">Flexible</span></span>
          </li>
          <li class="flex text-lg">
            <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
            <span class="ml-3"><span class="text-black">5 TB</span> données en nuage</span>
          </li>
        </ul>
        <a href="#/" class="flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl">
          Choisir
          <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
        </a>
      </div>
  
      <div class="w-full flex-1 p-8 order-1 shadow-xl rounded-3xl bg-gray-900 text-gray-400 sm:w-96 lg:w-full lg:order-2 lg:mt-0">
        <div class="mb-8 pb-8 flex items-center border-b border-gray-600">
          <img src="https://res.cloudinary.com/williamsondesign/abstract-2.jpg"  alt="" class="rounded-3xl w-20 h-20" />
          <div class="ml-5">
            <span class="block text-3xl font-semibold text-white">Base plus</span>
            <span><span class="font-medium text-xl align-top">$&thinsp;</span><span class="text-3xl font-bold text-white">24 </span></span><span class="font-medium">/ utilisateur</span>
          </div>
        </div>
        <ul class="mb-10 font-medium text-xl">
          <li class="flex mb-6">
            <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
            <span class="ml-3">Tout du fortait <span class="text-white">Base</span></span>
          </li>
          <li class="flex mb-6">
            <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
            <span class="ml-3">accès aux ingrédients <span class="text-white">Flexible</span></span>
          </li>
          <li class="flex">
            <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
            <span class="ml-3"><span class="text-white">15 TB</span> données en nuage</span>
          </li>
        </ul>
        <a href="#/" class="flex justify-center items-center bg-indigo-600 rounded-xl py-6 px-4 text-center text-white text-2xl">
          Choisir
          <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
        </a>
      </div>
  
      <div class="w-full flex-1 mt-8 p-8 order-3 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-3 lg:rounded-l-none">
        <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
          <img src="https://res.cloudinary.com/williamsondesign/abstract-3.jpg"  alt="" class="rounded-3xl w-20 h-20" />
          <div class="ml-5">
            <span class="block text-2xl font-semibold">Base ++</span>
            <span><span class="font-medium text-gray-500 text-xl align-top">$&thinsp;</span><span class="text-3xl font-bold">35 </span></span><span class="text-gray-500 font-medium">/ utilisateur</span>
          </div>
        </div>
        <ul class="mb-7 font-medium text-gray-500">
          <li class="flex text-lg mb-2">
            <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
            <span class="ml-3">Tout du forfait <span class="text-black">Base +</span></span>
          </li>
          <li class="flex text-lg mb-2">
            <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
            <span class="ml-3">Créateur <span class="text-black">EXTRA</span></span>
          </li>
          <li class="flex text-lg">
            <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
            <span class="ml-3"><span class="text-black">Données en nuage</span> Sans limite</span>
          </li>
        </ul>
        <a href="#/" class="flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl">
          Choisir
          <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
        </a>
      </div>
  
    </div>
  
</div>
</main>
</body>
@endsection
</html>

