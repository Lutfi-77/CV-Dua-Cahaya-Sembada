<?php

use Illuminate\Support\Facades\Route;

// Controller User
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserServiceController;
use App\Http\Controllers\UserProjectController;
use App\Http\Controllers\ContactController;

// Controller Admin
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\ProjectController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/service', [UserServiceController::class, 'index'])->name('service.user');
Route::get('/project', [UserProjectController::class, 'index'])->name('project.user');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('sendMail');

Route::prefix('backend')->group(function() {
    Route::get('/', function() {
        return redirect()->route('dashboard');
    });
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('/service', [ServiceController::class, 'index'])->name('service');
        Route::get('/service/add', [ServiceController::class, 'create'])->name('service.form');
        Route::post('/service/add', [ServiceController::class, 'store'])->name('service.store');
        Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
        Route::post('/service/edit/{id}', [ServiceController::class, 'update'])->name('service.update');
        Route::get('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
        
        Route::get('/category', [CategoryController::class, 'index'])->name('category');
        Route::get('/category/add', [CategoryController::class, 'categoryAdd'])->name('category.add');
        Route::post('/category/add', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'editForm'])->name('category.editForm');
        Route::post('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
        
        Route::resource('/client', ClientController::class);
        Route::resource('/project', ProjectController::class);
    });
});
