@props([
    'type'=>'text',
    'name'=>'',
    'label'=>'',
    'placeholder'=>''
])
<label for="{{$name}}">
    {{ $label }}
</label>
<input type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder}}" /> <br>
