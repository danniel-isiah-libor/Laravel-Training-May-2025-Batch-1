<x-layout>
    <x-slot:header>
        <h1>Login Page</h1>
    </x-slot>

    <form>
        <x-forms.input-fields label="Email" name="email" type="email" placeholder="email" />

        <br>
        <br>

        <x-forms.input-fields label="Password" name="password" type="password" placeholder="Password" />

        <br>
        <br>
        <button type="submit">Login</button>
    </form>
</x-layout>