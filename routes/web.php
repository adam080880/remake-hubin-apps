<?php

use Illuminate\Support\Facades\Route; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'page/admin/dashboard');
Route::view('/siswa', 'page/admin/siswa');
Route::view('/perusahaan', 'page/admin/perusahaan');
Route::view('/pengajuan','page/admin/pengajuan');
Route::view('/pengaturan', 'page/admin/setting');

Route::view('/test', 'page/test');