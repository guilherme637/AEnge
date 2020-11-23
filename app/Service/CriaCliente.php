<?php

namespace App\Service;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CriaCliente
{
    public function salvaCliente(
        string $razaoSocial,
        string $fantasia,
        string $cnpj,
        string $endereco,
        string $email,
        string $telefone,
        string $responsavel,
        string $cpf,
        string $celular
    )
    {
        DB::transaction(function ()
            use ($razaoSocial,$fantasia,$cnpj,$endereco,$email, $telefone, $responsavel, $cpf, $celular) {

            $user = User::find(auth()->id());

            $clientes = $user->clientes()->create([
                'razao_social' => $razaoSocial,
                'nome_fantasia' => $fantasia,
                'cnpj' => $cnpj,
                'endereco' => $endereco,
                'email' => $email,
                'telefone' => $telefone,
                'nome_responsavel' => $responsavel,
                'cpf' => $cpf,
                'celular'  => $celular
            ]);

        });
    }
}