@props([
    'label' => '', 
    'type' => 'text',
    'name' => '',
    'placeholder' => ''
])

<label for="name">{{ $label }}</label>
<input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}">