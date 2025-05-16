<x-layout>
    <x-slot:header>
        <div class="mt-10 flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register</h2>
            </div>
        </div>
    </x-slot:header>
    <div class="flex min-h-full flex-col justify-center px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('register.store') }}" method="POST">
                @csrf

                <div>
                    <x-forms.input-fields label="Name" name="name" type="text" value="{{ old('name') }}" />
                </div>

                <div>
                    <x-forms.input-fields label="Email address" name="email" type="email" value="{{ old('email') }}" />
                    @error('email')
                        <p style="color: rgb(143, 2, 2)">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <x-forms.input-fields label="Password" name="password" type="text" />
                    @error('password')
                        <p style="color: rgb(143, 2, 2)">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <x-forms.input-fields label="Confirm Password" name="password_confirmation" type="text" />
                </div>

                <div>
                    <x-forms.buttons class="buttons" label="Register" />
                </div>

                <p class="mt-10 text-center text-sm/6 text-gray-500">
                    Already a member?
                    <a  href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign in</a>
                </p>
            </form>
        </div>
    </div>
</x-layout>