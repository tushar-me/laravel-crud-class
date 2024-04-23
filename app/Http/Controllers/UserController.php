<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function home()
    {
        $users = User::all();
        return $users;

        return view('welcome', compact('users'));
    }
    public function create()
    {
        $users = User::all();
        return view('create', compact('users'));
    }

    public function store(Request $request)
    {
        $user = new User;

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        $user->save();


        return redirect('/');

    }
}
