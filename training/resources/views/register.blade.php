<x-layout>
    <x-slot:header>
        <h1>Registration Page</h1>
    </x-slot>

    <form autocomplete="off">
        <x-forms.input-fields label="Name" name="email" type="text" placeholder="Name" />

        <br>
        <br>

        <x-forms.input-fields label="Email" name="email" type="email" placeholder="Email" />

        <br>
        <br>

        <x-forms.input-fields label="Password" name="password" type="password" placeholder="Password" />

        <br>
        <br>
        <button type="submit">Register</button>
    </form>
</x-layout>