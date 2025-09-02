<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentModel;

class studentController extends Controller
{
    public function index()
    {
        $studentModel = studentModel::orderBy('id', 'asc')->paginate(5);
        return view('modules.students.index', compact('studentModel'));
    }
    public function create()
    {
        return view('modules.students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'middle_name' => 'required|string',
            'gender' => 'required|string',
            'date_of_birth' => 'required|date',
            'phone_number' => 'required|string',
        ]);

        studentModel::create($validated);

        return redirect()->route('students.create')->with('success', 'Student created successfully.');
    }

    public function edit($id)
    {
        $studentModel = studentModel::findOrFail($id);
        return view('modules.students.edit', compact('studentModel'));
    }

    public function update(Request $request, $id)
    {
        $studentModel = studentModel::findOrFail($id);
        $validated = $request->validate([
            'student_id' => 'required|string',
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'gender' => 'required|string',
            'dob' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        $studentModel->update($validated);

        return redirect()->route('students.edit', $studentModel->id)->with('success', 'Student updated successfully.');
    }
    public function destroy($id)
    {
        $studentModel = studentModel::findOrFail($id);
        $studentModel->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }

}




