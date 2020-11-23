<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('login.create');
    }

    public function login(LoginFormRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->back();
        }

        return redirect()->route('lista-cliente');
    }
}
