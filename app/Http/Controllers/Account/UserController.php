<?php

namespace App\Http\Controllers\Account;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(User $user)
    {
        return view('account.index');
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        return view('account.edit',
            [
                'user' => $user
            ]);

    }

    /**
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request['name'];
        $user->surname = $request['surname'];
        $user->telefon = $request['telefon'];
        $user->birthday = $request['birthday'];
        $user->email = $request['email'];
        $user->save();
        return redirect()->route('account.main');
    }
}
