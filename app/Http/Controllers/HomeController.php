<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doacao;
use App\Campanha;
use App\User;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home')->with([
            'qtd_campanhas' => Campanha::where('status','!=', 'pendente')->count(),
            'qtd_doacoes' => Doacao::all()->count(),
            'qtd_utilizadores' => User::all()->count(),
            'qtd_pedidos' => Campanha::where('status','pendente')->count(),
        ]);
    }
}
