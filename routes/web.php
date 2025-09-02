<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\customerticketController;
use App\Http\Controllers\facultyController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');
    Route::get('/subjects/create', [SubjectController::class, 'create'])->name('subjects.create');
    Route::post('/subjects/store', [SubjectController::class, 'store'])->name('subjects.store');
    Route::get('/subject/{id}/edit', [SubjectController::class, 'edit'])->name('subjects.edit');
    Route::put('/subject/{id}', [SubjectController::class, 'update'])->name('subjects.update');
    Route::delete('/subject/{id}', [SubjectController::class, 'destroy'])->name('subjects.destroy');

    Route::get('/students', [StudentController::class, 'index'])->name('students');          // list
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create'); // form
    Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');   // save
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit'); // edit form
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update'); // update
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy'); // delete

    Route::get('/faculty',[facultyController::class,'index'])->name('faculty.index');
    Route::get('/faculty/create',[facultyController::class,'create'])->name('faculty.create');
    Route::post('/faculty/store',[facultyController::class,'store'])->name('faculty.store');
    Route::get('/faculty/{id}/edit',[facultyController::class,'edit'])->name('faculty.edit');
    Route::put('/faculty/{id}', [facultyController::class, 'update'])->name('faculty.update');
    Route::delete('/faculty/{id}', [facultyController::class, 'destroy'])->name('faculty.destroy');

    Route::get('/customerticket', [customerticketController::class, 'index'])->name('customertcket');
    Route::get('/customerticket/create', [customerticketController::class, 'store'])->name('customerticket.store');
});



