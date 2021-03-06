<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
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

Route::view('/home','index')->name('index');
Route::view('/about','about')->name('about');
Route::view('/admin','admin.index');

Route::prefix('admin')->group(function(){
    Route::resource('/courses',CourseController::class);
    Route::resource('/teachers',TeacherController::class);
});
