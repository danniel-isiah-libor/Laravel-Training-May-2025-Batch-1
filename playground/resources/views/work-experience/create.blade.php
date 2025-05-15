<x-layout>
    <form action="{{ route('work-experience.store') }}" method="POST">
        @csrf

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
