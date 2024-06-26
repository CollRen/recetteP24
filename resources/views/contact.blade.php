@extends('partials.base')

@section('titre', trans('Contact'))

@section('content')

<body>
<div class="mt-24">

<section class="bg-clr-sec2 bg-opacity-5" id="contact">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
        <div class="mb-4">
            <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
                <p class="text-base font-semibold uppercase tracking-wide text-clr-sec2 dark:text-blue-900">
                    Contact
                </p>
                <h2
                    class="font-heading mb-4 font-bold tracking-tight text-gray-900 text-3xl sm:text-5xl">
                    @lang('Stay connected')
                </h2>
                <p class="mx-auto mt-4 max-w-3xl text-xl text-clr-pri1 dark:text-slate-400">Dans les cas où l'informations n'est pas disponible en virtuel
            </div>
        </div>
        <div class="flex items-stretch justify-center">
            <div class="grid md:grid-cols-2">
                <div class="h-full pr-6">
                    <p class="mt-3 mb-12 text-lg text-clr-pri1 dark:text-slate-400">
                        Là où vous nous attendez le moins, nous ne nous y immiscerons pas... c'est la moindre des choses&nbsp;!
                    </p>
                    <ul class="mb-6 md:mb-0">

                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-clr-pri1 text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6">
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                    </path>
                                    <path d="M15 7a2 2 0 0 1 2 2"></path>
                                    <path d="M15 3a6 6 0 0 1 6 6"></path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">

                                <p class="text-clr-pri1 dark:text-slate-400">+1 (514) 456-7890{{-- <x-badge :type="'success'" :message="'Attention'">Badge</x-badge> --}}</p>
                                <p class="text-clr-pri1 dark:text-slate-400">trraiv@gmail.com</p>
                            </div>
                        </li>
                        
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-clr-pri1 text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                    <path d="M12 7v5l3 3"></path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">

                                <p class="text-clr-pri1 dark:text-slate-400">Lundi - Vendredi: 08:00 - 17:00</p>
                                <p class="text-clr-pri1 dark:text-slate-400">Samedi &amp; Dimanche: 08:00 - 12:00</p>
                            </div>
                        </li>

                                                <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-clr-pri1 text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path
                                        d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">

                                <p class="text-clr-pri1 dark:text-slate-400">1230 Rue du Siècle</p>
                                <p class="text-clr-pri1 dark:text-slate-400">Montréal, QC</p>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="card h-fit max-w-6xl p-5 md:p-12" id="form">
                    <h2 class="mb-4 text-2xl font-bold text-clr-pri1">Vous êtes prêts&nbsp;?</h2>
                    <form id="contactForm">
                        <div class="mb-6">
                            <div class="mx-0 mb-1 sm:mb-4">
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="name" class="pb-1 text-xs uppercase tracking-wider"></label><input type="text" id="name" autocomplete="given-name" placeholder="Nom complet" class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-clr-pale1 sm:mb-0" name="name">
                                </div>
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="email" class="pb-1 text-xs uppercase tracking-wider"></label><input type="email" id="email" autocomplete="email" placeholder="Adresse courriel" class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-clr-pale1 sm:mb-0" name="email">
                                </div>
                            </div>
                            <div class="mx-0 mb-1 sm:mb-4">
                                <label for="textarea" class="pb-1 text-xs uppercase tracking-wider"></label><textarea id="textarea" name="textarea" cols="30" rows="5" placeholder="Taper votre message..." class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-clr-pale1 sm:mb-0"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="w-full bg-clr-pri1 text-white px-6 py-3 font-xl rounded-md sm:mb-0">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


</div>
</main>
</body>
@endsection
</html>