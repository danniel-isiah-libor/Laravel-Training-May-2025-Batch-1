<x-layout>
    <x-slot:header>
        <h1>LOGIN PAGE</h1>
    </x-slot:header>
    <x-register email="k6V6D@example.com"/>
<form>
    <x-form.field label="Name" name="name"/>
    <br>
    <x-form.field label="Email" name="email" type="email"/>
    <br>
    <x-form.field label="Password" name="password" type="password"/>
    <br>
    <x-form.field label="Confirm Password" name="password_confirmation" type="password_confirmation"/>
    <br>
</form>
</x-layout>
