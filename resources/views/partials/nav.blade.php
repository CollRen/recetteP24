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
              class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('/') ? 'text-red-900' : 'text-gray-900' }}">@lang('Home')</a>
          <a href="/forfait"
              class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('forfait') ? 'text-red-900' : 'text-gray-900' }}">@lang('Pricing')</a>
          <a href="/contact"
              class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('contact') ? 'text-red-900' : 'text-gray-900' }}">Contact</a>
          <a href="/about"
              class="text-sm font-semibold leading-6  hover:text-red-900 {{ request()->is('about') ? 'text-red-900' : 'text-gray-900' }}">@lang('About')</a>
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
      <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown hover <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>

<!-- Dropdown menu -->
<div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
      </li>
    </ul>
</div>
  </nav>
