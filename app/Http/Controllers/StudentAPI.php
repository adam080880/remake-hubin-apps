<?php

namespace App\Http\Controllers;

// Eloquent
use App\Student;
use App\Classroom;

// Services
use App\Services\Student\CreateStudentService;
use App\Services\Student\UpdateStudentService;
use App\Services\Student\DeleteStudentService;

// Requests handle
use App\Http\Requests\Student\StudentCreateRequest;
use App\Http\Requests\Student\StudentUpdateRequest;
use App\Http\Requests\Student\StudentDeleteRequest;
use Illuminate\Http\Request;

class StudentAPI extends Controller
{

    public function search(Request $req)
    {                
        $query = $req->get('search');
        $students = Student::where('nisn', 'LIKE', '%'.$query.'%')->
                            orWhere('name', 'LIKE', '%'.$query.'%')->                            
                            get();

        foreach($students as $student) {
            $classroom = $student->classroom;
            $classroom->generation;
        }

        return response()->json(
            $students
        , 200);
    }

    public function find($student_id)
    {
        $student = Student::find($student_id);        
        $classroom = $student->classroom;    

        $classroom->major;
        $classroom->generation;
        $classroom->periode;

        foreach($student->applicationLetters as $applicationLetter) {
            $applicationLetter->company;
            $applicationLetter->coverLetter;
        }

        return response()->json(
            $student
        , 200);
    }

    public function getByClassroom($classroom_id)
    {
        $classroom = Classroom::findOrFail($classroom_id);                
        $classroom->students;

        return response()->json(
            $classroom
        , 200);
    }

    public function post(StudentCreateRequest $req, CreateStudentService $createStudentService)
    {                    
        $res = $createStudentService->handle($req->validated());        

        return response()->json([
            'data' => $res
        ], 200);
    }

    public function put(StudentUpdateRequest $req, UpdateStudentService $updateStudentService)
    {    
        $res = $updateStudentService->handle($req->validated());        

        return response()->json([
            'data' => $res
        ], 200);
    }

    public function delete(StudentDeleteRequest $req, DeleteStudentService $deleteStudentService)
    {
        $res = $deleteStudentService->handle($req->validated());

        return response()->json([
            'data' => $res
        ], 200);
    }
}
