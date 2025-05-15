<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('login.store') }}" method="POST">
            @csrf

            <div>
                <x-forms.field label="Email" type="email" name="email"/>
            </div>

            <div>
                <x-forms.field label="Password" type="password" name="password"/>
            </div>

            <div>
                <x-forms.button label="Login"/>
            </div>
        </form>

        <p class="mt-10 text-center text-sm/6 text-gray-500">
        Not a member?
        <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Register here!</a>
        </p>
    </div>
    </div>
</x-layout>
