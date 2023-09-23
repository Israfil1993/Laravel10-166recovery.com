<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\AboutController;

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


Route::prefix('{lang?}')->middleware('locale')->group(callback: function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/', [HomeController::class, 'homeMessage'])->name('home.message');
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::post('contact', [ContactController::class, 'message'])->name('contact.message');
    Route::get('blog', [BlogController::class, 'index'])->name('blog');
    Route::get('blog-inside/{id?}', [BlogController::class, 'showBlogInside'])->name('blog.inside.show');
    Route::get('service', [ServiceController::class, 'showService'])->name('service');
    Route::get('service-inside/{id}', [ServiceController::class, 'showServiceInside'])->name('service.inside.show');
    Route::get('about', [AboutController::class, 'showAbout'])->name('about');
});
