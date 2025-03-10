<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function showOrders()
    {
        return view('admin.orders'); 
    }

    public function showNotifications()
    {
        return view('admin.notifications'); 
    }
}
