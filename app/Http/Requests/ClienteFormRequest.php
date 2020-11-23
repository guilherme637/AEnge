<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'razaoSocial' => 'required',
            'fantasia' => 'required',
            'cnpj' => 'required|formato_cnpj',
            'endereco' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'responsavel' => 'required',
            $this->validate(['cpf' => 'required|formato_cpf']),
            'celular' => 'required'
        ];
    }

    public function messages()
    {
        return  [
            'razaoSocial.required' => 'Preencha o campo Razão Social',
            'fantasia.required' => 'Preencha o campo Nome Fantasia',
            'cnpj.required' => 'Preencha o campo CNPJ',
            'endereco.required' => 'Preencha o campo Endereço',
            'email,required' => 'Preencha o campo Email',
            'telefone.required' => 'Preencha o campo Telefone',
            'responsavel.required' => 'Preencha o campo Nome do Responsável',
            'cpf.required' => 'Preencha o campo CPF',
            'cpf.formato_cpf' => 'Informe um CPF válido',
            'celular.required' => 'Preencha o campo celular'
        ];
    }
}
