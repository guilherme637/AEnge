<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropostaFormRequest extends FormRequest
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
            'cliente' => 'required',
            'servico' => 'required',
            'obra' => 'required',
            'valorTotal' => 'required',
            'sinal' => 'required',
            'qtdParcela' => 'required',
            'valorParcela' => 'required',
            'inicioPgto' => 'required',
            'parcela' => 'required',
            'status' => 'required',
            'arquivo' => 'required|mimes:pdf,docx'
        ];
    }

    public function messages()
    {
        return [
            'cliente.required' => 'Selecione o cliente',
            'servico.required' => 'Preencha o campo Serviço',
            'obra.required' => 'Preencha o campo Endereço da Obra',
            'valorTotal.required' => 'Preencha o campo Valor Total',
            'sinal.required' => 'Selecione o Sinal',
            'qtdParcela.required' => 'Preencha o campo Quantidade de Parcelas',
            'valorParcela.required' => 'Preencha o campo Valor das Parcelas',
            'inicioPgto.required' => 'Insira a data do Inicio de Pagamento',
            'parcela.required' => 'Insira a data das Parcelas',
            'status.required' => 'Selecione o Status',
            'arquivo.required' => 'Anexe um arquivo'
        ];
    }
}
