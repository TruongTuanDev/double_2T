<?php

use App\Http\Controllers\Ajax\LocationController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EmployerController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\AAuthController;
use App\Http\Controllers\Frontend\EAuthController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/',[HomePageController::class,'index'])->name('home.index');

Route::get('dashboard/index',[DashboardController::class,'index'])->name('dashboard.index');
Route::get('dashboard/employer',[DashboardController::class,'index'])->name('dashboard.employer');
// ->middleware('admin');
Route::get('/', [HomePageController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function(){
    // Login
    Route::get('login',[AuthController::class,'index'])->name('admin.login');
    Route::post('login',[AuthController::class,'login'])->name('admin.login');

    Route::get('register',[AuthController::class,'register'])->name('admin.register');
    Route::get('change-password',[AuthController::class,'changePassword'])->name('change.password.form');
    Route::post('change-password', [AuthController::class, 'changPasswordStore'])->name('change.password');
    Route::get('logout',[AuthController::class,'logout'])->name('auth.logout');
    
    
    Route::resource('banner', 'App\Http\Controllers\Backend\BannerController');
    // Profile
    Route::get('/profile', [UserController::class, 'profile'])->name('admin-profile');
    Route::post('/profile/{id}', [UserController::class, 'profileUpdate'])->name('profile-update');
    // Settings
    Route::get('settings', [UserController::class, 'settings'])->name('settings');
    Route::post('setting/update', [UserController::class, 'settingsUpdate'])->name('settings.update');
    //Employer
    Route::get('index',[EmployerController::class,'index'])->name('employer.index');
    Route::resource('employer', 'App\Http\Controllers\Backend\EmployerController');
    //USer 
    Route::resource('user', 'App\Http\Controllers\Backend\UserController');


    // Notification
    // Route::get('/notification/{id}', [UserController::class, 'show'])->name('admin.notification');
    // Route::get('/notifications', [NotificationController::class, 'index'])->name('all.notification');
    // Route::delete('/notification/{id}', [NotificationController::class, 'delete'])->name('notification.delete');
    // Password Change
    Route::get('change-password', [UserController::class, 'changePassword'])->name('change.password.form');
    Route::post('change-password', [UserController::class, 'changPasswordStore'])->name('change.password');
});
Route::group(['prefix' => 'user'], function(){
    Route::resource('auth', 'App\Http\Controllers\Frontend\AAuthController');
    Route::get('login',[AAuthController::class,'index'])->name('user.login');
    Route::post('login',[AAuthController::class,'login'])->name('user.login');
    // Route::get('register',[AAuthController::class,'registerForm'])->name('user.login')->middleware('login');
    Route::get('register',[AAuthController::class,'register'])->name('user.register');
});


Route::group(['prefix' => 'employer'], function(){
    //Employer
   Route::post('register',[EAuthController::class,'store'])->name('employer.register');
   Route::get('register',[EAuthController::class,'index'])->name('employer.register');
   Route::get('login',[EAuthController::class,'loginForm'])->name('employer.login');
   Route::post('login',[EAuthController::class,'login'])->name('employer.login');
   //Jobs
   Route::resource('posts','App\Http\Controllers\Backend\PostController');
   Route::get('post',[PostController::class,'index'])->name('post.index');

});

/* AJAX */
Route::get('ajax/location/getLocation',[LocationController::class,'getLocation'])->name('location.index');






