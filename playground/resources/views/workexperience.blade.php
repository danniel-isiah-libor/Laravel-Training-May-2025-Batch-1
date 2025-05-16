<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Work Experience - Masterfile</h2>
        </div>

        <div class="sm:mx-auto sm:w-full sm:max-w-xxl p-4">
             @if (session('success'))
                <div class="mb-4 rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 border border-gray-300 rounded-lg text-sm">
                <thead class="bg-gray-100">
                    <tr>
                    <th class="px-4 py-2 text-left font-semibold text-gray-700">Company Name</th>
                    <th class="px-4 py-2 text-left font-semibold text-gray-700">Address</th>
                    <th class="px-4 py-2 text-left font-semibold text-gray-700">Start Date</th>
                    <th class="px-4 py-2 text-left font-semibold text-gray-700">End Date</th>
                    <th class="px-4 py-2 text-left font-semibold text-gray-700">Tenure</th>
                    <th class="px-4 py-2 text-left font-semibold text-gray-700">Role</th>
                    <th class="px-4 py-2 text-left font-semibold text-gray-700">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @if($count > 0)
                    @foreach ($collection as $item)
                    <tr>
                    <td class="px-4 py-2">{{$item->company_name}}</td>
                    <td class="px-4 py-2">{{$item->location}}</td>
                    <td class="px-4 py-2">{{$item->start_date}}</td>
                    <td class="px-4 py-2">{{$item->end_date}}</td>
                    <td class="px-4 py-2">{{$item->tenure}}</td>
                    <td class="px-4 py-2">{{$item->role}}</td>
                    <td class="px-4 py-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="window.location.href='{{ route('workexperience.edit', $item->id) }}'">
                            Edit
                        </button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"  onclick="window.location.href='{{ route('workexperience.delete', $item->id) }}'">
                            Delete
                        </button>
                    </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="px-4 py-2" colspan="5">No Records Found</td>
                    </tr>
                    @endif
                    
                </tbody>
                </table>
            </div>
        </div>
        
        <p class="mt-10 text-center text-sm/6 text-gray-500">
        Create New Work Experience?
        <a href="{{ route('company') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Click here</a>
        </p>
    </div>
</x-layout>
