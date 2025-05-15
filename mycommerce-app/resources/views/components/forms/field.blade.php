@props([
    'label' => '',
    'type' => 'text',
    'name' => '',
    'style' => '',
    'value' => '',
])

<label :for="$name" style="{{ $style }};" class="block text-sm/6 font-medium text-gray-900">
    {{ $label }}
</label>

<div class="mt-2">
    <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $label }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">

    @error($name)
        <p style="color: red">{{ $message }}</p>
    @enderror
</div>