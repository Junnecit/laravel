<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Faculty
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg">
                <div style="padding: 20px; font-family: Arial, sans-serif;">
                    <h1 class="text-2xl"><strong>Edit Faculty</strong></h1>
                    <p>You can update faculty information here.</p>
                    <hr class="mt-6 mb-6">
                    @if(session('success'))
                        <div class="border-green-600 p-5" style="color: green;">
                            <strong>Success! </strong>{{ session('success') }}
                        </div>
                        <br>
                    @endif
                    <form action="{{ route('faculty.update', $facultyModel->id) }}" method="post" style="font-family: Arial, sans-serif;">
                        @csrf
                        @method('PUT')
                        <div class="mt-3">
                            <label for="department_id">Department ID :</label>
                            <input readonly type="number" name="department_id" id="department_id"
                             class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                             placeholder="Department ID here..." value="{{ old('department_id', $facultyModel->department_id) }}">
                            @error('department_id')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="first_name">First Name :</label>
                            <input type="text" name="first_name" id="first_name"
                             class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                             placeholder="First Name here..." value="{{ old('first_name', $facultyModel->first_name) }}">
                            @error('first_name')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="middle_name">Middle Name :</label>
                            <input type="text" name="middle_name" id="middle_name"
                             class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                             placeholder="Middle Name here..." value="{{ old('middle_name', $facultyModel->middle_name) }}">
                            @error('middle_name')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="last_name">Last Name :</label>
                            <input type="text" name="last_name" id="last_name"
                             class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                             placeholder="Last Name here..." value="{{ old('last_name', $facultyModel->last_name) }}">
                        </div>
                        <div class="mt-3">
                            <label for="department">Department:</label>
                            <select name="department" id="department" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full">
                                <option value="">Select Department</option>
                                <option value="Computer Science" {{ old('department', $facultyModel->department) == 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
                                <option value="Mathematics" {{ old('department', $facultyModel->department) == 'Mathematics' ? 'selected' : '' }}>Mathematics</option>
                                <option value="Physics" {{ old('department', $facultyModel->department) == 'Physics' ? 'selected' : '' }}>Physics</option>
                                <option value="Chemistry" {{ old('department', $facultyModel->department) == 'Chemistry' ? 'selected' : '' }}>Chemistry</option>
                                <option value="Biology" {{ old('department', $facultyModel->department) == 'Biology' ? 'selected' : '' }}>Biology</option>
                                <option value="Criminology" {{ old('department', $facultyModel->department) == 'Criminology' ? 'selected' : '' }}>Criminology</option>
                                <option value="AP" {{ old('department', $facultyModel->department) == 'AP' ? 'selected' : '' }}>AP</option>
                                <option value="BPED" {{ old('department', $facultyModel->department) == 'BPED' ? 'selected' : '' }}>BPED</option>
                                <option value="Filipino" {{ old('department', $facultyModel->department) == 'Filipino' ? 'selected' : '' }}>Filipino</option>
                                <option value="English" {{ old('department', $facultyModel->department) == 'English' ? 'selected' : '' }}>English</option>
                            </select>
                            @error('department')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="email">Email :</label>
                            <input type="email" name="email" id="email"
                             class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                             placeholder="Email here..." value="{{ old('email', $facultyModel->email) }}">
                            @error('email')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="phone_number">Phone Number :</label>
                            <input type="number" name="phone_number" id="phone_number"
                             class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                             placeholder="Phone Number here..." value="{{ old('phone_number', $facultyModel->phone_number) }}">
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
