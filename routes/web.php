<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('backend')->group(function() {
    Route::get('/', function() {
        return redirect()->route('dashboard');
    });
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/service', [ServiceController::class, 'index'])->name('service');
        Route::get('/service/add', [ServiceController::class, 'addForm'])->name('service.form');
        
        Route::get('/category', [CategoryController::class, 'index'])->name('category');
        Route::get('/category/add', [CategoryController::class, 'categoryAdd'])->name('category.add');
    });
});
