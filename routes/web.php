<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Notes
Route::get('/notes', [App\Http\Controllers\NoteController::class, 'index'])->name('notes.index');
Route::get('/notes/create', [App\Http\Controllers\NoteController::class, 'create'])->name('notes.create');
Route::post('/notes/store', [App\Http\Controllers\NoteController::class, 'store'])->name('notes.store');
Route::get('/notes/edit/{note}', [App\Http\Controllers\NoteController::class, 'edit'])->name('notes.edit');
Route::put('/notes/update/{note}', [App\Http\Controllers\NoteController::class, 'update'])->name('notes.update');
Route::get('/notes/show/{note}', [App\Http\Controllers\NoteController::class, 'show'])->name('notes.show');
Route::delete('/notes/destroy/{note}', [App\Http\Controllers\NoteController::class, 'destroy'])->name('notes.destroy');




