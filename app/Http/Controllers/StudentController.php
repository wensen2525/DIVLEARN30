<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(){
        // $student =  Student::where('id',3)->get();
        return view('student.index',[
            'students' => Student::all(),
    ]);

        // $students = Student::where('name', 'LIKE', 'D%')
        // -> select(
        //     'name as nama',
        //     'nim as nomor induk mahasiswa'
        // )
        // ->get();
        // dd($students);
    }

    public function show($nama){
        $student = Student::find($nama);
        return $student;
    }

    public function test(){
        $student = Student::select('name','nim','major')->where('major','Information System')->first();
        return $student;
    }

    public function create()
    {
        return view('student.create');
    }

    public function buat()
    {
        return view('student.create');
    }

     
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'nim' => 'required|string',
            'major' => 'required|string',
        ]);

        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major
        ]);

        return redirect()->route('student.index');
    }
     
    public function edit(Student $student)
    {
        // dd($student->id);
        return view('student.edit',[
            'student' => $student
        ]);
    }

     
    public function update(Request $request, Student $student)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string',
            'nim' => 'required|string',
            'major' => 'string',
        ]);

        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major
        ]);

        return redirect()->route('student.index');
    }

     
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->back();
    }
}