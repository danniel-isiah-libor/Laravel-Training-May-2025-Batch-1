<x-layout>
    <x-slot:header>
        <div class="mt-10 flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900 uppercase">Delete Work Experience Form</h2>
            </div>
        </div>
    </x-slot:header>
    <div class="flex min-h-full flex-col justify-center px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('work-experience.delete_record', ['id' => $form['id']]) }}" method="post">
                {{ method_field('DELETE') }}
                @csrf
                <div>Are you sure?</div>
                <div>
                    <x-forms.buttons class="buttons" label="Delete" />
                </div>
            </form>
        </div>
    </div>
</x-layout>