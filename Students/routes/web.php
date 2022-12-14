<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;

Route::get('/', [studentsController::class, 'students'])->name('students');
Route::get('create/', [studentsController::class, 'create'])->name('create');
Route::post('store/', [studentsController::class, 'store'])->name('store');
Route::get('delete/{id}', [studentsController::class, 'delete'])->where('id', '[0-9]+')->name('student.delete');
Route::put('update/', [studentsController::class, 'edit'])->name('student.edit');
Route::get('update/{id}', [studentsController::class, 'update'])->where('id', '[0-9]+')->name('student.update');
Route::delete('clear/{id}', [studentsController::class, 'clear'])->where('id', '[0-9]+')->name('student.clear');


// Tips: Alternate [Standard] route for CRUD
// Route::resource('/students', studentsController::class);


Route::get('{id}', [studentsController::class, 'details'])->where('id', '[0-9]+')->name('student.details');
Route::get('download/', [studentsController::class, 'download'])->name('student.download');
Route::get('trash/', [studentsController::class, 'trash'])->name('student.trash');
Route::patch('restore/{id}', [studentsController::class, 'restore'])->where('id', '[0-9]+')->name('student.restore');


// FAllback route
Route::fallback([studentsController::class, 'students']);