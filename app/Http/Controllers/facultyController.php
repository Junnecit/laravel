<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\facultyModel;

class facultyController extends Controller
{
    public function index()
    {
        $facultyModel = facultyModel::query();
        return view('modules.faculty.index', compact('facultyModel'));
    }

    public function create()
    {
        return view('modules.faculty.create');
    }

    public function edit($id)
    {
        $facultyModel = facultyModel::findOrFail($id);
        return view('modules.faculty.edit', compact('facultyModel'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'department_id' => 'required|string',
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'department' => 'required|string',
            'email' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        $facultyModel = facultyModel::findOrFail($id);
        $facultyModel->update($validated);
        return redirect()->route('faculty.index')->with('success', 'Faculty updated successfully.');
    }

    public function destroy($id)
    {
        $facultyModel = facultyModel::findOrFail($id);
        $facultyModel->delete();
        return redirect()->route('faculty.index')->with('success', 'Faculty deleted successfully.');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'department_id' => 'required|string',
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'department' => 'required|string',
            'email' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        facultyModel::create($validated);

        return redirect()->route('faculty.create')->with('success', 'Faculty added successfully.');
    }
}
