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
use Illuminate\Support\Facades\Input;

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

    public function edit($id)
    {
    	$jogador = Jogadores::findOrFail($id);
        $estados = Estados::all();
        $cidades = Cidades::all();
        return view('jogadores/edit', ['estados' => $estados, 'cidades' => $cidades, 'jogador' => $jogador, 'menu' => 'jogadores']);
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
			'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:6144',
		]);

		DB::transaction(function() use($request) {
			$users = User::create([
				'name' => $request->nome,
				'email' => $request->email,
				'telefone' => $request->celular,
				'password' => bcrypt('123456'),
			]);
			
			//Define nome da imagem para salvar no banco
			$image = $request->file('foto');
			$nomeFoto = time().'.'.$image->getClientOriginalExtension();

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
				'foto' => $nomeFoto,
				'idUser' => $users->id
			]);
			
			//move o arquivo, criando a pasta com o id do jogador cadastrado
			$destinationPath = public_path("/files/jogadores/{$jogadores->id}");
			$image->move($destinationPath, $nomeFoto);
		});
		
		return redirect('/jogadores')->with('message', 'Jogador cadastrado com sucesso.');
	}
	
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'nome' => 'required',
			'email' => 'required|email|unique:jogadores,email,'.$id,
			'celular' => 'required',
			'estado' => 'required',
			'cidade' => 'required',
			'bairro' => 'required',
		]);
		
		$jogadores = Jogadores::find($id);
		$users = User::find($jogadores->idUser)->update($request->all());
		
		$jogadores->update([
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
			'data_nasc' => $request->data_nasc
		]);
		
		if($request->foto) {
			unlink(public_path("/files/jogadores/{$jogadores->id}/{$jogadores->foto}"));
			//Define nome da imagem para salvar no banco
			$image    = $request->file( 'foto' );
			$nomeFoto = time() . '.' . $image->getClientOriginalExtension();
			
			$jogadores->update([
				'foto' => $nomeFoto
			]);
			
			//move o arquivo, criando a pasta com o id do jogador cadastrado
			$destinationPath = public_path("/files/jogadores/{$jogadores->id}");
			$image->move($destinationPath, $nomeFoto);
		}
		
		return redirect('/jogadores')->with('message', 'Jogador atualizado com sucesso.');
	}
}





















