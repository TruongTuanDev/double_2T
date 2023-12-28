<?php

use App\Http\Controllers\Ajax\LocationController;
use App\Http\Controllers\Ajax\PostController as AjaxPostController;
use App\Http\Controllers\Ajax\FollowController as AjaxFollowController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EmployerController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\PostController as BackendPostController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\AAuthController;
use App\Http\Controllers\Frontend\EAuthController;
use App\Http\Controllers\Frontend\EmployerController as FrontendEmployerController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\StudentController;
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

    Route::get('dashboard/index',[DashboardController::class,'index'])->name('dashboard.index')->middleware('admin');
    // ->middleware('admin');
    Route::get('/', [HomePageController::class, 'index'])->name('home');



    

    Route::get('job-detail/{id}', [PostController::class, 'jobDetail'])->name('job-detail');
    Route::get('companydetail/{id}', [FrontendEmployerController::class, 'jobDetail'])->name('companydetail');
    Route::get('add-to-favorites', 'FavJobController@addToCart');

    Route::group(['prefix' => 'admin'], function(){
    Route::get('/',[AuthController::class,'register']);
    Route::get('login',[AuthController::class,'index'])->name('admin.login');
    Route::post('login',[AuthController::class,'login'])->name('admin.login');
    Route::get('register',[AuthController::class,'register'])->name('admin.register');
    Route::post('register',[AuthController::class,'store'])->name('admin.register');
    Route::get('change-password',[AuthController::class,'changePassword'])->name('change.password.form');
    Route::post('change-password', [AuthController::class, 'changPasswordStore'])->name('change.password');
    Route::get('logout',[AuthController::class,'logout'])->name('auth.logout');


    
    Route::get('list',[UserController::class,'index'])->name('admin.index');

    Route::get('listPost',[BackendPostController::class,'listpost'])->name('posts.list');
    Route::get('posts/active',[BackendPostController::class,'active'])->name('posts.active');
    Route::get('posts/inactive',[BackendPostController::class,'inactive'])->name('posts.inactive');
    Route::get('posts/Updateactive/{id_post}',[BackendPostController::class,'updateactive'])->name('posts.updateactive');
    Route::get('admin/create',[UserController::class,'create'])->name('admin.create');
    
    
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
    //User 
    Route::resource('user', 'App\Http\Controllers\Backend\UserController');
    Route::get('news/active', [NewsController::class, 'active'])->name('news.active');
    Route::get('news/inactive', [NewsController::class, 'inactive'])->name('news.inactive');
    Route::get('news/updateactive/{id_news}', [NewsController::class, 'updateactive'])->name('news.updateactive');
    Route::post('employer/{id}',[EmployerController::class,'update'])->name('admin.employer.update');
    
    //User admin.
    Route::resource('admin', 'App\Http\Controllers\Backend\UserController');


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
    Route::get('apply/list',[StudentController::class,'applyList'])->name('job.apply');
    Route::get('favourite',[StudentController::class,'favourite'])->name('job.fav');
    Route::get('dashboard/information/{iduser}',[StudentController::class,'UpdateInfor'])->name('user.information');
    Route::post('dashboard/store',[StudentController::class,'store'])->name('user.store');
    Route::get('dashboard/following',[StudentController::class,'followingList'])->name('user.following');
});
Route::post('job/send',[PostController::class,'uploadFileCV'])->name('sendinfor.apply');
Route::get('follow/{id_emp}',[AjaxFollowController::class,'follow'])->name('user.follow');

// Route::post('/upload-file',[PostController::class,'uploadFileCV'])->name('file.upload');

Route::group(['prefix' => 'employer'], function(){
    //Employer
   Route::post('register',[EAuthController::class,'register'])->name('employer.register');
   Route::get('register',[EAuthController::class,'index'])->name('employer.register');
   Route::get('login',[EAuthController::class,'loginForm'])->name('employer.login');
   Route::post('login',[EAuthController::class,'login'])->name('employer.login');
   Route::get('logout',[EAuthController::class,'logout'])->name('employer.logout');
   //Jobs
   Route::get('post',[PostController::class,'index'])->name('post.index')->middleware('employer.status');
   Route::get('create',[PostController::class,'create'])->name('post.create')->middleware('employer.status');
   Route::post('store',[PostController::class,'store'])->name('post.store')->middleware('employer.status');
   Route::get('edit',[PostController::class,'edit'])->name('post.edit')->middleware('employer.status');
   Route::post('destroy',[PostController::class,'destroy'])->name('post.destroy')->middleware('employer.status');

   Route::get('dashboard',[DashboardController::class,'employer'])->name('employer.dashboard');

   Route::get('update',[FrontendEmployerController::class,'update'])->name('employer.update');
   Route::post('update',[FrontendEmployerController::class,'updateInfor'])->name('employer.updatei');

   Route::get('index',[FrontendEmployerController::class,'index'])->name('employer.list');
   Route::resource('news', 'App\Http\Controllers\Frontend\NewsController')->middleware('employer.status');

   Route::get('student/pass',[PostController::class,'listPass'])->name('student.pass.list');
   Route::get('student/fail',[PostController::class,'listFail'])->name('student.fail.list');
   Route::get('student/handle',[PostController::class,'listHandle'])->name('student.handle.list');
   Route::get('listFollower',[FrontendEmployerController::class,'listFollower'])->name('follower.index');
   Route::delete('/remove-applicant/{id_job}/{id_student}', [PostController::class, 'removeApplicant'])->name('remove.applicant');
   Route::delete('/rg/{id_student}', [PostController::class, 'removeApplicantt'])->name('apply.pass');
});

/* AJAX */
Route::get('ajax/location/getLocation',[LocationController::class,'getLocation'])->name('location.index');
Route::get('/check-auth',[AuthController::class,'checkAuth' ])->name('check-auth');
Route::post('/filter-employers', [EmployerController::class, 'filter'])->name('filter-employers');
Route::post('/add-job', 'AjaxPostController@addFavouriteJob')->name('add.job');
Route::get('/add-to-cart/{post}', [AjaxPostController::class, 'addToCart'])->name('cart.add')->middleware('student.status');
Route::get('/viec-lam',[PostController::class, 'searchJobs'])->name('search.job');






