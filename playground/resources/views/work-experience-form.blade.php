@props{
    'action'=> '',
    'isEdit'=> false,
    'value' => null,
=>}


<x-layout>
    <form action="{{ route('work-experience.store') }}" method="POST">
        @csrf

        @if($isEdit)
                @method('PUT')
        @endif
        <x-slot name="header">
        <h1 class="text-2xl font-bold text-gray-800">Work Experience</h1>
    </x-slot>
        <x-forms.field label="Company Name" name="company_name"/>

        <br>

        <x-forms.field label="Start Date" name="start_date" type="date"/>

        <br>

        <x-forms.field label="End Date" name="end_date" type="date"/>

        <br>

        <x-forms.field label="Position" name="position"/>

        <br>

        <x-forms.button label="Save"/>

    </form>
</x-layout>
