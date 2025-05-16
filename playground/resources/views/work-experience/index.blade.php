<x-layout>
    <x-forms.field
        action="{{ route('work-experience.index', ['model' => $model]) }}"
        :value="$model"
    />
</x-layout>
