<?php

namespace App\Http\Controllers;

use App\Exceptions\ConfirmaSenhaException;
use App\Service\CriaUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $mensagem = $request->session()->get('mensagem');
        return view('user.create', compact('mensagem'));
    }

    public function store(Request $request, CriaUser $criaUser)
    {
        try {
            $criaUser->criandoUser(
                $request->name,
                $request->email,
                $request->password,
                $request->confirmPassword
            );
        } catch (ConfirmaSenhaException $exception) {
            $mensagem = $exception->getMessage();
            $request->session()->flash('mensagem', $mensagem);
            return redirect()->route('users');
        }

        return redirect()->route('lista-cliente');
    }
}
