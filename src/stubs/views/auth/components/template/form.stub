<x-template.branded>
    @if ($attributes->get('subtext'))
        <div class="mx-auto text-center text-gray-600">
            {{ $subtext }}
        </div>
    @endif

    @if (session('status'))
        <div class="px-4 py-3 text-sm rounded-lg shadow-sm bg-gray-100 text-gray-700">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ $action }}" method="{{ $method ?? 'POST' }}">
        @csrf
        @method($method ?? 'POST')

        <div class="space-y-6">
            {{ $slot }}
        </div>
    </form>
</x-template.branded>
