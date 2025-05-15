@props([
    'placeholder' => 'Hello World',
    'type' => 'text',
    'id' => '',
    'label' => '',
    'name' => '',
    'class' => '',
])

<label :for={{$name}}>
    {{$label}}
</label>
<input type="{{$type}}" id="{{$id}}" name="{{$name}}" placeholder="{{$placeholder}}"  class="{{$class}}"/>
@error('{{$name}}')
<div class="text-red-500 text-sm mt-1">{{ $message }}</div>
@enderror
