@extends('layouts.layout')

@section('titulo', 'Cadastra Usuário')

@section('conteudo')
    <div class="container-fluid">
        <div class="container-sm">
            <div class="form">
                {{$mensagem}}
                <form action="{{route('users')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="name" type="text" class="form-control" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Senha</label>
                            <input name="password" type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Confirmar senha</label>
                            <input name="confirmPassword" type="password" class="form-control" id="password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection