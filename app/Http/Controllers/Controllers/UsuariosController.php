<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Cidades;
use App\Empresas;
use App\Estados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
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
        $usuarios = User::all();

//        Lista usuarios e roles
//        print_r("<pre>");
//        print_r($usuarios);
//        print_r('-------------------------------------------------------------');
//        foreach ($usuarios as $us){
//            print_r($us->name);
//            print_r($us->roles);
//            print_r("------------------aaaaaaa-------------------------");
//
//            foreach($us->roles as $role){
//                print_r($role->name);
//            }
//        }

//        Lista usuarios e empresas
//        print_r("<pre>");
//        foreach ($usuarios as $us){
//            print_r($us->empresas);
//            print_r("------------------aaaaaaa-------------------------");
//
//            foreach($us->empresas as $empresa){
//                print_r($empresa->nome_fantasia);
//            }
//        }
//        die('asdasd');

        return view('usuarios/index', ['usuarios' => $usuarios, 'menu' => 'usuarios']);
    }

    public function new()
    {
        $estados = Estados::all();
        $empresas = Empresas::all();
        $cidades = Cidades::all();
        $roles = Role::all();
        return view('usuarios/new', ['estados' => $estados, 'cidades' => $cidades, 'empresas' => $empresas, 'grupos' => $roles, 'menu' => 'usuarios']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required'
        ]);

        $usuarios = new User();
        $usuarios->name = $request->nome;
        $usuarios->email = $request->email;
        $usuarios->telefone = $request->telefone;
        $usuarios->password = Hash::make($request->password);
        $usuarios->save();

        foreach($request->grupos as $grupo) {
            $usuarios->roles()->attach(['role_id' => $grupo]);
        }
        return redirect('/usuarios')->with('message', 'Uusuário cadastrado com sucesso.');
    }

    public function role($id)
    {
        $usuario = User::find($id);
        $roles = Role::all();
        $menu = 'usuarios';

        return view('usuarios.role', compact('usuario','roles', 'menu'));
    }

    public function roleStore(Request $request, $id)
    {
        $usuario = User::find($id);
        $dados = $request->all();
        $role = Role::find($dados['role']);
        $usuario->addRole($role);
        return redirect()->back();
    }

    public function roleDestroy($id, $role_id)
    {
        $usuario = User::find($id);
        $role = Role::find($role_id);
        $usuario->removeRole($role);
        return redirect()->back();
    }
}
