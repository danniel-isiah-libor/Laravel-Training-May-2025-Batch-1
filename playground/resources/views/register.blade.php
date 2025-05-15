<x-layout>
    {{-- <x-slot:header>
        <h1>HEADER</h1>
    </x-slot:header> --}}

    <h1>Register Page</h1>

    <form>
        <x-forms.field label="Name" name="name" style="color: green"/>

        <br>

        <x-forms.field label="Email" name="email" type="email"/>

        <br>

        <x-forms.field label="Password" name="password" type="password"/>

        <br>

        <x-forms.field label="Confirm Password" name="password_confirmation" type="password"/>

        <br>

        <button type="submit">Register</button>
    </form>
</x-layout>
