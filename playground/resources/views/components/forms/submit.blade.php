@props([
    'type' => 'submit',
    'color' => 'indigo',
    'id' => '',
    'value' => 'Submit'
])
<div class="flex items-end">
    <button type="{{ $type }}" id="{{ $id }}" class="flex w-full justify-center rounded-md bg-{{$color}}-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-{{$color}}-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-{{$color}}-600">{{ $value }}</button>
</div>
