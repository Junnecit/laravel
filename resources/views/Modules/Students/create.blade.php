<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New Student
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg border p-5">
                <div style="padding: 30px">
                    <h1 class="text-2xl"><strong>Add New Student</strong></h1>
                    <p>You can Add new students here</p>
                    <hr class="mt-6 mb-6">
                    @if (session('success'))
                        <div class="border-green-600 p-5" style="color: green;">
                            <strong>Success! </strong>{{ session('success') }}
                        </div>
                        <br>
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

                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="mt-3">
                            <label for="student_id">Student ID</label>
                            <input id="student_id" name="student_id" type="text"
                                class="mt-2 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Student ID"
                                value="{{ old('student_id') }}">
                        </div>

                        <div class="mt-3">
                            <label for="first_name">First Name</label>
                            <input id="first_name" name="first_name" type="text"
                                class="mt-2 border-gray-300 rounded-lg shadow-sm w-full" placeholder="First Name"
                                value="{{ old('first_name') }}">
                        </div>

                        <div class="mt-3">
                            <label for="last_name">Last Name</label>
                            <input id="last_name" name="last_name" type="text"
                                class="mt-2 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Last Name"
                                value="{{ old('last_name') }}">
                        </div>

                        <div class="mt-3">
                            <label for="middle_name">Middle Name</label>
                            <input id="middle_name" name="middle_name" type="text"
                                class="mt-2 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Middle Name"
                                value="{{ old('middle_name') }}">
                        </div>

                        <div class="mt-3">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender"
                                class="mt-2 border-gray-300 rounded-lg shadow-sm w-full">
                                <option value="">Select Gender</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>

                        <div class="mt-3">
                            <label for="date_of_birth">Date Of Birth</label>
                            <input id="date_of_birth" name="date_of_birth" type="date"
                                class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                                value="{{ old('date_of_birth') }}">
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
