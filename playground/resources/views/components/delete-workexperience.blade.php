<x-layout>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Delete Work Experience</h2>
  </div>
  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="{{ route('workexperience.destroy', $result->id) }}" method="POST">
    @csrf
    @method('DELETE')
        <div class="mt-2">
            <label for="company_name" class="block text-sm/6 font-medium text-gray-900">Company Name</label>
            <div class="mt-2">
                <p class="text-sm text-gray-600">
                    {{ $result->company_name }}
                </p>
            </div>
        </div>
        <div class="mt-2">
            <label for="location" class="block text-sm/6 font-medium text-gray-900">Address</label>
            <div class="mt-2">
                <p class="text-sm text-gray-600">
                    {{ $result->location }}
                </p>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 mt-2">
            <div>
                <label for="start_date" class="block text-sm font-medium text-gray-900">Start Date</label>
                <div class="mt-2">
                    <p class="text-sm text-gray-600">
                        {{ $result->start_date }}
                    </p>
                </div>
            </div>
            <div>
                <label for="end_date" class="block text-sm font-medium text-gray-900">End Date</label>
                <div class="mt-2">
                    <p class="text-sm text-gray-600">
                        {{ $result->end_date }}
                    </p>
                </div>
            </div>
            <div>
                <label for="tenure" class="block text-sm font-medium text-gray-900">Tenire</label>
                <div class="mt-2">
                    <p class="text-sm text-gray-600">
                        {{ $result->tenure }}
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-2 mb-5">
            <label for="role" class="block text-sm/6 font-medium text-gray-900">Position</label>
            <div class="mt-2">
                <p class="text-sm text-gray-600">
                    {{ $result->role }}
                </p>
            </div>
        </div>
        <p>Are you sure you want to delete this work experience?</p>
      <x-forms.submit type="submit" value="Submit" id="submit-action" />
    </form>
  </div>
</div>
</x-layout>