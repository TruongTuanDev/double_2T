<?php

use App\Http\Controllers\Ajax\LocationController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EmployerController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\FavJobController;
use App\Http\Controllers\Frontend\AAuthController;
use App\Http\Controllers\Frontend\EAuthController;
use App\Http\Controllers\Frontend\EmployerController as FrontendEmployerController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\StudentController;
use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
    
        return redirect('/home');
    })->middleware(['auth', 'signed'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
    
        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

    Route::get('dashboard/index',[DashboardController::class,'index'])->name('dashboard.index');
    // ->middleware('admin');
    Route::get('/', [HomePageController::class, 'index'])->name('home');

<<<<<<< HEAD
    Route::get('job-detail/{id}', [PostController::class, 'jobDetail'])->name('job-detail');
    Route::get('companydetail/{id}', [FrontendEmployerController::class, 'jobDetail'])->name('companydetail');
=======
    Route::get('/{id}', [PostController::class, 'jobDetail'])->name('job-detail');
    Route::get('add-to-favorites', 'FavJobController@addToCart');
    
    Route::get('fav-job/{id}', [PostController::class, 'addToCart'])->name('fav-job');
>>>>>>> 76ca51760944dad1c202a75fa55cdb193af36ebe


    Route::group(['prefix' => 'admin'], function(){
    Route::get('/',[AuthController::class,'register']);
    Route::get('login',[AuthController::class,'index'])->name('admin.login');
    Route::post('login',[AuthController::class,'login'])->name('admin.login');
    Route::get('register',[AuthController::class,'register'])->name('admin.register');
    Route::post('register',[AuthController::class,'store'])->name('admin.register');
    Route::get('change-password',[AuthController::class,'changePassword'])->name('change.password.form');
    Route::post('change-password', [AuthController::class, 'changPasswordStore'])->name('change.password');
    Route::get('logout',[AuthController::class,'logout'])->name('auth.logout');
    
    
    Route::resource('banner', 'App\Http\Controllers\Backend\BannerController');
    Route::resource('major', 'App\Http\Controllers\Backend\MajorController');
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
    Route::get('login',[AAuthController::class,'loginForm'])->name('user.login');
    Route::post('login',[AAuthController::class,'login'])->name('user.login');
    Route::post('register',[AAuthController::class,'register'])->name('user.register');
    Route::get('register',[AAuthController::class,'index'])->name('user.register');
    Route::get('dashboard',[StudentController::class,'home'])->name('user.dashboard');
    Route::get('dashboard/information/{iduser}',[StudentController::class,'UpdateInfor'])->name('user.information');
    Route::post('dashboard/store',[StudentController::class,'store'])->name('user.store');
});


Route::group(['prefix' => 'employer'], function(){
    //Employer
   Route::post('register',[EAuthController::class,'register'])->name('employer.register');
   Route::get('register',[EAuthController::class,'index'])->name('employer.register');
   Route::get('login',[EAuthController::class,'loginForm'])->name('employer.login');
   Route::post('login',[EAuthController::class,'login'])->name('employer.login');
   //Jobs
   Route::get('post',[PostController::class,'index'])->name('post.index');
   Route::get('create',[PostController::class,'create'])->name('post.create');
   Route::post('store',[PostController::class,'store'])->name('post.store');
   Route::get('edit',[PostController::class,'edit'])->name('post.edit');
   Route::post('destroy',[PostController::class,'destroy'])->name('post.destroy');

   Route::get('dashboard',[DashboardController::class,'employer'])->name('employer.dashboard');

   Route::get('update',[FrontendEmployerController::class,'update'])->name('employer.update');
   Route::post('update',[FrontendEmployerController::class,'updateInfor'])->name('employer.update');

   Route::get('index',[FrontendEmployerController::class,'index'])->name('employer.list');
});

/* AJAX */
Route::get('ajax/location/getLocation',[LocationController::class,'getLocation'])->name('location.index');
// Route::get('/check-auth', 'AuthController@checkAuth');






