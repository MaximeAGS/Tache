<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
})->name('index');

Route::controller(SiteController::class)->group(function () {
    Route::get('/about', 'About')->name('about');
    Route::get('/contact', 'Contact')->name('contact');
    Route::get('/projet', 'Projet')->name('projet');
    Route::get('/service1', 'Service1')->name('service1');
    Route::get('/service2', 'Service2')->name('service2');
    Route::get('/service3', 'Service3')->name('service3');
    Route::get('/service4', 'Service4')->name('service4');
    Route::get('/service5', 'Service5')->name('service5');
    Route::get('/service6', 'Service6')->name('service6');
    
});

require __DIR__.'/user.php';   
require __DIR__.'/admin.php';  