<?php

namespace App\Http\Controllers;

use App\Student;

class StudentController extends Controller
{

    public function __construct()
    {
        
    }


    public function index()
    {
        $student = factory(Student::class)->create();

        return view('students.index', compact('student'));
    }
}