<x-layout>
    <ul>
        @foreach ($models as $model)
            <li>
                <p>{{ $model->id }}</p>
                <strong>{{ $model->company_name }}</strong>
                <p>{{ $model->user->email }}</p>
            </li>
        @endforeach
    </ul>

    {{ $models->links() }}
</x-layout>
