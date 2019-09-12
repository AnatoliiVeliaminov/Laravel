<?php

namespace App\Http\Controllers\account;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(User $user)
    {
        $orders = Order::where('user_id', $user->id)->paginate(3);
        return view('account.order.index', [
            'orders' => $orders
        ]);
    }

    /**
     * @param Order $order
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Order $order)
    {

        return view('account.order.showe', [
                'order' => $order
            ]
        );
    }


}
