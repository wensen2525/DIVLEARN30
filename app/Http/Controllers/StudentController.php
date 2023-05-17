<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

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
}
