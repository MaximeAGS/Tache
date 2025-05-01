<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;


Route::controller(LoginController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', 'ShowLoginForm')->name('login');
    Route::post('/login', 'Login');
    Route::post('/logout', 'Logout')->name('logout');
    Route::get('/index', 'Index')->name('index');
});

Route::prefix('admin')->middleware('auth')->controller(AdminController::class)->group(function () {
    Route::get('/employee', 'Employee')->name('employee');
    Route::get('/leave', 'Leave')->name('leave');
    Route::get('/review', 'Review')->name('review');
    Route::get('/report', 'Report')->name('report');
    Route::get('/projet', 'Manage')->name('manage');
    Route::get('/setting/{section?}', 'Setting')->name('setting');
    Route::get('/calendar', 'Calendar')->name('calendar');
    Route::get('/edit_profile', 'EditProfile')->name('editprofile');
    Route::post('/profile-photo',  'storeProfilePhoto')->name('storeprofile');
    Route::post('/change-password',  'changePassword')->name('edit_password');
    Route::post('/taches/{task}/update-statut',  'updateStatut')->name('updateStatut');
    Route::post('/taches/{task}/update-priorite',  'updatePriorite')->name('updatePriorite');
});


Route::middleware(['auth'])->group(function () {
        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

            // Tasks

        Route::prefix('admin')->middleware('auth')->controller(TaskController::class)->group(function () {
            Route::get('/taches',  'Tache')->name('taches');
            Route::get('/taches/create',  'create')->name('taches.create');
            Route::post('/tasks',  'store')->name('tasks.store');
            Route::get('/taches/{id}/', 'edit')->name('taches.edit');
            Route::put('/taches/{task}', 'update')->name('taches.update');
            Route::delete('/taches/{id}', 'destroy')->name('taches.destroy');



        Route::post('/tasks/{task}/toggle-complete', [TaskController::class, 'toggleComplete'])->name('tasks.toggle-complete');
       

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


    Route::prefix('admin')->middleware('auth')->controller(ProjectController::class)->group(function () {
        Route::get('/projets', 'index')->name('manage');
        Route::get('/projets/{id}/', 'edit')->name('taches.edit');
        Route::put('/projets/{projet}', 'update')->name('taches.update');
        Route::delete('/projet/{id}', 'destroy')->name('taches.destroy');
    });



});
