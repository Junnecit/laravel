<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Subject
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg">
                <div style="padding: 20px; font-family: Arial, sans-serif;">
                    <h1 class="text-2xl"><strong>Edit Subject</strong></h1>
                    <p>You can update subject information here.</p>
                    <hr class="mt-6 mb-6">
                    @if (session('success'))
                        <div class="border-green-600 p-5" style="color: green;">
                            <strong>Success! </strong>{{ session('success') }}
                        </div>
                        <br>
                    @endif
                    <form action="{{ route('subjects.update', $subject->id) }}" method="POST"
                        style="font-family: Arial, sans-serif;">
                        @csrf
                        @method('PUT')
                        <div class="mt-3">
                            <label for="code">Code :</label>
                            <input readonly type="number" name="code" id="code"
                                class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                                placeholder="Subject Code here..." value="{{ old('code', $subject->subject_code) }}">
                            @error('code')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="title">Title :</label>
                            <input type="text" name="title" id="title"
                                class="mt-3 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Title here..."
                                value="{{ old('title', $subject->subject_title) }}">
                            @error('title')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="description">Description :</label>
                            <input type="text" name="description" id="description"
                                class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                                placeholder="Description here..."
                                value="{{ old('description', $subject->subject_description) }}">
                            @error('description')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="lab_unit">Lab Unit:</label>
                            <input type="text" name="lab_unit" id="lab_unit"
                                class="mt-3 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Lab Unit here..."
                                value="{{ old('lab_unit', $subject->subject_lab_unit) }}">
                        </div>

                        <div class="mt-3">
                            <label for="lec_unit">Lec Unit :</label>
                            <input type="text" name="lec_unit" id="lec_unit"
                                class="mt-3 border-gray-300 rounded-lg shadow-sm w-full" placeholder="Lec Unit here..."
                                value="{{ old('lec_unit', $subject->subject_lec_unit) }}">
                        </div>

                        <div class="mt-3">
                            <label for="total_unit">Total Unit :</label>
                            <input readonly type="number" name="total_unit" id="total_unit"
                                class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                                placeholder="Total Unit here..."
                                value="{{ old('total_unit', $subject->subject_total_unit) }}">
                            @error('total_unit')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
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
    <script>
        function total_unit() {
            const lab = document.getElementById("lab_unit").value;
            const lec = document.getElementById("lec_unit").value;
            const total = document.getElementById("total_unit");

            total.value = Number(lab) + Number(lec);
        }
    </script>
</x-app-layout>
