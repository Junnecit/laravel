<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectModel;

class SubjectController extends Controller
{
    public function index()
    {
        $subjectModels = SubjectModel::orderBy('id', 'asc')->paginate(5);
        return view('modules.subjects.index', compact('subjectModels'));
    }

    public function create()
    {
        return view('modules.subjects.create');
    }

    public function show($id)
    {
        $subject = SubjectModel::findOrFail($id);
        return view('modules.subjects.show', compact('subject'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'lab_unit' => 'required|integer',
            'lec_unit' => 'required|integer',
        ]);

        // Auto compute total_units
        $total_units = $validated['lec_unit'] + $validated['lab_unit'];

        SubjectModel::create([
            'subject_code' => $validated['code'],
            'subject_title' => $validated['title'],
            'subject_description' => $validated['description'],
            'subject_lab_unit' => $validated['lab_unit'],
            'subject_lec_unit' => $validated['lec_unit'],
            'subject_total_unit' => $total_units,
        ]);

        return redirect()->route('subjects.create')->with('success', 'Successfully Added');
    }

    public function edit($id)
    {
        $subject = SubjectModel::findOrFail($id);
        return view('modules.subjects.edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'code' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'lab_unit' => 'required|integer',
            'lec_unit' => 'required|integer',
        ]);

        // Auto compute total_units
        $total_units = $validated['lec_unit'] + $validated['lab_unit'];

        $SubjectModel = SubjectModel::findOrFail($id);
        $SubjectModel->update([
            'subject_code' => $validated['code'],
            'subject_title' => $validated['title'],
            'subject_description' => $validated['description'],
            'subject_lab_unit' => $validated['lab_unit'],
            'subject_lec_unit' => $validated['lec_unit'],
            'subject_total_unit' => $total_units,
        ]);

        return redirect()->route('subjects.edit', $id)->with('success', 'Successfully Updated');
    }

    public function destroy($id)
    {
        $SubjectModel = SubjectModel::findOrFail($id);
        $SubjectModel->delete();

        return redirect()->route('subjects.index')->with('success', 'Successfully Deleted');
    }
}
