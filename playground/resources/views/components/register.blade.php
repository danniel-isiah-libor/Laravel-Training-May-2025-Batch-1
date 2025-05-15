<x-layout>
    <x-slot name="header">
        <h1>REGISTER PAGE</h1>
    </x-slot>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/5/52/Deus_Coffee.png" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign up</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('register.store') }}" method="POST">
                @csrf

                <div>
                    <x-form.field label="Name" name="name"  />
                </div>

                <div>
                    <x-form.field label="Email" name="email" type="email" />
                </div>

                <div>
                    <x-form.field label="Password" name="password" type="password" />
                </div>

                <div>
                    <x-form.field label="Confirm Password" name="password_confirmation" type="password" />
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Sign up
                    </button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Login</a>
            </p>
        </div>
    </div>
</x-layout>
