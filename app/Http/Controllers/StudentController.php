<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function createStudent(Request $request)
    {
        $student = new Student;
        $student->fill($request->all());
        $student->save();
    }

    
    public function getAllStudent()
    {
        return Student::all();
    }


    public function getStudent($id)
    {
        return Student::where('id', $id)->first();
    }


    public function updateStudent($id, Request $request)
    {
        $student = Student::where('id', $id)->first();
        $student->update($request->all());
    }


    public function deleteStudent($id)
    {
        Student::where('id', $id)->delete();
    }

}
