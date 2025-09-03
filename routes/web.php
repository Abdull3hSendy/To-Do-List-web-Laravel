<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/completed', [TaskController::class, 'completed'])->name('tasks.completed');
Route::get('/tasks/incomplete', [TaskController::class, 'incomplete'])->name('tasks.incomplete');
Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

