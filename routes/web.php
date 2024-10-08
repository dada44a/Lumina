<?php

use App\Http\Controllers\Subscribe;
use App\Http\Middleware\DateChecker;
use App\Http\Middleware\UserRestrict;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SignOutController;
use App\Http\Middleware\RedirectIfNotAdmin;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\CoursePlayController;
use App\Http\Controllers\CourseViewController;
use App\Http\Controllers\RecoveryMailController;
use App\Http\Controllers\SubscriptionConfirmController;
use App\Http\Controllers\AdminControllers\CategoryUpload;
use App\Http\Controllers\AdminControllers\AllVideosController;
use App\Http\Controllers\AdminControllers\AdminLoginController;
use App\Http\Controllers\AdminControllers\AdminUploadController;
use App\Http\Controllers\AdminControllers\ChangeEmailController;
use App\Http\Controllers\AdminControllers\AdminAccountController;
use App\Http\Controllers\AdminControllers\AdminSignOutController;
use App\Http\Controllers\AdminControllers\AdminRegisterController;
use App\Http\Controllers\AdminControllers\AdminDashboardController;
use App\Http\Controllers\AdminControllers\AdminUserTableController;
use App\Http\Controllers\AdminControllers\ChangePasswordController;
use App\Http\Controllers\AdminControllers\AdminInstructorController;
use App\Http\Controllers\AdminControllers\AdminAppliedUserController;


// index route
Route::get('/', [HomeController::class, 'index'])->name('index');


// login route
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);

//signup route
Route::get('/signup', [RegisterController::class, 'index'])->name('signup')->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store']);
   
Route::get('forget',[ForgotPassword::class,'index'])->name('forget.password');
Route::post('forget',[ForgotPassword::class,'store']);

Route::get('forget/{token}',[ForgotPassword::class,'recover'])->name('forget.password.recover');
Route::post('forget/{token}',[ForgotPassword::class,'recovery']);

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');


Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/library', [LibraryController::class, 'index'])->name('library')->middleware('auth');
Route::post('/logout', [SignOutController::class,'store'])->name('logout');



Route::get('/course/{course}',[CourseViewController::class,'index'])->name('courseinfo')->middleware('auth');
Route::post('/course/{course}',[CourseViewController::class,'store']);

Route::middleware([UserRestrict::class])->post('/course/{course}/watch',[CoursePlayController::class,'store'])->name('courseplay');

Route::post('/subscribe/{plan}',[SubscribeController::class,'index'])->name('subscribe')->middleware('auth');
Route::post('/subscribe/{plan}/processing',[SubscribeController::class,'store'])->name('subscribe_process')->middleware('auth');

Route::prefix('admin')->name('admin.')->group(function () {
    // Registration routes
    Route::get('signup', [AdminRegisterController::class, 'index'])->name('signup');
    Route::post('signup', [AdminRegisterController::class, 'store'])->name('signup.post');

    // Login routes
    Route::get('login', [AdminLoginController::class, 'index'])->name('login');
    Route::post('login', [AdminLoginController::class, 'store'])->name('login.post');

    Route::post('signout', [AdminSignOutController::class, 'store'])->name('signout');
 

    // Admin middleware group
    Route::middleware([RedirectIfNotAdmin::class])->group(function () {

        // Dashboard route
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        // Users management routes
        Route::get('users', [AdminUserTableController::class, 'index'])->name('users');
        Route::get('appliedusers', [AdminAppliedUserController::class, 'index'])->name('applied');

        // Upload routes
        Route::get('upload', [AdminUploadController::class, 'index'])->name('upload');
        Route::post('upload', [AdminUploadController::class, 'store'])->name('upload.post');

        // Courses management routes
        Route::get('courses', [AllVideosController::class, 'index'])->name('courses');
        Route::post('courses/remove', [AllVideosController::class, 'remove'])->name('courses.remove');

        // Instructor management routes
        Route::get('instructor', [AdminInstructorController::class, 'index'])->name('instructor');
        Route::post('instructor/upload', [AdminInstructorController::class, 'store'])->name('instructor.upload');
        Route::post('instructor/remove/{email}', [AdminInstructorController::class, 'remove'])->name('instructor.remove');


        Route::get('category', [CategoryUpload::class, 'index'])->name('category');
        Route::post('category/upload', [CategoryUpload::class, 'store'])->name('category.upload');
        Route::post('category/remove/{title}', [CategoryUpload::class, 'remove'])->name('category.remove');


        // Subscription management routes
        Route::post('subscribe/accept', [AdminAppliedUserController::class, 'store'])->name('subscribe.accepted');
        Route::post('subscribe/{username}/reject', [AdminAppliedUserController::class, 'remove'])->name('subscribe.rejected'); 

        Route::get('accounts',[AdminAccountController::class,'index'])->name('accounts');
        Route::get('accounts/change/password',[ChangePasswordController::class,'index'])->name('accounts.change.password');
        Route::post('accounts/change/password',[ChangePasswordController::class,'store']);
        
        
        Route::get('accounts/change/email',[ChangeEmailController::class,'index'])->name('accounts.change.email');
        Route::post('accounts/change/email',[ChangeEmailController::class,'store'])->name('accounts.change.email');
    });
});

Route::get('sendmail/{token}/{email}',[RecoveryMailController::class,'sendMail'])->name('sendmail');

?>