<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
        ]);

        Student::create($request->all());

        return redirect('/students');
    }
    public function edit($id)
{
    $student = Student::findOrFail($id);
    return view('students.edit', compact('student'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:students,email,' . $id,
        'phone' => 'required',
    ]);

    $student = Student::findOrFail($id);
    $student->update($request->all());

    return redirect('/students')->with('success', 'Student updated successfully!');
}

public function destroy($id)
{
    Student::destroy($id);
    return redirect('/students')->with('success', 'Student deleted successfully!');
}


}
