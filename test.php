<body class="flex flex-col h-full">
    @php $locale = session()->get('locale'); @endphp
    <header>
        <nav class="relative flex flex-wrap items-center content-between py-3 px-4  text-white bg-gray-900" aria-label="Third navbar example">
            <div class="container mx-auto sm:px-4 max-w-full mx-auto sm:px-4">
                <a class="inline-block pt-1 pb-1 mr-4 text-lg whitespace-no-wrap" href="/">{{ config('app.name') }}</a>
                <button class="py-1 px-2 text-md leading-normal bg-transparent border border-transparent rounded" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="px-5 py-1 border border-gray-600 rounded"></span>
                </button>
                
                <div class="hidden flex-grow items-center" id="navbarsExample03">
                    <ul class="flex flex-wrap list-reset pl-0 mb-0 me-auto mb-2 sm:mb-0">
                     
                        <li class="">
                            <a class="inline-block py-2 px-4 no-underline active" aria-current="page" href="{{ route('task.index') }}">@lang('Tasks')</a>
                        </li>
                        <li class=" relative">
                            <a class="inline-block py-2 px-4 no-underline  inline-block w-0 h-0 ml-1 align border-b-0 border-t-1 border-r-1 border-l-1" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">@lang('Users')</a>
                            <ul class=" absolute left-0 z-50 float-left hidden list-reset	 py-2 mt-1 text-base bg-white border border-gray-300 rounded">
                                <li><a class="block w-full py-1 px-6 font-normal text-gray-900 whitespace-no-wrap border-0" href="{{ route('user.create') }}">@lang('New User')</a></li>
                                <li><a class="block w-full py-1 px-6 font-normal text-gray-900 whitespace-no-wrap border-0" href="{{route('user.index')}}">@lang('Users')</a></li>
                            </ul>
                        </li>
                        <li class=" relative">
                            <a class="inline-block py-2 px-4 no-underline  inline-block w-0 h-0 ml-1 align border-b-0 border-t-1 border-r-1 border-l-1" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">@lang('Tasks')</a>
                            <ul class=" absolute left-0 z-50 float-left hidden list-reset	 py-2 mt-1 text-base bg-white border border-gray-300 rounded">
                                <li><a class="block w-full py-1 px-6 font-normal text-gray-900 whitespace-no-wrap border-0" href="{{ route('task.create') }}">@lang('New Task')</a></li>
                                <li><a class="block w-full py-1 px-6 font-normal text-gray-900 whitespace-no-wrap border-0" href="{{route('task.completed', 1)}}">@lang('Completed')</a></li>
                                <li><a class="block w-full py-1 px-6 font-normal text-gray-900 whitespace-no-wrap border-0" href="{{route('task.completed', 0)}}">@lang('Unfinished')</a></li>
                            </ul>
                        </li>
                        @endauth
                    </ul>
                    
                    <ul class="flex flex-wrap list-reset pl-0 mb-0  mb-2 sm:mb-0">
                        <li class=" relative">
                            <a class="inline-block py-2 px-4 no-underline  inline-block w-0 h-0 ml-1 align border-b-0 border-t-1 border-r-1 border-l-1" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">@lang('Language') {{ $locale == '' ? '' : "($locale)" }}</a>
                            <ul class=" absolute left-0 z-50 float-left hidden list-reset	 py-2 mt-1 text-base bg-white border border-gray-300 rounded">
                                <li><a class="block w-full py-1 px-6 font-normal text-gray-900 whitespace-no-wrap border-0" href="{{ route('lang', 'en') }}">@lang('English')</a></li>
                                <li><a class="block w-full py-1 px-6 font-normal text-gray-900 whitespace-no-wrap border-0" href="{{ route('lang', 'fr') }}">@lang('French')</a></li>
                            </ul>
                        </li>
                        <li class="">
                            @guest
                            <a class="inline-block py-2 px-4 no-underline" href="{{ route('login') }}">@lang('Login')</a>
                            @else
                            <a class="inline-block py-2 px-4 no-underline" href="{{ route('logout') }}">@lang('Logout')</a>
                            @endguest
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mx-auto sm:px-4 my-5">
        @auth
            <p>@lang('lang.text_welcome'), {{ Auth::user()->name }}</p>
        @else
            <p>@lang('lang.text_login_msg')</p>
        @endauth
        @if(session('success'))
            <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800">
                {{session('success')}}
            </div>
        @endif
        @yield('content')
    </div>
    <footer class="footer mt-auto py-3 bg-gray-900 text-white">
        <div class="container mx-auto sm:px-4 text-center">
            &copy; {{ date('Y') }} {{ config('app.name') }}. @lang('lang.text_copryright')
        </div>
    </footer>
</body>
