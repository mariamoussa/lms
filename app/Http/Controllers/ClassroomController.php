<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function createClassroom(Request $request)
    {
        $classroom = new Classroom;
        $classroom->fill($request->all());
        $classroom->save();
    }

    public function getAllClassroom()
    {
        return Classroom::all();
    }

    public function getClassroom($id)
    {
        return Classroom::where('id', $id)->first();
    }

    public function updateClassroom($id, Request $request)
    {
        $classroom = Classroom::where('id', $id)->first();
        $classroom->update($request->all());
    }

    public function deleteClassroom($id)
    {
        Classroom::where('id', $id)->delete();
    }
}
