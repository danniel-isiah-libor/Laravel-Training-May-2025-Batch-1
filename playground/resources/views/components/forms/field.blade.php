@props([
    'label' => '',
    'type' => 'text',
    'name' => '',
    'style' => '',
    'value' => '',
])

<label :for="$name" style="{{ $style }}; font-weight: bold;">
    {{ $label }}
</label>
<input :type="$type" :name="$name" placeholder="{{ $label }}">
