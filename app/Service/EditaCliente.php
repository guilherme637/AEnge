<?php

namespace App\Service;

use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class EditaCliente
{
    public function editandoCliente(
        int $id,
        string $razaoSocial,
        string $fantasia,
        string $cnpj,
        string $endereco,
        string $email,
        string $telefone,
        string $responsavel,
        string $cpf,
        string $celular
    ): void
    {
        DB::transaction(function () use (
            $id,
            $razaoSocial,
            $fantasia,
            $cnpj,
            $endereco,
            $email,
            $telefone,
            $responsavel,
            $cpf,
            $celular
        ) {
            $cliente = Cliente::find($id);

            $cliente->update([
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