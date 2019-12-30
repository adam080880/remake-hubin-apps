<?php

namespace App\Http\Controllers;

// Eloquent
use App\Generation;

// Services
use App\Services\Generation\CreateGenerationService;
use App\Services\Generation\UpdateGenerationService;
use App\Services\Generation\DeleteGenerationService;

// Request Handle
use App\Http\Requests\Generation\GenerationCreateRequest;
use App\Http\Requests\Generation\GenerationUpdateRequest;
use App\Http\Requests\Generation\GenerationDeleteRequest;

class GenerationAPI extends Controller
{
    public function get()
    {
        $res = Generation::get();

        return response()->json($res);
    }

    public function find($id)
    {
        $res = Generation::find($id);        

        foreach($res->classrooms as $classroom) {
            $classroom->major;
        }

        return response()->json($res);
    }
    
    public function post(GenerationCreateRequest $req, CreateGenerationService $createGenerationService)
    {
        $res = $createGenerationService->handle($req->validated());

        return response()->json([
            'data' => $res
        ], 200);
    }

    public function put(GenerationUpdateRequest $req, UpdateGenerationService $updateGenerationService)
    {
        $res = $updateGenerationService->handle($req->validated());

        return response()->json([
            'data' => $res
        ], 200);
    }

    public function delete(GenerationDeleteRequest $req, DeleteGenerationService $deleteGenerationService)
    {
        $res = $deleteGenerationService->handle($req->validated());

        return response()->json([
            'data' => $res
        ], 200);
    }
}
