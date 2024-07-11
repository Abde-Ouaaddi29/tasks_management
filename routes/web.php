<?php

use App\Http\Controllers\ErrorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthenticateUser;
use App\Http\Middleware\ErrorPage;
use Illuminate\Support\Facades\Route;



Route::middleware([AuthenticateUser::class])->group( function () {
    Route::get('/', [TodoController::class , 'index'])->name('todo.index');
    Route::post('/todos', [TodoController::class , 'store'])->name('todo.store');
    Route::delete('/todos/{id}', [TodoController::class , 'destroy'])->name('todo.destroy');
    Route::put('/todos/{id}', [TodoController::class , 'update'])->name('todo.update');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/settings', [SettingController::class, 'edit'])->name('setting.edit');
    Route::put('/settings', [SettingController::class, 'update'])->name('setting.update');
} );


Route::middleware([ErrorPage::class])->group( function () {
    Route::get('/sginup' , [UserController::class, 'create'])->name('user.create');
    Route::post('/sginup' , [UserController::class, 'store'])->name('user.store');
    
    Route::get('/login' , [LoginController::class, 'login'])->name('login.login');
    Route::post('/login' , [LoginController::class, 'authenticate'])->name('login.auth');

    // Route::get('/reset_password' , [ResetPassword::class, 'create'])->name('reset.reset');
    // Route::post('/reset_password' , [ResetPassword::class, 'store'])->name('reset.store');
} );


Route::get('/erroPage' , [ErrorController::class, 'index'])->name('user.error');
Route::fallback([ErrorController::class, 'index']);



