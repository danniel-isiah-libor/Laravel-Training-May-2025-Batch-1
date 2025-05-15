@props(['label'=>'', 'name'=>'', 'type' => 'text'])
<label :for="$name">{{ $label }}</label>

<input :type="$type" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" :name="$name" placeholder="{{ $label }}" required>
@error($name)
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


