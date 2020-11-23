<?php

namespace App\Service;

use App\Exceptions\ConfirmaSenhaException;
use App\Exceptions\SaveException;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CriaUser
{
    public function criandoUser(string $nome, string $email, string $senha, string $confimSenha): void
    {
        if ($senha !== $confimSenha) {
            throw new ConfirmaSenhaException('As senhas precisam ser iguais');
        }

        DB::transaction(function () use ($nome, $email, $senha, $confimSenha){
            User::create([
                'name' => $nome,
                'email' => $email,
                'password' => Hash::make($senha)
            ]);

        });

    }
}