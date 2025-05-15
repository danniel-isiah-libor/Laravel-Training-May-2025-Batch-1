<x-layout>
    <x-slot:header>
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Profile Information</h2>
        </div>
    </x-slot:header>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-xl">
        <form action="route('profile.store')" method="POST">
            @csrf
            <div class="space-y-12">            
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Personal Information</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">                   
                        <div class="col-span-full">
                            <x-forms.field label="Company Name" name="compny_name" />
                        </div>
                        <div class="sm:col-span-4">
                            <label for="start_date" class="block text-sm/6 font-medium text-gray-900">Start Date</label>
                            <div class="mt-2">
                                <input type="date" id="start_date" name="start_date" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="select date" data-input>
                                <div data-flatpickr class="hidden" data-options='{
                                    "altInput": true,
                                    "altFormat": "F j, Y",
                                    "dateFormat": "Y-m-d",
                                    "minDate": "today"
                                }'></div>
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="end_date" class="block text-sm/6 font-medium text-gray-900">End Date</label>
                            <div class="mt-2">
                                <input type="date" id="end_date" name="end_date" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="select date" data-input>
                                <div data-flatpickr class="hidden" data-options='{
                                    "altInput": true,
                                    "altFormat": "F j, Y",
                                    "dateFormat": "Y-m-d",
                                    "minDate": "today"
                                }'></div>
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="country" class="block text-sm/6 font-medium text-gray-900">Position</label>
                            <div class="mt-2 grid grid-cols-1">
                                <select id="role" name="role" autocomplete="role-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                <option>Amdin</option>
                                <option>Supervisor</option>
                                <option>Guest</option>
                                </select>
                                <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>                
                </div>                
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>
</x-layout>