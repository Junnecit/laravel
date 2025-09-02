<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List Of Student
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg border p-5">
                <div style="padding: 30px">
                    <a href=" {{ route('students.create') }}" class="text-dark p-2 rounded-lg border";
                        style="background-color: blue; color:#ffff">* Add Student
                    </a>

                    <hr class="mt-6 mb-6">

                    <table class="table table-border w-full">
                        <thead>
                            <th class="border bg-gray-200">#</th>
                            <th class="border bg-gray-200 text-start">Student ID</th>
                            <th class="border bg-gray-200 text-start">First Name</th>
                            <th class="border bg-gray-200 text-start">Last Name</th>
                            <th class="border bg-gray-200 text-start">Middle Name</th>
                            <th class="border bg-gray-200 text-start">Gender</th>
                            <th class="border bg-gray-200 text-start">Date of Birth</th>
                            <th class="border bg-gray-200 text-start">Phone Number</th>
                            <th class="border bg-gray-200 text-center">Actions</th>
                        </thead>
                        <tbody>
                            @foreach($studentModel as $index => $student)
                                <tr class="border">
                                    <td class="p-2 text-center">{{ $index + 1 }}.</td>
                                    <td class="p-2 border text-center">{{ $student->student_id }}</td>
                                    <td class="p-2 border text-center">{{ $student->first_name }}</td>
                                    <td class="p-2 border text-center">{{ $student->last_name }}</td>
                                    <td class="p-2 border text-center">{{ $student->middle_name }}</td>
                                    <td class="p-2 border text-center">{{ $student->gender }}</td>
                                    <td class="p-2 border text-center">{{ $student->date_of_birth }}</td>
                                    <td class="p-2 border text-center">{{ $student->phone_number }}</td>
                                    <td class="p-2 border text-center space-x-2">
                                        <!-- Edit Button -->
                                        <a href="{{ route('students.edit', $student->id) }}"
                                            class="inline-flex items-center px-3 py-2 rounded-lg bg-yellow-500 text-white font-semibold shadow-md 
                                            hover:bg-yellow-600 hover:scale-105 hover:shadow-lg transition-transform duration-200 ease-in-out">
                                            ✏️ Edit
                                        </a>

                                        <!-- Delete Button -->
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="inline-flex items-center px-3 py-2 rounded-lg bg-red-600 text-white font-semibold shadow-md 
                                                hover:bg-red-700 hover:scale-105 hover:shadow-lg transition-transform duration-200 ease-in-out"
                                                onclick="return confirm('Are you sure you want to delete this student?')">
                                                🗑️ Delete
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>
