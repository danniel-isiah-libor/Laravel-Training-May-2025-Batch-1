<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register Account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('register.store') }}" method="POST">
                @csrf
                <x-forms.field type="text" label="Name" name="name" placeholder="Name" id="name" />
                <x-forms.field type="email" label="Email" name="email" placeholder="Email" id="email" />
                <x-forms.field type="password" label="Password" name="password" placeholder="Password" id="password" />
                <x-forms.field type="password" label="Confirm Password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" />
                <x-forms.submit type="submit" value="Register" id="register-action" />
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
                Back to Login Page
                <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Click here</a>
            </p>
        </div>
    </div>
</x-layout>
