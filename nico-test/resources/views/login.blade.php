<x-layout>
    <x-slot:header>
        <x-layout.header/>
    </x-slot:header>
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-md">
          <div class="text-center">
            <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Sign in to your account</h2>
          </div>
          <form class="mt-8 space-y-6" action="#" method="POST">
            <div class="rounded-md shadow-sm space-y-4">
              <div>
                <x-forms.input
                  id="email"
                  name="email"
                  type="email"
                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                  placeholder="you@example.com"
                ></x-forms.input>
              </div>
              <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <x-forms.input
                  id="password"
                  name="password"
                  type="password"
                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                  placeholder="••••••••"
                ></x-forms.input>
              </div>
            </div>
            <div>
              <button
                type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
              >
                Sign in
              </button>
            </div>
          </form>
            <div class="mt-6">
                <p class="text-center text-sm text-gray-600">
                Don't have an account?
                <a href="{{route('register')}}" class="font-medium text-blue-600 hover:text-blue-500">Sign up</a>
                </p>
            </div>
        </div>
      </div>
    <x-slot:footer>
        <x-layout.footer/>
    </x-slot:footer>
</x-layout>