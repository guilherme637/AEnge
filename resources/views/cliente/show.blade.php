@extends('layouts.layout')

@section('titulo', 'Alterando Cliente')

@section('conteudo')
    <div class="container-fluid">
        <div class="container-sm">
            <div class="form mt-5 mb-3">
                <form method="post">
                    @csrf
                    <div class="form-group">
                        <label for="razao">Razão Social</label>
                        <input name="razaoSocial" value="{{$cliente->razao_social}}" type="text" class="form-control" id="razao">
                    </div>
                    <div class="form-group">
                        <label for="fantasia">Nome Fantasia</label>
                        <input name="fantasia" value="{{$cliente->nome_fantasia}}" type="text" class="form-control" id="fantasia">
                    </div>

                    <div class="form-group">

                        <div class="form-group">
                            <label for="cnpj">CNPJ</label>
                            <input name="cnpj" value="{{$cliente->cnpj}}" type="text" class="form-control" id="cnpj">
                        </div>

                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input name="endereco" value="{{$cliente->endereco}}" type="text" class="form-control" id="endereco">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" value="{{$cliente->email}}" type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input name="telefone" value="{{$cliente->telefone}}" type="tel" class="form-control" id="telefone">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="responsavel">Nome do Responsável</label>
                            <input name="responsavel" value="{{$cliente->nome_responsavel}}" type="text" class="form-control" id="responsavel">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cpf">CPF</label>
                            <input name="cpf" value="{{$cliente->cpf}}" type="text" class="form-control" id="cpf">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input name="celular" value="{{$cliente->celular}}" type="tel" class="form-control" id="telefone">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection