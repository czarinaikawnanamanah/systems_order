<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\User;

Route::get('/', function () {
    return view('order-form');
});

Route::post('/order', [OrderController::class, 'store'])->name('order.store');

Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/orders', [AdminController::class, 'showOrders'])->name('admin.orders');
    Route::get('/notifications', [AdminController::class, 'showNotifications'])->name('admin.notifications');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', function () {
})->name('register.post');

Auth::routes();

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
