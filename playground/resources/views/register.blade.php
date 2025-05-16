<x-layout>
    <x-slot:header>
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register to your account</h2>
        </div>
    </x-slot:header>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('register.store') }}" method="POST">
            @csrf

            <div>
                <x-forms.field label="Name" name="name"/>
            </div>

            <div>
                <x-forms.field label="Email" type="text" name="email"/>
            </div>

            <div>
                <x-forms.field label="Password" type="text" name="password"/>
            </div>

            <div>
                <x-forms.field label="Password Confirmation" type="text" name="password_confirmation"/>
            </div>

            <div>
                <x-forms.button label="Register"/>
            </div>
        </form>

        <p class="mt-10 text-center text-sm/6 text-gray-500">
        Already a member?
        <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Login here!</a>
        </p>
    </div>
    </div>

    <?php
        $content = "<h1>hello world</h1>";
    ?>

    {!! $content !!}
</x-layout>
