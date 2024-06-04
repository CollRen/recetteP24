  {{-- @php $locale = session()->get('locale'); @endphp --}}
  <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
          <a href="/" class="-m-1.5 p-1.5">
              <span class="sr-only">{{ config('app.name') }}</span>
              <img class="h-8 w-auto" src="{{ Vite::asset('resources/img/pexels-eva-bronzini.jpeg') }}" alt="">
          </a>
      </div>

      <div class="hidden items-center lg:flex lg:gap-x-12">

          <x-menu-item>@lang('Home')</x-menu-item>
          <x-menu-item :link="'contact'">Contact</x-menu-item>
          <x-menu-item :link="'about'">@lang('About')</x-menu-item>
          <x-menu-item :link="'recette'">@lang('Recettes')</x-menu-item>
          <x-menu-item :link="'recette/create'">@lang('Créer une recette')</x-menu-item>


          {{--         <a href="#"
              class="text-sm font-semibold leading-6  clr-sec2 {{ request()->is('histoire') ? 'text-red-900 underline' : 'text-gray-900' }}">@lang('Our Story')</a> --}}




          <!-- Language-->

          @if (Config::get('app.locale') == 'en')
              <a href="{{ route('lang', 'fr') }}"
                  class="block px-4 py-2 hover:bg-clr-pale1 dark:hover:text-gray-900">FR</a>
          @else
              <a href="{{ route('lang', 'en') }}"
                  class="block px-4 py-2 hover:bg-clr-pale1 dark:hover:text-gray-900">EN</a>
          @endif


          <!-- Dropdown menu Language-->
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
              class="btn btn-primary text-gray-900 hover:bg-clr-pale1 focus:ring-3 focus:outline-none focus:ring-clr-sec2 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-clr-sec2 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              type="button">Admin<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 4 4 4-4" />
              </svg>
          </button>
          <div id="dropdown" class="hidden divide-clr-pale1 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">

                  <li>
                      <a href="/ingredient/create" class="block px-4 py-2 hover:bg-clr-pale1 dark:hover:text-gray-900">
                          @lang('Ingredient')</a>
                  </li>

                  <li>
                      <a href="{{ route('category.create') }}"
                          class="block px-4 py-2 hover:bg-clr-pale1 dark:hover:text-gray-900">@lang('Category')
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('user.create') }}"
                          class="block px-4 py-2 hover:bg-clr-pale1 dark:hover:text-gray-900">Inscription</a>
                  </li>

                  <li>
                      <a href="/users"
                          class="block px-4 py-2 hover:bg-clr-pale1 dark:hover:text-gray-900">@lang('Users')</a>
                  </li>

              </ul>
          </div>





      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          @guest
              <a href="{{ route('login') }}"
                  class="text-sm font-semibold leading-6  clr-sec2 {{ request()->is('login') ? 'text-red-900 underline' : 'text-gray-900' }}">@lang('Login')
                  <span aria-hidden="true">&rarr;</span></a>
          @else
              <a href="{{ route('logout') }}"
                  class="text-sm font-semibold leading-6 clr-sec2 text-gray-900">@lang('Logout')
                  <span aria-hidden="true">&rarr;</span></a>
          @endguest
      </div>


  </nav>
