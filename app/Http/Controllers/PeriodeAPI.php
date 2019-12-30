<?php

namespace App\Http\Controllers;

// Eloquent
use App\Periode;

// Services
use App\Services\Periode\CreatePeriodeService;
use App\Services\Periode\UpdatePeriodeService;
use App\Services\Periode\DeletePeriodeService;

// Request Handle
use App\Http\Requests\Periode\PeriodeCreateRequest;
use App\Http\Requests\Periode\PeriodeUpdateRequest;
use App\Http\Requests\Periode\PeriodeDeleteRequest;

class PeriodeAPI extends Controller
{
    public function get()
    {
        $res = Periode::get();

        return response()->json($res);
    }

    public function find($id)
    {
        $res = Periode::find($id);
        $res->classrooms;

        return response()->json($res);
    }

    public function post(PeriodeCreateRequest $req, CreatePeriodeService $createPeriodeService)
    {
        $res = $createPeriodeService->handle($req->validated());

        return response()->json($res);
    }

    public function put(PeriodeUpdateRequest $req, UpdatePeriodeService $updatePeriodeService)
    {
        $res = $updatePeriodeService->handle($req->validated());

        return response()->json($res);
    }

    public function delete(PeriodeDeleteRequest $req, DeletePeriodeService $deletePeriodeService)
    {
        $res = $deletePeriodeService->handle($req->validated());

        return response()->json($res);
    }
}
