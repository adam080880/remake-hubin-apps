<?php

namespace App\Http\Controllers;

// Eloquent
use App\Major;

// Services
use App\Services\Major\CreateMajorService;
use App\Services\Major\UpdateMajorService;
use App\Services\Major\DeleteMajorService;

// Request Handle
use App\Http\Requests\Major\MajorCreateRequest;
use App\Http\Requests\Major\MajorUpdateRequest;
use App\Http\Requests\Major\MajorDeleteRequest;

class MajorAPI extends Controller
{
    public function get()
    {
        $res = Major::get();

        return response()->json($res);
    }

    public function find($id)
    {
        $res = Major::find($id);
        $res->classrooms;

        return response()->json($res);
    }

    public function post(MajorCreateRequest $req, CreateMajorService $createMajorService)
    {
        $res = $createMajorService->handle($req->validated());

        return response()->json([
            'data' => $res
        ]);
    }

    public function put(MajorUpdateRequest $req, UpdateMajorService $updateMajorService)
    {
        $res = $updateMajorService->handle($req->validated());

        return response()->json([
            'data' => $res
        ]);
    }

    public function delete(MajorDeleteRequest $req, DeleteMajorService $deleteMajorService)
    {
        $res = $deleteMajorService->handle($req->validated());

        return response()->json([
            'data' => $res
        ]);
    }
}
