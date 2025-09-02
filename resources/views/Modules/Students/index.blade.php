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
                            <th class="border bg-gray-200 text-start">Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($studentModel->latest()->get() as $index => $student)
                                <tr class="border">
                                    <td class="p-2 text-center">{{ $index + 1 }}.</td>
                                    <td class="p-2 border text-center">{{ $student->student_id }}</td>
                                    <td class="p-2 border text-center">{{ $student->first_name }}</td>
                                    <td class="p-2 border text-center">{{ $student->last_name }}</td>
                                    <td class="p-2 border text-center">{{ $student->middle_name }}</td>
                                    <td class="p-2 border text-center">{{ $student->gender }}</td>
                                    <td class="p-2 border text-center">{{ $student->date_of_birth }}</td>
                                    <td class="p-2 border text-center">{{ $student->phone_number }}</td>
                                    <td class="p-2 border text-center">
                                        <a href="{{ route('students.edit', $student->id) }}" class="p-2 px-2 rounded-lg"
                                            style="background-color: rgb(162, 162, 1); color:#ffff">
                                            Edit
                                        </a>
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 px-2 rounded-lg"
                                                style="background-color: red; color:#ffff"
                                                onclick="return confirm('Are you sure?')">
                                                Delete
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
