<x-layout>
    <x-forms.work-experience-form
        action="{{ route('work-experience.update', ['model' => $model]) }}"
        :isEdit="true"
        :value="$model"
    />

    <form action="{{ route('work-experience.delete', ['id' => $model]) }}" method="POST">
        @csrf
        @method('DELETE')

        <x-forms.button label="Delete" color="red"/>
    </form>
</x-layout>
