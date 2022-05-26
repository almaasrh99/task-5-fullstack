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

Route::get('/', function () {
    return view('welcome');
});

Route::name('taskSchedule')->get('task-shcedule', [TaskScheduleController::class, 'index'])->middleware('auth:api');
Route::name('taskSchedule.create')->post('task-shcedule', [TaskScheduleController::class, 'create'])->middleware('auth:api');
Route::name('taskSchedule.update')->put('task-shcedule', [TaskScheduleController::class, 'updatee'])->middleware('auth:api');
Route::name('taskSchedule.patch')->patch('task-shcedule', [TaskScheduleController::class, 'patch'])->middleware('auth:api');
Route::name('taskSchedule.delete')->delete('task-shcedule', [TaskScheduleController::class, 'destroy'])->middleware('auth:api');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');