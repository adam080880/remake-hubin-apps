<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CoverLetterAPI extends Controller
{
    public function get()
    {
        return response()->json(DB::table('cover_letter_view')->select('cover_letter_view.*', DB::raw("COUNT(*) AS total_students"))->groupBy('number')->get());
    }

    public function find($number)
    {
        return response()->json(DB::table('cover_letter_view')->where('number', $number)->get());
    }
}
