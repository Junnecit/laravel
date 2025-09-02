<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Student
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg">
                <div style="padding: 20px; font-family: Arial, sans-serif;">
                    <h1 class="text-2xl"><strong>Edit Student</strong></h1>
                    <p>You can update student information here.</p>
                    <hr class="mt-6 mb-6">
                    @if(session('success'))
                        <div class="border-green-600 p-5" style="color: green;">
                            <strong>Success! </strong>{{ session('success') }}
                        </div>
                        <br>
                    @endif
                    <form action="{{ route('students.update', $studentModel->id) }}" method="post" style="font-family: Arial, sans-serif;">
                        @csrf
                        @method('PUT')
                        <div class="mt-3">
                            <label for="student_id">Student ID :</label>
                            <input readonly type="number" name="student_id" id="student_id"
                             class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                             placeholder="Student ID here..." value="{{ old('student_id', $studentModel->student_id) }}">
                            @error('student_id')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="last_name">Last Name :</label>
                            <input type="text" name="last_name" id="last_name"
                             class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                             placeholder="Last Name here..." value="{{ old('last_name', $studentModel->last_name) }}">
                            @error('last_name')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="first_name">First Name :</label>
                            <input type="text" name="first_name" id="first_name"
                             class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                             placeholder="First Name here..." value="{{ old('first_name', $studentModel->first_name) }}">
                            @error('first_name')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="middle_name">Middle Name :</label>
                            <input type="text" name="middle_name" id="middle_name"
                             class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                             placeholder="Middle Name here..." value="{{ old('middle_name', $studentModel->middle_name) }}">
                        </div>
                        <div class="mt-3">
                            <label for="gender">Gender :</label>
                            <select name="gender" id="gender" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full">
                                <option value="">Select Gender</option>
                                <option value="Male" {{ old('gender', $studentModel->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender', $studentModel->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                            @error('gender')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="dob">Date of Birth :</label>
                            <input type="date" name="dob" id="dob"
                             class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                             placeholder="Birthdate here..." value="{{ old('dob', $studentModel->dob) }}">
                            @error('dob')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="phone_number">Phone Number :</label>
                            <input type="number" name="phone_number" id="phone_number"
                             class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                             placeholder="Phone Number here..." value="{{ old('phone_number', $studentModel->phone_number) }}">
                        </div>
                        <hr class="mt-6 mb-6">
                        <button type="reset" class="border shadow-md rounded-lg text-white" 
                        style="padding: 8px; background-color: #ff4433;">Reset</button>
                        <button type="submit" class="border shadow-md rounded-lg text-white" 
                        style="padding: 8px; background-color: #2563eb;">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
