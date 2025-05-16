<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign up for account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{route('register.store')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <x-forms.fields label="Name" name="name" placeholder="Name"/>
                </div>
                @error('name')
                    {{ $message }}
                @enderror

                <div class="mb-3">
                    <x-forms.fields label="Email" name="email" placeholder="Email"/>
                </div>
                @error('email')
                    {{ $message }}
                @enderror

                <div class="mb-3">
                    <x-forms.fields label="Password" name="password" type="password" placeholder="Password"/>
                </div>
                @error('password')
                    {{ $message }}
                @enderror

                <div class="mb-5">
                    <x-forms.fields label="Confirm Password" type="password" name="password_confirmation" placeholder="Confirm Password"/>
                </div>

                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>

                <p class="mt-10 text-center text-sm/6 text-gray-500">
                    <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Login</a>
                </p>
            </form>
        </div>
    </div>
</x-layout>
