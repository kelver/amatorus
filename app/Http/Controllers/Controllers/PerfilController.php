<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/perfil/index', ['perfil' => Auth::user()]);
    }
}
