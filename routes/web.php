<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TeacherController;

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

Route::get('employees',[EmployeeController::class,'index'])->name('employees');
Route::get('add-employee',[EmployeeController::class,'create'])->name('create.employee');
Route::post('store-employee',[EmployeeController::class,'store'])->name('store.employee');
Route::get('delete-employee/{id}',[EmployeeController::class,'delete'])->name('delete.employee');
Route::get('edit-employee/{id}',[EmployeeController::class,'edit'])->name('edit.employee');
Route::post('update-employee/{id}',[EmployeeController::class,'update'])->name('update.employee');


Route::get('teachers',[TeacherController::class,'index'])->name('teachers');
Route::get('add-teacher',[TeacherController::class,'create'])->name('create.teacher');
Route::post('store-teacher',[TeacherController::class,'store'])->name('store.teacher');
Route::get('delete-teacher/{id}',[TeacherController::class,'delete'])->name('delete.teacher');
Route::get('edit-teacher/{id}',[TeacherController::class,'edit'])->name('edit.teacher');
Route::post('update-teacher/{id}',[TeacherController::class,'update'])->name('update.teacher');