<?php

namespace App\Http\Controllers;

use App\Cidades;
use App\Estados;
use Illuminate\Http\Request;

class CidadesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
        $cidades = Cidades::all();
        return view('cidades/index', ['cidades' => $cidades, 'menu' => 'cidades']);
    }

    public function new()
    {
        $estados = Estados::all();
        return view('cidades/new', ['estados' => $estados, 'menu' => 'cidades']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required'
        ]);

        $cidades = new Cidades();
        $cidades->codigo = $request->codigo;
        $cidades->nome = $request->nome;
        $cidades->sigla = $request->sigla;
        $cidades->codigo_ibge = $request->codigo_ibge;
        $cidades->id_estado = $request->id_estado;
        $cidades->cep_de = '123';
        $cidades->cep_ate = '123';
        $cidades->ecep_de = '123';
        $cidades->ecep_ate = '123';
        $cidades->save();

        return redirect('/cidades')->with('message', 'Cidades cadastrada com sucesso.');
    }
}





















