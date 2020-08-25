<form action="{{ $action }}" method="{{ $method ?? 'POST' }}" class="inline">
    @csrf
    @method($method ?? 'POST')

    <button type="submit" {{ $attributes->merge(['class' => 'appearance-none']) }}>
        {{ $slot }}
    </button>
</form>
