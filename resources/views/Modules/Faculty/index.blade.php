<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List Of Faculty
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg border p-5">
                <div style="padding: 30px">
                    <a href=" {{ route('faculty.create') }}" class="text-dark p-2 rounded-lg border";
                        style="background-color: blue; color:#ffff">* Add New Faculty
                    </a>

                    <hr class="mt-6 mb-6">

                    <table class="table table-border w-full">
                        <thead>
                            <th class="border bg-gray-200">#</th>
                            <th class="border bg-gray-200 text-center">Dept ID</th>
                            <th class="border bg-gray-200 text-center">First Name</th>
                            <th class="border bg-gray-200 text-center">Last Name</th>
                            <th class="border bg-gray-200 text-center">Middle Name</th>
                            <th class="border bg-gray-200 text-center">Department</th>
                            <th class="border bg-gray-200 text-center">Email</th>
                            <th class="border bg-gray-200 text-center">Phone Number</th>
                            <th class="border bg-gray-200 text-center">Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($facultyModel as $index => $faculty)
                                <tr class="border">
                                    <td class="p-2 text-center">{{ $index + 1 }}.</td>
                                    <td class="p-2 border text-center">{{ $faculty->department_id }}</td>
                                    <td class="p-2 border text-center">{{ $faculty->first_name }}</td>
                                    <td class="p-2 border text-center">{{ $faculty->last_name }}</td>
                                    <td class="p-2 border text-center">{{ $faculty->middle_name }}</td>
                                    <td class="p-2 border text-center">{{ $faculty->department }}</td>
                                    <td class="p-2 border text-center">{{ $faculty->email }}</td>
                                    <td class="p-2 border text-center">{{ $faculty->phone_number }}</td>
                                    <td class="p-2 border text-center space-x-2">
                                        <!-- Edit Button -->
                                        <a href="{{ route('faculty.edit', $faculty->id) }}"
                                            class="inline-flex items-center px-3 py-2 rounded-lg bg-yellow-500 text-white font-semibold shadow-md 
                                            hover:bg-yellow-600 hover:scale-105 hover:shadow-lg transition-transform duration-200 ease-in-out">
                                            ✏️ Edit
                                        </a>

                                        <!-- Delete Button -->
                                        <form action="{{ route('faculty.destroy', $faculty->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="inline-flex items-center px-3 py-2 rounded-lg bg-red-600 text-white font-semibold shadow-md 
                                                hover:bg-red-700 hover:scale-105 hover:shadow-lg transition-transform duration-200 ease-in-out"
                                                onclick="return confirm('Are you sure you want to delete this faculty member?')">
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
    </div>
</x-app-layout>
