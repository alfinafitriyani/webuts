<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Models\user;


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

Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

// Dashboard for admin
Route::get('/admincoba', function () {
    return view('admin-coba');
})->name('admincoba')->middleware('auth');

// Page for users
Route::get('/layouts', function () {
    return view('layouts');
})->name('layouts')->middleware('auth');

// Redirects after login
Route::get('/redirects', [AuthController::class, 'redirects'])->middleware('auth');

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

Route::get('/admincoba', [AuthController::class, 'admincoba'])->name('admincoba');

Route::controller(StoreController::class)->group(function () {
    Route::get('/', 'dashboard');
    Route::get('/json', 'parseJsonFile')->name('parseJsonFile');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/catalog', 'catalog')->name('catalog');
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

// produk
Route::get('/admin/produk', [AdminController::class, 'produkIndex'])->name('admin.produk.index');
Route::get('/admin/produk/create', [AdminController::class, 'produkCreate'])->name('admin.produk.create');
Route::post('/admin/produk', [AdminController::class, 'produkStore'])->name('admin.produk.store');
Route::get('/admin/produk/edit/{id}', [AdminController::class, 'produkEdit'])->name('edit.produk');
Route::put('/admin/produk/produk/{id}', [AdminController::class, 'produkUpdate'])->name('admin.produk.update');
Route::delete('/admin/produk/produk/{id}', [AdminController::class, 'produkDestroy'])->name('delete.produk');

// Other route definitions...

// Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
// Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Other route definitions...
