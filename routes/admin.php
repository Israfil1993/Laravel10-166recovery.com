<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\AboutController;


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

// ********************* Dashboard Route ***********************************
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// ********************* Profile Route *************************************
    Route::get('profile', [AuthenticationController::class, 'editProfile'])->name('edit.profile');
    Route::post('profile-update', [AuthenticationController::class, 'updateProfile'])->name('update.profile');

// ********************* Setting Route *********************
    Route::get('setting-list', [SettingController::class, 'list'])->name('setting.list');
    Route::get('setting-create', [SettingController::class, 'create'])->name('setting.create');
    Route::post('setting-store', [SettingController::class, 'store'])->name('setting.store');
    Route::get('setting-edit/{id}', [SettingController::class, 'edit'])->name('setting.edit');
    Route::put('setting-update/{id}', [SettingController::class, 'update'])->name('setting.update');
    Route::get('setting-delete/{id}', [SettingController::class, 'delete'])->name('setting.delete');

// ********************* Contact Route *********************
    Route::get('contact-list', [ContactController::class, 'list'])->name('contact.list');
    Route::get('contact-create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('contact-store', [ContactController::class, 'store'])->name('contact.store');
    Route::get('contact-edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('contact-update/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::get('contact-delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');
    Route::get('contact-message-list', [ContactMessageController::class, 'list'])->name('contact.message.list');
    Route::get('contact-message-delete/{id}', [ContactMessageController::class, 'delete'])->name('contact.message.delete');


// ********************* Services Route *********************
    Route::get('services-list', [ServicesController::class, 'list'])->name('services.list');
    Route::get('services-create', [ServicesController::class, 'create'])->name('services.create');
    Route::post('services-store', [ServicesController::class, 'store'])->name('services.store');
    Route::get('services-edit/{id}', [ServicesController::class, 'edit'])->name('services.edit');
    Route::put('services-update/{id}', [ServicesController::class, 'update'])->name('services.update');
    Route::get('services-delete/{id}', [ServicesController::class, 'delete'])->name('services.delete');

// ********************* About Us Route *********************
    Route::get('about-list', [AboutController::class, 'list'])->name('about.list');
    Route::get('about-create', [AboutController::class, 'create'])->name('about.create');
    Route::post('about-store', [AboutController::class, 'store'])->name('about.store');
    Route::get('about-edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('about-update/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::get('about-delete/{id}', [AboutController::class, 'delete'])->name('about.delete');

// ********************* Blogs Route *********************
    Route::get('blog-list', [BlogsController::class, 'list'])->name('blog.list');
    Route::get('blog-create', [BlogsController::class, 'create'])->name('blog.create');
    Route::post('blog-store', [BlogsController::class, 'store'])->name('blog.store');
    Route::get('blog-edit/{id}', [BlogsController::class, 'edit'])->name('blog.edit');
    Route::put('blog-update/{id}', [BlogsController::class, 'update'])->name('blog.update');
    Route::get('blog-delete/{id}', [BlogsController::class, 'delete'])->name('blog.delete');

// ********************* Faq Route *********************
    Route::get('faq-list', [FaqController::class, 'list'])->name('faq.list');
    Route::get('faq-create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('faq-store', [FaqController::class, 'store'])->name('faq.store');
    Route::get('faq-edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
    Route::put('faq-update/{id}', [FaqController::class, 'update'])->name('faq.update');
    Route::get('faq-delete/{id}', [FaqController::class, 'delete'])->name('faq.delete');








});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'guest'], function (){
    Route::get('login', [AuthenticationController::class, 'showLogin'])->name('showLogin');
    Route::post('login', [AuthenticationController::class, 'handleLogin'])->name('handle-login');
});

Route::get('logout', [AuthenticationController::class, 'logout'])->name('admin.logout');

