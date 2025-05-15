<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Company Information</h2>
        </div>

        <div class="sm:mx-auto sm:w-full sm:max-w-xxl p-4">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 border border-gray-300 rounded-lg text-sm">
                <thead class="bg-gray-100">
                    <tr>
                    <th class="px-4 py-2 text-left font-semibold text-gray-700">Company Name</th>
                    <th class="px-4 py-2 text-left font-semibold text-gray-700">Start Date</th>
                    <th class="px-4 py-2 text-left font-semibold text-gray-700">End Date</th>
                    <th class="px-4 py-2 text-left font-semibold text-gray-700">Tenure</th>
                    <th class="px-4 py-2 text-left font-semibold text-gray-700">Role</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                    <td class="px-4 py-2">{{$company_name}}</td>
                    <td class="px-4 py-2">{{$start_date}}</td>
                    <td class="px-4 py-2">{{$end_date}}</td>
                    <td class="px-4 py-2">{{$tenure}}</td>
                    <td class="px-4 py-2">{{$role}}</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        
        <p class="mt-10 text-center text-sm/6 text-gray-500">
        Return to Company Page?
        <a href="{{ route('company') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Click here</a>
        </p>
    </div>
</x-layout>
