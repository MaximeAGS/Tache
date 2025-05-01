<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CommentController;


Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'ShowLoginForm')->name('login');
    Route::post('login', 'Login');
    Route::get('register', 'ShowRegisterForm')->name('user.register');
    Route::post('insert', 'Insert')->name('user.insert');
    Route::post('logout', 'Logout')->name('user.logout');
    Route::get('index', 'Index')->name('user.index');
});

Route::prefix('user')->middleware('auth')->controller(UserController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('user.dashboard');
    Route::get('/profile', 'profile')->name('user.profile');
});


Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Tasks
    Route::post('/tasks/{task}/toggle-complete', [TaskController::class, 'toggleComplete'])->name('tasks.toggle-complete');
    Route::resource('tasks', TaskController::class);

    // Projects
    Route::resource('projects', ProjectController::class);

    //// Comments
    //Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    //Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

    //// Ressources accessibles uniquement par les administrateurs
    //Route::middleware(['can:admin'])->group(function () {
    //    Route::resource('users', UserController::class);
    //    Route::resource('departments', DepartmentController::class);
    //    Route::resource('task-statuses', TaskStatusController::class);
    //});
});



