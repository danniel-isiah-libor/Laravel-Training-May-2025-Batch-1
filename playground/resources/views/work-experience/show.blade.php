<x-layout>

    <ul>
        @foreach(array_keys($form) as $key)
            <li>
                <strong>{{ $key }}</strong>: {{ $form[$key] }}
            </li>
        @endforeach
    </ul>

</x-layout>
