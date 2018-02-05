<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class GruposController extends Controller
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
        $grupos = Role::all();
        return view('grupos/index', ['grupos' => $grupos, 'menu' => 'grupos']);
    }

    public function new()
    {
        $routes = Route::getRoutes();
        return view('grupos/new', ['rotas' => $routes, 'menu' => 'grupos']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'display_name' => 'required',
            'description' => 'required'
        ]);

        $grupos = new Role();
        $grupos->name = $request->name;
        $grupos->display_name = $request->display_name;
        $grupos->description = $request->description;
        $grupos->save();

        return redirect('/grupos')->with('message', 'Grupo cadastrado com sucesso.');
    }

    public function permissions($id)
    {
        $roles = Role::find($id);
        $permissions = Permission::all();
        $menu = 'grupos';

        return view('grupos.permission', compact('roles','permissions', 'menu'));
    }

    public function permissionStore(Request $request, $id)
    {
        $role = Role::find($id);
        $dados = $request->all();
        $permission = Permission::find($dados['permission']);
        $role->addPermission($permission);
        return redirect()->back();
    }

    public function permissionDestroy($id, $permission_id)
    {
        $role = Role::find($id);
        $permission = Permission::find($permission_id);
        $role->removePermission($permission);
        return redirect()->back();
    }
}