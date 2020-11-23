<?php

namespace App\Service;

use App\Models\Proposta;
use Illuminate\Support\Facades\DB;

class EditaProposta
{
    public function editandoPropsota(
        int $id,
        string $cliente,
        string $obra,
        string $servico,
        float  $valorTotal,
        string $sinal,
        string $qtdParcela,
        string $valorParcela,
        string $inicioPgto,
        string $parcela,
        object $file,
        string $status
    ): void
    {
        DB::transaction(function () use (
            $id,
            $cliente,
            $obra,
            $servico,
            $valorTotal,
            $sinal,
            $qtdParcela,
            $valorParcela,
            $inicioPgto,
            $parcela,
            $file,
            $status
        ) {
            $proposta = Proposta::find($id);
            $proposta->update([
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