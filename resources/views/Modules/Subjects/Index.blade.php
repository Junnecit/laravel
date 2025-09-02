<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List Of Subjects
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg border p-5">
                <div style="padding: 30px">
                    <a href=" {{ route('subjects.create') }}" class="text-dark p-2 rounded-lg border";
                        style="background-color: blue; color:#ffff">* Create Subjects
                    </a>

                    <hr class="mt-6 mb-6">

                    <table class="table table-border w-full">
                        <thead>
                            <th class="border bg-gray-200">#</th>
                            <th class="border bg-gray-200 text-start">Code</th>
                            <th class="border bg-gray-200 text-start">Title</th>
                            <th class="border bg-gray-200 text-start">Description</th>
                            <th class="border bg-gray-200 text-start">Lab Unit</th>
                            <th class="border bg-gray-200 text-start">Lec Unit</th>
                            <th class="border bg-gray-200 text-start">Total Unit</th>
                            <th class="border bg-gray-200 text-start">Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($subjectModels->latest()->get() as $index => $subject)
                                <tr class="border">
                                    <td class="p-2 text-center">{{ $index + 1 }}.</td>
                                    <td class="p-2 border text-center">{{ $subject->subject_code }}</td>
                                    <td class="p-2 border text-center">{{ $subject->subject_title }}</td>
                                    <td class="p-2 border text-center">{{ $subject->subject_description }}</td>
                                    <td class="p-2 border text-center">{{ $subject->subject_lab_unit }}</td>
                                    <td class="p-2 border text-center">{{ $subject->subject_lec_unit }}</td>
                                    <td class="p-2 border text-center">{{ $subject->subject_total_unit }}</td>
                                    <td class="p-2 border text-center">
                                        <a href="{{ route('subjects.edit', $subject->id) }}" class="p-2 px-2 rounded-lg"
                                            style="background-color: rgb(162, 162, 1); color:#ffff">
                                            Edit
                                        </a>
                                        <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST"
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
    </div>
</x-app-layout>
