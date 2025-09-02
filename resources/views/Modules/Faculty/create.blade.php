<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New Faculty
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg border p-5">
                <div style="padding: 30px">
                    <h1 class="text-2xl"><strong>Add New Faculty</strong></h1>
                    <p>You can Add New Faculty</p>
                    <hr class="mt-6 mb-6">

                    {{-- Success message --}}
                    @if (session('success'))
                        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif


                    {{-- Error messages --}}
                    @if ($errors->any())
                        <div class="p-3 mb-4 text-red-700 bg-red-100 rounded-lg">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('faculty.store') }}" method="POST">
                        @csrf

                        <div>
                            <label for="department_id">Department ID</label>
                            <input id="department_id" name="department_id" type="text"
                                class="mt-2 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Department ID"
                                value="{{ old('department_id') }}">
                        </div>

                        <div class="mt-3">
                            <label for="first_name">First Name</label>
                            <input id="first_name" name="first_name" type="text"
                                class="mt-2 border-gray-300 rounded-lg shadow-sm w-full" placeholder="First Name"
                                value="{{ old('first_name') }}">
                        </div>

                        <div class="mt-3">
                            <label for="middle_name">Middle Name</label>
                            <input id="middle_name" name="middle_name" type="text"
                                class="mt-2 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Middle Name"
                                value="{{ old('middle_name') }}">
                        </div>

                        <div class="mt-3">
                            <label for="last_name">Last Name</label>
                            <input id="last_name" name="last_name" type="text"
                                class="mt-2 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Last Name"
                                value="{{ old('last_name') }}">
                        </div>

                       <div class="mt-3">
                            <label for="department">Department</label>
                            <select id="department" name="department"
                                class="mt-2 border-gray-300 rounded-lg shadow-sm w-full">
                                <option value="">Select Department</option>
                                <option value="Computer Science" {{ old('department') == 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
                                <option value="Mathematics" {{ old('department') == 'Mathematics' ? 'selected' : '' }}>Mathematics</option>
                                <option value="Physics" {{ old('department') == 'Physics' ? 'selected' : '' }}>Physics</option>
                                <option value="Chemistry" {{ old('department') == 'Chemistry' ? 'selected' : '' }}>Chemistry</option>
                                <option value="Biology" {{ old('department') == 'Biology' ? 'selected' : '' }}>Biology</option>
                                <option value="Criminology" {{ old('department') == 'Criminology' ? 'selected' : '' }}>Criminology</option>
                                <option value="AP" {{ old('department') == 'AP' ? 'selected' : '' }}>AP</option>
                                <option value="BPED" {{ old('department') == 'BPED' ? 'selected' : '' }}>BPED</option>
                                <option value="Filipino" {{ old('department') == 'Filipino' ? 'selected' : '' }}>Filipino</option>
                                <option value="English" {{ old('department') == 'English' ? 'selected' : '' }}>English</option>
                            </select>
                        </div>

                        <div class="mt-3">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email"
                                class="mt-3 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Email"
                                value="{{ old('email') }}">
                        </div>

                        <div class="mt-3">
                            <label for="phone_number">Phone Number</label>
                            <input id="phone_number" name="phone_number" type="text"
                                class="mt-3 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Phone Number"
                                value="{{ old('phone_number') }}">
                        </div>

                        <hr class="mt-6 mb-6">

                        <button type="reset" class="border shadow-md rounded-lg text-white"
                            style="background-color: red; padding:8px">Reset</button>

                        <button type="submit" class="border shadow-md rounded-lg text-white"
                            style="background-color: blue; padding:8px">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
