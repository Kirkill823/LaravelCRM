<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{

    public function index(){
         $orders = Order::all();
        // dd($order);
        return view('order.index', compact('orders'));

    }

    public function create(){
        return view('order.create');

    }

    
    public function store(){
        $data = request()->validate([
            'table_number' => 'integer',
            'position' => 'string',
            'waiter_name' => 'string',
            'course' => 'integer',
            'comment' => 'string',
            
        ]);
        Order::create($data);
        return redirect()->route('order.index');
    }

    public function update(){
    }
}
