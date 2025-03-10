<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Notification;
use Mail;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
            'item' => 'required|string'
        ]);

        $order = Order::create([
            'email' => $request->email,
            'name' => $request->name,
            'item' => $request->item
        ]);

        Notification::create(['title' => 'New order from ' . $request->name]);

        Mail::raw("Your order for {$request->item} has been placed!", function ($message) use ($request) {
            $message->to($request->email)
                    ->subject("Order Confirmation");
        });

        return back()->with('success', 'Order placed successfully!');
    }
}
