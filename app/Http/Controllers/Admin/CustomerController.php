<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $customers = User::paginate(5);
        return view('admin.customer.index', [
            'customers' => $customers
        ]);
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $user)
    {
        return view('admin.customer.show',
            [
                'customer' => $user
            ]);
    }

    /**
     * @param User $user
     */
    public function edit(User $user)
    {
        dd($user);
    }

    /**
     * @param User $user
     */
    public function delete(User $user)
    {
        dd($user);
    }
}
