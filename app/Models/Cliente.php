<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'user_id',
        'razao_social',
        'nome_fantasia',
        'cnpj',
        'endereco',
        'email',
        'telefone',
        'nome_responsavel',
        'cpf',
        'celular'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function proposta()
    {
        return $this->belongsTo(Proposta::class);
    }
}