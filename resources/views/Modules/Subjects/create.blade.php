<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Subjects
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg border p-5">
                <div style="padding: 30px">
                    <h1 class="text-2xl"><strong>Create New Subject</strong></h1>
                    <p>You can create new subjects here</p>
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

                    <form action="{{ route('subjects.store') }}" method="POST">
                        @csrf

                        <div>
                            <label for="code">Code</label>
                            <input id="code" name="code" type="text"
                                class="mt-2 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Subject Code"
                                value="{{ old('code') }}">
                        </div>

                        <div class="mt-3">
                            <label for="title">Title</label>
                            <input id="title" name="title" type="text"
                                class="mt-2 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Subject Title"
                                value="{{ old('title') }}">
                        </div>

                        <div class="mt-3">
                            <label for="description">Description</label>
                            <textarea rows="3" id="description" name="description" class="mt-2 border-gray-300 rounded-lg shadow-sm w-full"
                                placeholder="Subject Description">{{ old('description') }}</textarea>
                        </div>

                        <div class="mt-3">
                            <label for="lab_unit">Lab Unit</label>
                            <input id="lab_unit" name="lab_unit" type="number" oninput="total_unit()"
                                class="mt-3 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Lab Units"
                                value="{{ old('lab_unit') }}">
                        </div>

                        <div class="mt-3">
                            <label for="lec_unit">Lec Unit</label>
                            <input id="lec_unit" name="lec_unit" type="number" oninput="total_unit()"
                                class="mt-3 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Lecture Units"
                                value="{{ old('lec_unit') }}">
                        </div>

                        <div class="mt-3">
                            <label for="total_units">Total Units</label>
                            <input readonly id="total_units" name="total_units" type="number"
                                class="mt-3 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Total Units"
                                value="{{ old('total_units') }}">
                        </div>

                        <hr class="mt-6 mb-6">

                        <button type="reset" class="border shadow-md rounded-lg text-white"
                            style="background-color: red; padding:8px">Reset</button>

                        <button type="submit" class="border shadow-md rounded-lg text-white"
                            style="background-color: blue; padding:8px">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function total_unit() {
            const lab = document.getElementById("lab_unit").value;
            const lec = document.getElementById("lec_unit").value;
            const total = document.getElementById("total_units");

            total.value = Number(lab) + Number(lec);
        }
    </script>
</x-app-layout>
