<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Work Experience</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{route('employee.store')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <x-forms.fields label="Company name" name="company_name" placeholder="Company name"/>
                </div>

                <div class="mb-3">
                    <x-forms.fields label="Start date" type="date" name="start_date" placeholder="Start date"/>
                </div>

                <div class="mb-3">
                    <x-forms.fields label="End date" type="date" name="end_date" placeholder="End date"/>
                </div>

                <div class="mb-5">
                    <x-forms.fields label="Position" name="position" placeholder="Position"/>
                </div>

                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
            </form>
        </div>
    </div>
</x-layout>
