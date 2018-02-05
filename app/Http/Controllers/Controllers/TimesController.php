<?php

namespace App\Http\Controllers;

use App\Jogadores;
use App\Times;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimesController extends Controller
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
        $times = Times::all();
        return view('times/index', ['times' => $times, 'menu' => 'times']);
    }

    public function new()
    {
	    $jogadores = Jogadores::all();
        return view('times/new', ['menu' => 'times', 'jogadores' => $jogadores]);
    }

    public function store(Request $request)
    {
	    $this->validate($request, [
		    'nome' => 'required'
	    ]);
	
	    DB::transaction(function() use($request) {
		    $time = Times::create([
			    'nome' => $request->nome
		    ]);
		    
			$time->jogadores()->sync($request->jogador);
	    });
     
        return redirect('/times')->with('message', 'Time cadastrado com sucesso.');
    }
}





















