<x-layout>
    <div class="rounded-t-xl overflow-hidden bg-gradient-to-r from-emerald-50 to-teal-100 p-10 h-screen">
        <div class="mx-auto w-full h-screen">
            <table class="table-auto m-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-emerald-600">Company</th>
                        <th class="px-4 py-2 text-emerald-600">Position</th>
                        <th class="px-4 py-2 text-emerald-600">Date Start</th>
                        <th class="px-4 py-2 text-emerald-600">Date End</th>
                        <th class="px-4 py-2 text-emerald-600"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $key => $item)
                        <tr class="{{ ($key % 2 == 0 ? '' : 'bg-emerald-200' ) }}">
                            <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">{{ $item['company_name'] }}</td>
                            <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">{{ $item['position'] }}</td>
                            <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">{{ $item['start_date'] }}</td>
                            <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">{{ $item['end_date'] }}</td>
                            <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">
                                <a href="{{ route('work-experience.update', ['id' => $item['id']]) }}" class="me-3">Update</a>
                                <a href="{{ route('work-experience.delete', ['id' => $item['id']]) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $list->links() }}
        </div>
    </div>
</x-layout>
{{-- 
@foreach ($list as $item)
    {{ $item['position'] }}
@endforeach --}}