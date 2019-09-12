<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $orders = Order::paginate(5);
        return view('admin.order.index', [
            'orders' => $orders
        ]);
    }

    /**
     * @param Order $order
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Order $order)
    {
        return view('admin.order.show',
            [
                'order' => $order
            ]);
    }

    /**
     * @param Order $order
     */
    public function edit(Order $order)
    {
        dd($order);
    }

    /**
     * @param Order $order
     */
    public function delete(Order $order)
    {
        dd($order);
    }
}
