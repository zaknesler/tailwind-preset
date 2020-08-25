<li>
    @if ($attributes->get('action'))
        <form action="{{ $action }}" method="{{ $method ?? 'POST' }}" id="{{ $id }}" class="hidden">
            @csrf
            @method($method ?? 'POST')
        </form>
    @endif

    <a
        @if ($attributes->get('action'))
            onclick="document.getElementById('{{ $id }}').submit()"
        @endif
        href="{{ $attributes->get('route') ? route($route) : ($href ?? '#') }}"
        class="{{ $attributes->get('class') }} {{ request()->routeIs($attributes->get('route')) ? 'bg-gray-900' : '' }} px-6 py-3 sm:px-3 sm:py-2 sm:ml-1 sm:rounded-lg flex sm:inline-flex items-center font-medium text-gray-300 hover:text-white hover:bg-black no-underline cursor-pointer"
    >{{ $text ?? $slot }}</a>
</li>
