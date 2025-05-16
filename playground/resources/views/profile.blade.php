<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">User Profile</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('profile.store') }}" method="POST">
            @csrf
        <div>
            <x-forms.field label="Company" name="company_name" />
        </div>

        <div>
            <x-forms.field label="Start Date" name="start_date" type="date"/>
        </div>

        <div>
            <x-forms.field label="End Date" name="end_date" type="date"/>
        </div>
        
        <div>
            <x-forms.field label="Role" name="role"/>
        </div>

        <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
        </form>
        </p>
    </div>
    </div>
</x-layout>
