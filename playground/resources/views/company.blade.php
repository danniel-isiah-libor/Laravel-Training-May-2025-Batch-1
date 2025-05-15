<x-layout>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">New Company Record</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="{{ route('company.store') }}" method="POST">
    @csrf
      <x-forms.field type="text" label="Company Name" name="company_name" placeholder="Company Name" id="company_name" :required="true" />
      <x-forms.field type="text" label="Address" name="location" placeholder="Address" id="location" :required="true" />
      <x-forms.field type="text" label="Start Date" name="start_date" placeholder="Start Date" id="start_date" :required="true" />
      <x-forms.field type="text" label="End Date" name="end_date" placeholder="End Date" id="end_date" />
      <x-forms.field type="number" label="Tenure" name="tenure" placeholder="Tenure" id="tenure" :required="true" />
      <x-forms.field type="text" label="Role" name="role" placeholder="Role" id="role" :required="true" />
      <x-forms.submit type="submit" value="Submit" id="submit-action" />
    </form>
  </div>
</div>
</x-layout>
