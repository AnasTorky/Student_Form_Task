<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

/*Route::get("admin/sign_up",[AdminController::class,'index'])->name("admin.sign_up");
Route::post("sign_up",[AdminController::class,'signup'])->name("signup");
Route::get("admin/login",[AdminController::class,'login_page'])->name("admin.login");
Route::post("login",[AdminController::class,'login'])->name("login");
Route::get('admin/home', [AdminController::class, 'home_page'])->middleware('auth')->name('admin.home');
*/

Route::get("student/form",[StudentController::class,'index'])->name('student_form');
Route::post("student",[StudentController::class,'create'])->name('student');