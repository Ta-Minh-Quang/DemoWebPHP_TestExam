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

Route::get('/', [StudentController::class, 'get_all_student'])->name('students');

Route::get('student/{id}/edit', [StudentController::class, 'get_student_by_id'])->name('student');

Route::post('student/{id}/edit', [StudentController::class, 'edit']);