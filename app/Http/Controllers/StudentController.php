<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return 'ini halaman index';
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
