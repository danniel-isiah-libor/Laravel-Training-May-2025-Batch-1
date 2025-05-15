<x-layout>
    <section class="bg-gray p-8 rounded-lg shadow-md w-full h-full">
        <div class="flex flex-col items-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Work Experience
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{route('work_experience.store')}}" method="POST">
                        @csrf
                        <div>
                            <x-forms.input  type="text" label="Company Name" name="company" placeholder="Company Name"/>
                        </div>
                        <div>
                            <x-forms.input  type="text" label="Position" name="position" placeholder="Position"/>
                        </div>
                        <div>
                            <x-forms.input  type="date" label="Start Date" name="start_date" placeholder="mm/dd/yyyy"/>
                        </div>
                        <div>
                            <x-forms.input  type="date" label="End Date" name="end_date" placeholder="mm/dd/yyyy"/>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create Work Experience</button>
                    </form>
                </div>
            </div>
        </div>
      </section>
    {{-- <div class="bg-white p-8 rounded-lg shadow-md w-full h-full">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Registration</h1>
        <form class="space-y-4 w-100 ">
            <div class="flex flex-wrap -mx-2">
                <div class="w-1/3">
                    <x-forms.input type="text" label="Company Name" placeholder="Input Email Here" name="company_name" class=" px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
                <div class="w-1/3">
                    <x-forms.input type="text" label="Company Name" placeholder="Input Email Here" name="company_name" class=" px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
            </div>
            <div class="space-y-4">
            </div>
        </form>
    </div> --}}
</x-layout>
