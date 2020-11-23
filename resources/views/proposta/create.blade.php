@extends('layouts.layout')

@section('titulo', 'Cadastro de Proposta')

@section('conteudo')
    <div class="container-fluid">
        <div class="container-sm">
            <div class="form mt-5 mb-3">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <select class="form-control" name="cliente" id="cliente">
                            <option selected>SELECIONE O CLIENTE</option>
                            @foreach($clientes as $cliente)
                                <option value="{{$cliente->id}}">{{$cliente->nome_responsavel}} - {{$cliente->id}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="obra">Endereço da Obra</label>
                        <input type="text" class="form-control" id="obra" name="obra">
                    </div>

                    <div class="form-group">
                        <label for="servico">Serviço</label>
                        <input type="text" class="form-control" id="servico" name="servico">
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="valor">Valor total</label>
                            <input type="text" class="form-control" id="valor" name="valorTotal">
                        </div>

                        <div class="col">
                            <label for="sinal">Sinal</label>
                            <select class="form-control" name="sinal" id="sinal">
                                <option>SELECIONE</option>
                                <option value="R$">R$</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="qtdParcela">Quantidade de Parcelas</label>
                            <input type="number" class="form-control" id="qtdParcela" name="qtdParcela">
                        </div>

                        <div class="col">
                            <label for="valorParcela">Valor das Parcelas</label>
                            <input type="number" class="form-control" id="valorParcela" name="valorParcela">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data">Data inicio do Pagamento</label>
                        <input type="date" class="form-control" id="data" name="inicioPgto">
                    </div>

                    <div class="form-group">
                        <label for="data-parcelas">Data das Parcelas</label>
                        <input type="date" class="form-control" id="data-parcelas" name="parcela">
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="aquivo">Anexar arquivo (PDF ou DOC)</label>
                            <input type="file"  class="form-control-file" id="aquivo" name="arquivo">
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="status" id="status">
                                <option selected>SELECIONE O STATUS</option>
                                <option value="aberto">Aberto</option>
                                <option value="fechado">Fechado</option>
                                <option value="aprovado">Aprovado</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

