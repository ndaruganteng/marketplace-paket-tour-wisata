<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\auth\LoginController;
use App\http\Controllers\auth\RegisterController;

use App\http\Controllers\landing\HomeController;
use App\http\Controllers\landing\TourController;
use App\http\Controllers\landing\BlogController;
use App\http\Controllers\landing\ContactController;
use App\http\Controllers\landing\WelcomeController;
use App\http\Controllers\landing\DetailtourController;
use App\http\Controllers\landing\DetailblogController;

use App\http\Controllers\dashboard\DashboardController;
use App\http\Controllers\dashboard\UpdateblogController;
use App\http\Controllers\dashboard\UserController;

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

// landing
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/tour', [TourController::class, 'index'])->name('tour.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/detail-tour', [DetailtourController::class, 'index'])->name('detail-tour.index');
Route::get('/detail-blog', [DetailblogController::class, 'index'])->name('detail-blog.index');

//login & register
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/updateblog', [UpdateblogController::class, 'index'])->name('updateblog.index');
Route::get('/user', [UserController::class, 'index'])->name('user.index');

