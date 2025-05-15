<x-layout>
    
    <form>
        <x-forms.field type="text" label="Name" name="name" placeholder="Name" />
        <x-forms.field type="email" label="Email" name="email" placeholder="Email" />
        <x-forms.field type="password" label="Password" name="email" placeholder="Email" />
        <x-forms.field type="password" label="Confirm Password" name="password_confirmation" placeholder="Confirm Password" />
        <button type="submit">Register</button>
    </form>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Register Page
        </h2>
    </x-slot>

</x-layout>
