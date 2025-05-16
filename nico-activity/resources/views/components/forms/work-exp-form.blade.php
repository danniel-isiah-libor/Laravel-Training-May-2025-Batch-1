@props([
    'action' => '',
    'isEdit' => false,
    'value' => null,
])

<form class="space-y-4 md:space-y-6" action="{{ $action }}" method="POST">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif
    <div>
        <x-forms.input type="text" label="Company Name" name="company" placeholder="Company Name"/>
    </div>
    <div>
        <x-forms.input type="text" label="Position" name="position" placeholder="Position"/>
    </div>
    <div>
        <x-forms.input type="date" label="Start Date" name="start_date" placeholder="mm/dd/yyyy"/>
    </div>
    <div>
        <x-forms.input type="date" label="End Date" name="end_date" placeholder="mm/dd/yyyy"/>
    </div>
    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create Work Experience</button>
</form>