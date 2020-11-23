@extends('layouts.loginLayout')


@section('conteudo')
    <div class="container-sm mt-5">
        <div class="card mt-5">
            <div class="card-body mt-5">
                <form method="post">
                    @csrf
                    <h5 class="h5 text-center">AENGE</h5>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <button class="btn btn-danger btn-block btn-lg">Entrar</button>
                </form>

            </div>
        </div>
    </div>

@endsection
