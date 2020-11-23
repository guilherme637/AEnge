<?php

namespace App\Service;

use App\Models\Proposta;
use Illuminate\Support\Facades\DB;

class CriaProposta
{
    public function criandoProposta(
        string $cliente,
        string $servico,
        string $obra,
        float  $valorTotal,
        string $sinal,
        string $qtdParcela,
        string $valorParcela,
        string $inicioPgto,
        string $parcela,
        string $status,
        object $file
    ): void
    {
        DB::transaction(function () use (
            $cliente,
            $servico,
            $obra,
            $valorTotal,
            $sinal,
            $qtdParcela,
            $valorParcela,
            $inicioPgto,
            $parcela,
            $status,
            $file
        ) {
            Proposta::create([
                'cliente_id' => $cliente,
                'servico' => $servico,
                'endereco_obra' => $obra,
                'valor_total' => $valorTotal,
                'sinal' => $sinal,
                'qtde_parcela' => $qtdParcela,
                'valor_parcela' => $valorParcela,
                'data_pgto' => $inicioPgto,
                'data_parcela' => $parcela,
                'arquivo' => $file,
                'status' => $status
            ]);
        });
    }
}