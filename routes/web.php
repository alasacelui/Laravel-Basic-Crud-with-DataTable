<?php

// Facades

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Shared Restful Controllers
use App\Http\Controllers\All\ProfileController;

// Admin Restful Controllers
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobPostController;
use App\Http\Controllers\All\TmpImageUploadController;


Route::get('/', function () {
    return redirect(route('login'));
});


// Admin
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'],function() {
    Route::resource('dashboard', DashboardController::class); // admin dashboard
   
    Route::resource('jobpost', JobPostController::class); // manage job postts
});


// Auth
Route::group(['middleware' => ['auth']],function() {
    // TMP FILE UPLOAD
    Route::delete('tmp_upload/revert', [TmpImageUploadController::class, 'revert']);
    Route::post('tmp_upload/content', [TmpImageUploadController::class, 'faqImageUpload'])->name('tmpupload.faqImageUpload');
    Route::resource('tmp_upload', TmpImageUploadController::class);
    Route::resource('profile', ProfileController::class)->parameter('profile', 'user');;
  
});



Auth::routes(['register' => false]);

