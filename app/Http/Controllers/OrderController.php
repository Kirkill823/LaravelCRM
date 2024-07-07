<?php

namespace App\Http\Controllers;

use App\Models\Loyalty;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{

    public function index(){
         $orders = Order::all();
        return view('order.index', compact('orders'));

    }

    public function edit(Order $order){
        return view('order.edit', compact('order'));
    }

    public function update(Order $order){
        $data = request()->validate([
            'table_number' => 'integer',
            'position' => 'string',
            'waiter_name' => 'string',
            'course' => 'integer',
            'comment' => 'string',
        ]);
        $order->update($data);
        return redirect()-> route('order.show', $order->id);
    }

    public function create(){
        return view('order.create');

    }

    public function show(Order $order){
        $loyalty = Loyalty::find($order->id);
        return view('order.show', compact('order', 'loyalty'));
    }

    
    public function store(){
        $data = request()->validate([
            'table_number' => 'integer',
            'position' => 'string',
            'waiter_name' => 'string',
            'course' => 'integer',
            'comment' => 'string',
            'loyalty_id' => 'int',
        ]);
        Order::create($data);
        return redirect()->route('order.index');
    }

    public function destroy(Order $order){
        $order->delete();
        return redirect()->route("order.index");
    }

}
