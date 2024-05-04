<div>

    <a href="/{{ $link }}"
        class="text-sm font-semibold leading-6  clr-sec2 {{ request()->is($link) ? 'text-red-900 underline' : 'text-gray-900' }}">{{ $slot }}</a>
</div>
