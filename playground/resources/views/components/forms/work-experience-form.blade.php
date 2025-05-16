@props([
    'action' => '',
    'isEdit' => false,
    'value' => null,
])

<form action="{{ $action }}" method="POST">
    @csrf

    @if($isEdit)
        @method('PUT')
    @endif

    <x-forms.field label="Company Name" name="company_name" value="{{ optional($value)->company_name }}"/>

    <br>

    <x-forms.field label="Start Date" name="start_date" type="date" value="{{ optional($value)->start_date }}"/>

    <br>

    <x-forms.field label="End Date" name="end_date" type="date" value="{{ optional($value)->end_date }}"/>

    <br>

    <x-forms.field label="Position" name="position" value="{{ optional($value)->position }}"/>

    <br>

    <x-forms.button label="Save"/>

</form>
