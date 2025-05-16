<x-layout>
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">Work Experience</h2>
    </div>

    <div class="flex justify-center gap-4 pt-6">
      <button onclick="fetchWorkExperience()" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600">
        Show User
      </button>
      <button id="deleteBtn" onclick="deleteWorkExperience()" class="rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-600 hidden">
        Delete
      </button>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('work-experience.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div>
          <x-forms.field label="Company" name="company_name" id="company_name" />
        </div>

        <div>
          <x-forms.field label="Role" name="role" id="role" />
        </div>

        <div>
          <button type="submit" class="w-full rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600">
            Update
          </button>
        </div>
      </form>
    </div>
  </div>
</x-layout>

<script>
  function fetchWorkExperience() {
    fetch("{{ route('work-experience.show') }}")
      .then(res => res.json())
      .then(response => {
        const data = Array.isArray(response) ? response[0] : response.data
        if (!data) return

        document.querySelector('#company_name').value = data.company_name || ''
        document.querySelector('#role').value = data.role || ''
        document.querySelector('#deleteBtn').classList.remove('hidden')

      })
      .catch(err => {
        console.error('Failed to fetch work experience:', err)
      })
  }

  function deleteWorkExperience() {
    if (!confirm('Are you sure you want to delete this work experience?')) return

    fetch("{{ route('work-experience.delete') }}", {
      method: 'DELETE',
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}',
        'Accept': 'application/json'
      }
    })
      .then(res => res.json())
      .then(response => {
        document.querySelector('#company_name').value = ''
        document.querySelector('#role').value = ''
        alert('Work experience deleted successfully.')
        document.querySelector('#deleteBtn').classList.add('hidden')

      })
      .catch(err => {
        console.error('Failed to delete work experience:', err)
      })
  }
</script>
