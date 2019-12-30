<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Eloquent
use App\Company;

// Services
use App\Services\Company\CreateCompanyService;
use App\Services\Company\UpdateCompanyService;
use App\Services\Company\DeleteCompanyService;

// Request Handle
use App\Http\Requests\Company\CompanyCreateRequest;
use App\Http\Requests\Company\CompanyUpdateRequest;
use App\Http\Requests\Company\CompanyDeleteRequest;

class CompanyAPI extends Controller
{
    public function get()
    {
        $res = Company::get();
        return response()->json($res);
    }

    public function find($id)
    {
        $res = Company::findOrFail($id);
        foreach($res->applicationLetters as $applicationLetter) {
            $data = $applicationLetter->student->classroom;
            $data->major;
            $data->generation;
        }

        return response()->json($res);
    }

    public function post(CompanyCreateRequest $req, CreateCompanyService $createCompanyService)
    {
        $res = $createCompanyService->handle($req->validated());

        return response()->json([
            'data' => $res
        ], 200);
    }

    public function put(CompanyUpdateRequest $req, UpdateCompanyService $updateCompanyService)
    {
        $res = $updateCompanyService->handle($req->validated());

        return response()->json([
            'data' => $res
        ]);
    }

    public function delete(CompanyDeleteRequest $req, DeleteCompanyService $deleteCompanyService)
    {
        $res = $deleteCompanyService->handle($req->validated());

        return response()->json([
            'data' => $res
        ], 200);
    }
}
