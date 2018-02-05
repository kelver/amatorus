<?php

namespace App\Http\Controllers;

use App\Estados;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $estados = Estados::all();
        return view('estados/index', ['estados' => $estados, 'menu' => 'estados']);
    }

    public function new()
    {
        return view('estados/new', ['menu' => 'estados']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required'
        ]);

        $estados = new Estados();
        $estados->nome = $request->nome;
        $estados->sigla = $request->sigla;
        $estados->codigo_ibge = $request->codigo_ibge;
        $estados->id_pais = $request->id_pais;
        $estados->regiao_sigla = $request->regiao_sigla;
        $estados->regiao_nome = $request->regiao_nome;
        $estados->ativo = 'S';
        $estados->cep_de = '123';
        $estados->cep_ate = '123';
        $estados->ecep_de = '123';
        $estados->ecep_ate = '123';
        $estados->save();

        return redirect('/estados')->with('message', 'Estados cadastrada com sucesso.');
    }
}





















