<x-layout>
    <x-slot:header>
        <x-layout.header/>
    </x-slot:header>
    
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-md">
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Sign up</h2>
                <p class="mt-2 text-sm text-gray-600">
                    Already have an account?
                    <a href="/login" class="font-medium text-blue-600 hover:text-blue-500">Sign in</a>
                </p>
            </div>
            
            <form class="mt-8 space-y-6" action="{{ route('register.store') }}" method="POST">
                    @csrf
                <x-forms.input 
                    name="first_name" 
                    type="text" 
                    id="firstname" 
                    label="First Name" 
                    placeholder="Your first name" 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                />

                <x-forms.input 
                    name="last_name" 
                    type="text" 
                    id="lastname" 
                    label="Last Name" 
                    placeholder="Your last name" 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                />

                <x-forms.input 
                    name="email" 
                    type="email" 
                    id="email" 
                    label="Email Address" 
                    placeholder="your@email.com" 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                />

                <x-forms.input 
                    name="username" 
                    type="text" 
                    id="username" 
                    label="Username" 
                    placeholder="Choose a username" 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                />

                <x-forms.input 
                    name="password" 
                    type="password" 
                    id="password" 
                    label="Password" 
                    placeholder="Create a password" 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                />

                <x-forms.input 
                    name="password_confirmation" 
                    type="password" 
                    id="password_confirmation" 
                    label="Confirm Password" 
                    placeholder="Confirm password" 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                />
                <div>
                    <button
                        type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    >
                        Create Account
                    </button>
                </div>
            </form>
        </div>
    </div>
    <x-slot:footer>
        <x-layout.footer/>
    </x-slot:footer>
</x-layout>