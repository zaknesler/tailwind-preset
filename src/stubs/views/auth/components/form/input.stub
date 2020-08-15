<label class="block">
    <div class="mb-1 text-xs font-medium text-gray-700 {{ $errors->first($name, 'text-red-700') }}">
        {{ $label }}
    </div>

    <input
        {{ $attributes->exceptProps(['type', 'name', 'value']) }}
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ $attributes->get('value') ?? old($name) }}"
        {{ $attributes->merge(['class' => 'form-input px-4 py-3 block w-full ' . $errors->first($name, 'border-red-500')]) }}
    />

    @error ($name)
        <div class="px-3 py-2 mt-2 text-xs font-semibold border border-red-200 bg-red-100 text-red-700 rounded-lg">
            {{ $message }}
        </div>
    @enderror
</label>
