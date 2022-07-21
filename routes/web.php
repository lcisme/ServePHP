<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebCTL;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/abuot",[\App\Http\Controllers\WebCTL::class,"abuotUs"]);
//Route::get("/student",[WebCTL::class,"listST"]);
//Route::get("/classes",[WebCTL::class,"listCL"]);
//Route::get("/subject",[WebCTL::class,"listSB"]);
//Route::get("/score",[WebCTL::class,"listSC"]);
//Route::get("/addstudent",[WebCTL::class,"addST"]);
//Route::get("/addclasses",[WebCTL::class,"addCL"]);
//Route::get("/addsubject",[WebCTL::class,"addSB"]);
//Route::get("/addscore",[WebCTL::class,"addSC"]);
//Route::get("/editstudent",[WebCTL::class,"editST"]);
//Route::get("/editclasses",[WebCTL::class,"editCL"]);
//Route::get("/editsubject",[WebCTL::class,"editSB"]);
//Route::get("/editscore",[WebCTL::class,"editSC"]);

// class group
Route::get("/class/list",[\App\Http\Controllers\ClassesController::class,"all"]);
Route::get("/class/create",[\App\Http\Controllers\ClassesController::class,"form"]);
Route::post("/class/create",[\App\Http\Controllers\ClassesController::class,"create"]);
// student group
Route::get("/student/list",[\App\Http\Controllers\StudentController::class,"all"]);
Route::get("/student/create",[\App\Http\Controllers\StudentController::class,"form"]);
Route::post("/student/create",[\App\Http\Controllers\StudentController::class,"create"]);
// subject group
Route::get("/subject/list",[\App\Http\Controllers\SubjectController::class,"all"]);
Route::get("/subject/create",[\App\Http\Controllers\SubjectController::class,"form"]);
Route::post("/subject/create",[\App\Http\Controllers\SubjectController::class,"create"]);

// score group
Route::get("/score/list",[\App\Http\Controllers\SubjectController::class,"all"]);
Route::get("/score/create",[\App\Http\Controllers\SubjectController::class,"form"]);
Route::post("/score/create  ",[\App\Http\Controllers\SubjectController::class,"create"]);


