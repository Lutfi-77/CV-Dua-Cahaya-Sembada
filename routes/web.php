<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ServiceController;

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
        Route::get('/service/add', [ServiceController::class, 'create'])->name('service.form');
        Route::post('/service/add', [ServiceController::class, 'store'])->name('service.store');
        Route::get('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
        // Route::resource('/service', ServiceController::class);
        
        Route::get('/category', [CategoryController::class, 'index'])->name('category');
        Route::get('/category/add', [CategoryController::class, 'categoryAdd'])->name('category.add');
        Route::post('/category/add', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'editForm'])->name('category.editForm');
        Route::post('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    });
});
