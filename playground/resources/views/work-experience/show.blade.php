<x-layout>

    <ul>
        <li>
            <strong>Company Name</strong>: {{ $model->company_name }}
        </li>

        <li>
            <strong>Position</strong>: {{ $model->position }}
        </li>

        <li>
            <strong>Tenure</strong>: {{ $model->start_date->format('M-d-Y') }} to {{ $model->end_date->diffForHumans() }}
        </li>
    </ul>

</x-layout>
