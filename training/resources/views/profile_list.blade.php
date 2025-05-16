<x-layout>
<div class="max-w-5xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-10">
    <div class="p-4 border-b">
        <h2 class="text-xl font-semibold text-gray-700">User Table</h2>
    </div>
    
    <div class="overflow-x-auto">

    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-100">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Update</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delete</th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($users as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('edit', ['id' => $user->id]) }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</a>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('delete', ['id' => $user->id]) }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</x-layout>