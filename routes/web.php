<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducareerController;
use App\Http\Controllers\ForgotPasswordController;
use App\Models\Feature;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Pages
Route::get('/', [DashboardController::class, 'index'])
    ->name('home')
    ->withoutMiddleware('auth');
Route::get('/home', [DashboardController::class, 'index'])
    ->name('home')
    ->withoutMiddleware('auth');
Route::get('/about', [DashboardController::class, 'about'])
    ->name('about')
    ->withoutMiddleware('auth');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->name('dashboard')
    ->middleware('auth');
Route::get('/educareer', [EducareerController::class, 'index'])->name(
    'educareer'
);
Route::get('/mentor', [EducareerController::class, 'mentor'])->name('mentor');
Route::get('/detail-kelas', [EducareerController::class, 'kelas'])->name(
    'kelas'
);

Route::get('/flap', [EducareerController::class, 'flap'])->name('flap');
Route::get('/blog', [FeatureController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [FeatureController::class, 'detailBlog'])->name(
    'detail-blog'
);
Route::get('/syarat-dan-ketentuan', [FeatureController::class, 'tnc'])->name(
    'TnC'
);
Route::get('/kebijakan-privasi', [FeatureController::class, 'privacy'])->name(
    'privacy_policy'
);

/*
|--------------------------------------------------------------------------
| Routes System
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['auth', 'role:Admin,Writer']], function () {
    Route::get('/dashboard', [FeatureController::class, 'dashboard'])->name(
        'dashboard-writer'
    );

    Route::get('/dashboard/blogs', [
        FeatureController::class,
        'uploaded',
    ])->name('blog-writer');

    Route::get('/dashboard/schedules', [
        FeatureController::class,
        'schedule',
    ])->name('schedule-writer');

    Route::post('/dashboard/blogs', [
        FeatureController::class,
        'storeBlog',
    ])->name('store-blog');

    Route::get('/blog/create', [FeatureController::class, 'create'])->name(
        'create-writer'
    );
    Route::post('/blog/uploaded/delete', [
        FeatureController::class,
        'destroyBlog',
    ])->name('destroy-blog');
    Route::get('/dashboard/blogs/{blogs:id}', [
        FeatureController::class,
        'detail',
    ])->name('detail-blog-writer');
    Route::post('/blog/uploaded/update', [
        FeatureController::class,
        'updateBlog',
    ])->name('update-blog');
    Route::post('/blog/upload-image', [
        FeatureController::class,
        'uploadImage',
    ]);
    Route::get('/dashboard/logout', [FeatureController::class, 'logout'])->name(
        'logout-dashboard'
    );
    Route::get('/dashboard/mentors', [
        FeatureController::class,
        'detailMentor',
    ])->name('detail-mentor');
    Route::get('/dashboard/classes', [
        FeatureController::class,
        'classSchedule',
    ])->name('classSchedule-writer');
    Route::get('/blog/classSchedule/Create', [
        FeatureController::class,
        'createClassSchedule',
    ])->name('create-class-schedule-writer');
});

Route::get('/dashboard/login', [FeatureController::class, 'writer'])
    ->name('login_writer')
    ->middleware('guest');
Route::post('/blog/login', [FeatureController::class, 'auth'])->name(
    'auth-writer'
);

Route::get('/slicing_blog', [EducareerController::class, 'slicing'])->name(
    'slicing'
);

//Login feature
//Login feat ure
Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');
Route::post('/login', [LoginController::class, 'auth'])->name('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Register feature
Route::get('/register', [RegisterController::class, 'index'])
    ->name('register')
    ->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('store');

//Forgot passsword feature
Route::get('/forgot-password', [ForgotPasswordController::class, 'forgot_view'])
    ->name('password_request')
    ->middleware('guest');
Route::post('/forgot-password', [
    ForgotPasswordController::class,
    'password_email',
])
    ->name('password_email')
    ->middleware('guest');
Route::get('/reset-password{token}', [
    ForgotPasswordController::class,
    'password_reset',
])
    ->name('password.reset')
    ->middleware('guest');
Route::post('/reset-password', [
    ForgotPasswordController::class,
    'password_update',
])
    ->name('password_update')
    ->middleware('guest');