<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    // public function store()
    // {
    //     $this->validate(request(),[
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required|confirmed',

    //     ]);

    //     $user = User::create(request(['name','email', 'password']));

    //     auth()->login($user);
    //     return redirect()->to('/');
    // }
}
