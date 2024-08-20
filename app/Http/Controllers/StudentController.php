<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Traits\upload_image;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use upload_image;

    public function index()
    {
        $students = Student::get();
        return view('student',compact('students'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'img' => 'required',
        ]);
        $img_path = $this->upload_image($request, 'img', 'student');
        Student::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'img' => $img_path,
        ]);
        
        return redirect()->route('student_form');
    }
}
