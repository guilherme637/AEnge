<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    protected $fillable = [
        'cliente_id',
        'servico',
        'endereco_obra',
        'valor_total',
        'sinal',
        'qtde_parcela',
        'valor_parcela',
        'data_pgto',
        'data_parcela',
        'arquivo',
        'status',
        'created_at',
        'updated_at'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

}