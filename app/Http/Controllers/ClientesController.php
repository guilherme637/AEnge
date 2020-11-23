<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteFormRequest;
use App\Models\Cliente;
use App\Service\CriaCliente;
use App\Service\EditaCliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('autenticador');
    }

    public function index()
    {
        $clientes = Cliente::all();

        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(ClienteFormRequest $request, CriaCliente $criaCliente)
    {
        dd($request->all());
        $criaCliente->salvaCliente(
            $request->razaoSocial,
            $request->fantasia,
            $request->cnpj,
            $request->endereco,
            $request->email,
            $request->telefone,
            $request->responsavel,
            $request->cpf,
            $request->celular
        );

        return redirect()->route('lista-cliente');
    }

    public function show(int $id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.show', compact('cliente'));
    }

    public function update(ClienteFormRequest $request, int $id, EditaCliente $editaCliente)
    {
        $editaCliente->editandoCliente(
            $request->id,
            $request->razaoSocial,
            $request->fantasia,
            $request->cnpj,
            $request->endereco,
            $request->email,
            $request->telefone,
            $request->responsavel,
            $request->cpf,
            $request->celular
        );
    }
}
