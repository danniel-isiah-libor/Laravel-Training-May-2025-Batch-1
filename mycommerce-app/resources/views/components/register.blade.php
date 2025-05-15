<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create an account</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="{{ route('register.store') }}" method="POST">
                @csrf
                <div>
                    <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                    <div class="mt-2">
                        <x-forms.field type="text" name="name" placeholder="Enter your name" />
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                    <x-forms.field type="email" name="email" placeholder="Enter your email" />
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                   
                    </div>
                    <div class="mt-2">
                    <x-forms.field type="password" name="password" placeholder="Enter your password" />
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                    <label for="password_confirmation" class="block text-sm/6 font-medium text-gray-900">Confirm Password</label>
                    </div>
                    <div class="mt-2">
                    <x-forms.field type="password" name="password_confirmation" placeholder="Enter your password confirmation" />
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>
                </form>

                <p class="mt-10 text-center text-sm/6 text-gray-500">
                Not a member?
                <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign</a>
                </p>
            </div>
            </div>

        </div>
    </div>
</div>
