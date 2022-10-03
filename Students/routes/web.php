<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;

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

Route::get('/', [studentsController::class, 'students'])->name('students');
Route::get('create/', [studentsController::class, 'create'])->name('create');