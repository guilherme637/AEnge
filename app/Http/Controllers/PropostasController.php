<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropostaFormRequest;
use App\Models\Cliente;
use App\Models\Proposta;
use App\Service\CriaProposta;
use App\Service\EditaProposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropostasController extends Controller
{
    public function __construct()
    {
        $this->middleware('autenticador');
    }

    public function index(Request $request)
    {
        $propostas = DB::table('clientes')
            ->join('propostas', 'clientes.id', '=', 'propostas.cliente_id')
            ->select('clientes.nome_responsavel', 'propostas.*')
            ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('proposta.index', compact('propostas', 'mensagem'));
    }

    public function create()
    {
        $clientes = DB::table('clientes')->select('nome_responsavel', 'id')->get();
        return view('proposta.create', compact('clientes'));
    }

    public function store(PropostaFormRequest $request, CriaProposta $criaProposta)
    {
        if (!$request->hasFile('arquivo')) {
            redirect()->back();
        }

        $criaProposta->criandoProposta(
            $request->cliente,
            $request->servico,
            $request->obra,
            $request->valorTotal,
            $request->sinal,
            $request->qtdParcela,
            $request->valorParcela,
            $request->inicioPgto,
            $request->parcela,
            $request->status,
            $request->arquivo
        );

        $request->session()->flash('mensagem', 'Proposta criada com sucesso');
        redirect()->route('lista-proposta');
    }

    public function show(int $id)
    {
        $clientes = DB::table('clientes')->select('nome_responsavel', 'id')->get();
        $proposta = Proposta::find($id);

        return view('proposta.show', compact('clientes','proposta'));
    }

    public function update(Request $request, int $id, EditaProposta $editaProposta)
    {
        if (!$request->hasFile('arquivo')) {
            redirect()->back();
        }

        $editaProposta->editandoPropsota(
            $request->id,
            $request->cliente,
            $request->obra,
            $request->servico,
            $request->valorTotal,
            $request->sinal,
            $request->qtdParcela,
            $request->valorParcela,
            $request->inicioPgto,
            $request->parcela,
            $request->arquivo,
            $request->status
        );

        redirect()->route('lista-proposta');
    }
}
