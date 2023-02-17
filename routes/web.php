<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () { return view('login'); })->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('processLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegisterPage'])->name('register');
Route::post('/register', [RegisterController::class, 'saveUserToDatabase'])->name('saveUser');

Route::get('/home', function () { return view('home'); })->middleware('auth')->name('home');


Route::middleware(['auth'])->prefix('/todo')->group(function () {
    Route::get('', [TodoController::class, 'index'])->name('todo.index');
    Route::post('', [TodoController::class, 'store'])->name('todo.store');
    Route::get('/create', [TodoController::class, 'create'])->name('todo.create');
    Route::get('/{id}', [TodoController::class, 'edit'])->name('todo.edit');
    Route::put('/{id}', [TodoController::class, 'update'])->name('todo.update');
    Route::delete('/{id}', [TodoController::class, 'delete'])->name('todo.delete');
});

