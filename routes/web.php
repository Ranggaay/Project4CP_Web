<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PrediksiController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

// Admin Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/admin', [AdminController::class, 'dashboardAdmin'])->name('dashboardAdmin');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/articles', [AdminController::class, 'articles'])->name('articles');
    Route::post('/articles', [AdminController::class, 'storeArticle'])->name('articles.store');
    Route::put('/articles/{id}', [AdminController::class, 'updateArticle'])->name('articles.update');
    Route::delete('/articles/{id}', [AdminController::class, 'deleteArticle'])->name('articles.delete');
    Route::post('/users/{id}/toggle-status', [AdminController::class, 'toggleUserStatus'])->name('users.toggle-status');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('login', [AuthController::class, 'login'])->name('login');
    // Route::get('login', [AuthController::class, 'loginProses'])->name('loginProses');
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('user/create', [UserController::class, 'create'])->name('userCreate');
    Route::get('prediksi', [PrediksiController::class, 'index'])->name('prediksi');
    Route::get('artikel', [ArtikelController::class, 'index'])->name('artikel');
    
    })
    ;
