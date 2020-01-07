<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

header("Control-Access-Allow-Origin:*");
header("Control-Access-Allow-Methods:GET,POST,PUT,DELETE,PATCH,OPTIONS");
header("Access-Control-Allow-Headers:X-Requested-With, Content-Type, Accept, Origin, Authorization");

// Student API //
// GET Students (All Methods)
Route::get('student/{student_id}', 'StudentAPI@find');
Route::get('students/search', 'StudentAPI@search');
Route::get('students/classroom/{classroom_id}', 'StudentAPI@getByClassroom');
// CREATE Student
Route::post('student', 'StudentAPI@post');
// UPDATE Student
Route::put('student', 'StudentAPI@put');
// DELETE Student
Route::delete('student', 'StudentAPI@delete');

// Application Letter API //
// GET LetterAPI
Route::get('applicationletters/{id}', 'ApplicationLetterAPI@getByPeriode');
Route::get('applicationletters/rejected/{id}', 'ApplicationLetterAPI@getRejectedByPeriode');
Route::get('applicationletter/{number}', 'ApplicationLetterAPI@find');
Route::get('applicationletter/rejected/{number}', 'ApplicationLetterAPI@findRejected');
// CREATE Application Letter
Route::post('applicationletter', 'ApplicationLetterAPI@post');
// UPDATE Application Letter
Route::put('applicationletter', 'ApplicationLetterAPI@to');
// DELETE Application Letter
Route::delete('applicationletter', 'ApplicationLetterAPI@delete');

// Cover Letter API //
// Get CoverLetter
Route::get('coverletters', 'CoverLetterAPI@get');
Route::get('coverletter/{number}', 'CoverLetterAPI@find');

// Company API //
// GET Company
Route::get('companies', 'CompanyAPI@get');
Route::get('company/{id}', 'CompanyAPI@find');
// CREATE Company
Route::post('company', 'CompanyAPI@post');
// UPDATE Company
Route::put('company', 'CompanyAPI@put');
// DELETE Company
Route::delete('company', 'CompanyAPI@delete');

// Major API //
// GET Major
Route::get('majors', 'MajorAPI@get');
Route::get('major/{id}', 'MajorAPI@find');
// CREATE Major
Route::post('major', 'MajorAPI@post');
// UPDATE Major
Route::put('major', 'MajorAPI@put');
// DELETE Major
Route::delete('major', 'MajorAPI@delete');

// Generation API //
// GET Generation
Route::get('generations', 'GenerationAPI@get');
Route::get('generation/{id}', 'GenerationAPI@find');
// CREATE Generation
Route::post('generation', 'GenerationAPI@post');
// UPDATE Generation
Route::put('generation', 'GenerationAPI@put');
// DELETE Generation
Route::delete('generation', 'GenerationAPI@delete');

// Periode API //
// GET periode
Route::get('periodes', 'PeriodeAPI@get');
Route::get('periode/{id}', 'PeriodeAPI@find');
// CREATE Periode
Route::post('periode', 'PeriodeAPI@post');
// UPDATE Periode
Route::put('periode', 'PeriodeAPI@put');
// DELETE Periode
Route::delete('periode', 'PeriodeAPI@delete');

// Classroom API //
// GET Classroom
Route::get('classrooms', 'ClassroomAPI@get');
Route::get('classroom/{id}', 'ClassroomAPI@find');
// CREATE Classroom
Route::post('classroom', 'ClassroomAPI@post');
// UPDATE Classroom
Route::put('classroom', 'ClassroomAPI@put');
// DELETE Classroom
Route::delete('classroom', 'ClassroomAPI@delete');