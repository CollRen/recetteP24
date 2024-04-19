  <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img class="h-8 w-auto" src="{{ Vite::asset('resources/img/pexels-eva-bronzini.jpeg') }}" alt="">
          </a>
      </div>
      <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Open main menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
          </button>
      </div>



      <div class="hidden lg:flex lg:gap-x-12">
          <a href="/"
              class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('accueil') ? 'text-red-900' : 'text-gray-900' }}">@lang('Home')</a>
          <a href="/forfait"
              class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('forfait') ? 'text-red-900' : 'text-gray-900' }}">@lang('Pricing')</a>
          <a href="/contact"
              class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('contact') ? 'text-red-900' : 'text-gray-900' }}">Contact</a>
          <a href="#"
              class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('apropos') ? 'text-red-900' : 'text-gray-900' }}">@lang('About')</a>
          <a href="#"
              class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('histoire') ? 'text-red-900' : 'text-gray-900' }}">@lang('Our Story')</a>
          <ul class="dropdown-menu">
              <li><a class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('voir') ? 'text-red-900' : 'text-gray-900' }}" href="{{ route('user.create') }}">@lang('New User')</a></li>
              <li><a class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('voir') ? 'text-red-900' : 'text-gray-900' }}" href="{{ route('user.index') }}">@lang('Users')</a></li>
          </ul>
          <ul class="dropdown-menu">
              <li><a class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('voir') ? 'text-red-900' : 'text-gray-900' }}" href="{{ route('lang', 'en') }}">@lang('English')</a></li>
              <li><a class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('voir') ? 'text-red-900' : 'text-gray-900' }}" href="{{ route('lang', 'fr') }}">@lang('French')</a></li>
          </ul>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a href="#"
              class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('login') ? 'text-red-900' : 'text-gray-900' }}">Connexion
              <span aria-hidden="true">&rarr;</span></a>
      </div>
  </nav>
