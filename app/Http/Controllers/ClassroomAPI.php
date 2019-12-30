<?php

namespace App\Http\Controllers;

// Eloquent
use App\Classroom;

// Services
use App\Services\Classroom\CreateClassroomService;
use App\Services\Classroom\UpdateClassroomService;
use App\Services\Classroom\DeleteClassroomService;

// Request Handle
use App\Http\Requests\Classroom\ClassroomCreateRequest;
use App\Http\Requests\Classroom\ClassroomUpdateRequest;
use App\Http\Requests\Classroom\ClassroomDeleteRequest;

class ClassroomAPI extends Controller
{
    public function get()
    {
        $res = Classroom::get();

        foreach($res as $result) {            
            $result->generation;
        }

        return response()->json($res);
    }

    public function find($id)
    {
        $res = Classroom::find($id);
        $res->students;
        
        return response()->json($res);
    }

    public function post(ClassroomCreateRequest $req, CreateClassroomService $createClassroomService)
    {
        $res = $createClassroomService->handle($req->validated());

        return response()->json([
            'data' => $res
        ], 200);
    }

    public function put(ClassroomUpdateRequest $req, UpdateClassroomService $updateClassroomService)
    {
        $res = $updateClassroomService->handle($req->validated());

        return response()->json([
            'data' => $res
        ], 200);
    }

    public function delete(ClassroomDeleteRequest $req, DeleteClassroomService $deleteClassroomService)
    {
        $res = $deleteClassroomService->handle($req->validated());

        return response()->json([
            'data' => $res
        ], 200);
    }
}
