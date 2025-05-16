<x-layout>
    <x-forms.work-experience-form
        action="{{ route('work-experience.update', ['model' => $model]) }}"
        :isEdit="true"
        :value="$model"
    />
</x-layout>
