<?php

namespace App\Http\Controllers;

use App\View\Components\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = array('sandeep', 'santosh', 'jack');
        return view('student', compact('students'));
    }
}
