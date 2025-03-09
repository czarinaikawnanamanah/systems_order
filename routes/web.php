<?php

use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('order-form');
});

Route::post('/order', [OrderController::class, 'store']);
