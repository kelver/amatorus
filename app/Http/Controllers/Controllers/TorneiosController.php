<?php

namespace App\Http\Controllers;

use App\Times;
use App\Torneios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TorneiosController extends Controller
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
        $torneios = Torneios::all();
        return view('torneios/index', ['torneios' => $torneios, 'menu' => 'torneios']);
    }

    public function new()
    {
	    $times = Times::all();
        return view('torneios/new', ['menu' => 'torneios', 'times' => $times]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required'
        ]);
		
	    DB::transaction(function() use($request) {
		    $torneio = Torneios::create([
			    'nome' => $request->nome
		    ]);
		
		    $torneio->times()->sync($request->time);
	    });

        return redirect('/torneios')->with('message', 'Torneio cadastrado com sucesso.');
    }
}





















