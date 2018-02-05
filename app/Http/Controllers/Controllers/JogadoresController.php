<?php

namespace App\Http\Controllers;

use App\Cidades;
use App\Jogadores;
use App\Estados;
use App\Torneios;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JogadoresController extends Controller
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

        $jogadores = Jogadores::all();
        return view('jogadores/index', ['jogadores' => $jogadores, 'menu' => 'jogadores']);
    }

    public function new()
    {
        $estados = Estados::all();
        $cidades = Cidades::all();
        return view('jogadores/new', ['estados' => $estados, 'cidades' => $cidades, 'menu' => 'jogadores']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'email' => 'required|unique:jogadores',
            'celular' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'bairro' => 'required',
        ]);
        
	    DB::transaction(function() use($request) {
		    $users = User::create([
			    'name' => $request->nome,
			    'email' => $request->email,
			    'telefone' => $request->celular,
			    'password' => bcrypt('123456'),
		    ]);
		    
		    $jogadores = Jogadores::create([
			    'nome' => $request->nome,
			    'email' => $request->email,
			    'celular' => $request->celular,
			    'telefone' => $request->telefone,
			    'cep' => $request->cep,
			    'estado' => $request->estado,
			    'cidade' => $request->cidade,
			    'bairro' => $request->bairro,
			    'endereco' => $request->endereco,
			    'numero' => $request->numero,
			    'data_nasc' => $request->data_nasc,
			    'idUser' => $users->id
		    ]);
	    });

        return redirect('/jogadores')->with('message', 'Jogador cadastrado com sucesso.');
    }
}





















