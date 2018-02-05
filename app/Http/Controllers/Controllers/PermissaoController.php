<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class PermissaoController extends Controller
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
        $permissoes = Permission::all();
        return view('permissoes.index', ['permissoes' => $permissoes, 'menu' => 'permissoes']);
    }

    public function new()
    {
        $grupos = Role::all();
        return view('permissoes.new', ['grupos' => $grupos, 'menu' => 'permissoes']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'display_name' => 'required',
            'description' => 'required'
        ]);

        $permissoes = new Permission();
        $permissoes->name = $request->name;
        $permissoes->display_name = $request->display_name;
        $permissoes->description = $request->description;
        $permissoes->save();

        return redirect('/permissao')->with('message', 'Permissão cadastrado com sucesso.');
    }
}