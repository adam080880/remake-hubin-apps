<?php

namespace App\Http\Controllers;

// Service
use App\Services\ApplicationLetter\ActionApplicationLetterService;
use App\Services\ApplicationLetter\CreateApplicationLetterService;
use App\Services\ApplicationLetter\DeleteApplicationLetterService;

// Request Handle
use App\Http\Requests\ApplicationLetter\ApplicationLetterActionRequest;
use App\Http\Requests\ApplicationLetter\ApplicationLetterCreateRequest;
use App\Http\Requests\ApplicationLetter\ApplicationLetterDeleteRequest;
use Illuminate\Support\Facades\DB;

class ApplicationLetterAPI extends Controller
{    
    public function getByPeriode($id)
    {
        $res = DB::table('application_letter_view')->select('application_letter_view.*',DB::raw("COUNT(*) AS total_students"))->where('status', 1)->where('periode_id', $id)->groupBy('number')->get();
        return response()->json($res);
    }

    public function find($number)
    {
        $res = DB::table('application_letter_view')->where('number', $number)->where('status', 1)->get();
        return response()->json($res);
    }    

    public function getRejectedByPeriode($id)
    {
        $res = DB::table('application_letter_view')->select('application_letter_view.*',DB::raw("COUNT(*) AS total_students"))->where('status', 2)->where('periode_id', $id)->groupBy('number')->get();
        return response()->json($res);
    }

    public function findRejected($number)
    {
        $res = DB::table('application_letter_view')->where('number', $number)->where('status', 2)->get();
        return response()->json($res);
    }    

    public function post(ApplicationLetterCreateRequest $req, CreateApplicationLetterService $createApplicationLetterService)
    {
        $res = $createApplicationLetterService->handle($req->validated());

        return response()->json([
            'data' => $res
        ], 200);
    }

    public function delete(ApplicationLetterDeleteRequest $req, DeleteApplicationLetterService $deleteApplicationLetterService) 
    {
        $res = $deleteApplicationLetterService->handle($req->validated());

        return response()->json([
            'data' => $res
        ], 200);
    }

    public function to(ApplicationLetterActionRequest $req, ActionApplicationLetterService $actionApplicationLetterService)
    {
        $res = $actionApplicationLetterService->handle($req->validated());

        return response()->json([
            'data' => $res
        ], 200);
    }
}
