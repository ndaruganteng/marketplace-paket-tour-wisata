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
use App\http\Controllers\landing\DetailtransaksiController;
use App\http\Controllers\landing\TransaksiController;
use App\http\Controllers\landing\BookingController;
use App\http\Controllers\landing\MitraController;

use App\http\Controllers\dashboard\DashboardController;
use App\http\Controllers\dashboard\ViewdatatourController;
use App\http\Controllers\dashboard\CreatetourController;
use App\http\Controllers\dashboard\EdittourController;
use App\http\Controllers\dashboard\UserController;
use App\http\Controllers\dashboard\ProfileController;
use App\http\Controllers\dashboard\ManajementourController;
use App\http\Controllers\dashboard\ManajemenorderController;
use App\http\Controllers\dashboard\ManajemenuserbiroController;
use App\http\Controllers\dashboard\ManajemenusermemberController;
use App\http\Controllers\dashboard\KategoritourController;
use App\http\Controllers\dashboard\PesanController;

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
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::get('/detail-transaksi', [DetailtransaksiController::class, 'index'])->name('detail-transaksi.index');
Route::get('/mitra', [MitraController::class, 'index'])->name('mitra.index');

//login & register
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/manajementour', [ManajementourController::class, 'index'])->name('manajementour.index');
Route::get('/manajemenorder', [ManajemenorderController::class, 'index'])->name('manajemenorder.index');
Route::get('/manajemenuserbiro', [ManajemenuserbiroController::class, 'index'])->name('manajemenuserbiro.index');
Route::get('/manajemenusermember', [ManajemenusermemberController::class, 'index'])->name('manajemenusermember.index');
Route::get('/kategoritour', [KategoritourController::class, 'index'])->name('kategoritour.index');
Route::get('/pesan', [PesanController::class, 'index'])->name('pesan.index');


// tour biro
Route::get('/viewdatatour', [ViewdatatourController::class, 'index'])->name('viewdatatour.index');
Route::get('/create-tour', [ViewdatatourController::class, 'tambah'])->name('create-tour.index');
Route::post('/create-tour', [ViewdatatourController::class, 'store'])->name('Tour.index');
Route::get('/viewdatatour/edit/{id}', [ViewdatatourController::class, 'edit'])->name('edit-tour.index');
Route::put('/viewdatatour/update/{id}', [ViewdatatourController::class, 'update'])->name('viewdataTour.index');
Route::get('/viewdatatour/hapus/{id}', [ViewdatatourController::class, 'hapus'])->name('hapus.index');


