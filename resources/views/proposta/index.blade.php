@extends('layouts.layout')

@section('titulo', 'Clientes')

@section('conteudo')
    <div class="content-fluid mt-5">
        <div class="container mt-5">
            <h1 class="h1">LISTAGEM DE CLIENTES</h1>
            @if(!empty($mensagem))
            <div class="alert alert-success" role="alert">
                {{$mensagem}}
            </div>
            @endif
            <div class="card mt-5">
                <div class="card-body">
                    <table class="table  table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Cliente</th>
                                <th scope="col">Proposta feita em</th>
                                <th scope="col">Inicio do pgto</th>
                                <th scope="col">Serviços</th>
                                <th scope="col">Qtde de Parcelas</th>
                                <th scope="col">Sinal</th>
                                <th scope="col">Valor Parcela(R$)</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($propostas as $proposta)
                            <tr class="text-center">
                                <td>{{$proposta->nome_responsavel}}</td>
                                <td>{{date('d-m-y', strtotime($proposta->created_at))}}</td>
                                <td>{{$proposta->data_pgto}}</td>
                                <td>{{$proposta->servico}}</td>
                                <td>{{$proposta->qtde_parcela}}</td>
                                <td>{{$proposta->sinal}}</td>
                                <td>{{$proposta->valor_parcela}}</td>
                                <td>{{$proposta->valor_total}}</td>
                                <td>{{$proposta->status}}</td>
                                <td>
                                    <a href="proposta/altera-proposta/{{$proposta->id}}">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection