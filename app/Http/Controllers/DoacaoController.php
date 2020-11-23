<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Doacao;
use App\Campanha;
use App\Utente;



class DoacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.doacoes')->withDoacoes(Doacao::where('campanha_id','!=',null));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $utente = null;
        if(Utente::where('email', $request->email)->count()){
            $utente = Utente::where('email', $request->email)->get()[0];
        }else{
            $utente = new Utente();
            $utente->nome = $request->nome;
            $utente->email = $request->email;
            $utente->telefone = '999-999-999';
            $utente->save();
        }
        $doacao = new Doacao();
        $doacao->utente_id = $utente->id;
        $doacao->campanha_id = isset($request->campanha)?$request->campanha:null;        
        $path = $request->file('talao')->store('public');
        $doacao->talao = explode('/',$path)[1];
        $doacao->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DB::table('doacaos')
            ->join('utentes','utentes.id','=','doacaos.utente_id')
            ->select("*")
            ->where('doacaos.id','=',$id)
            ->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doacao::destroy($id);
        return back();
    }

    public function aceitar(Request $request){
        try {
            if($request->valor > 0){
                $doacao = Doacao::find($request->id);
                $doacao->status = 'aceita';
                $doacao->valor = $request->valor;
                $doacao->user_id = Auth::user()->id;
                $doacao->save();
                $campanha = Campanha::find($doacao->campanha_id);
                $campanha->valor_arrecadado += $doacao->valor;
                $campanha->save();
                return redirect('doacoes')->with('message-success', 'Doação Aceita Com Succeso!');
            }
            return redirect('doacoes')->with('message-danger', 'O Valor Da Doação Não Pode ser Menor ou Igual a Zero!');
        } catch (Exception $th) {
            return redirect('doacoes')->with('message-danger', 'Doação Não Aceita!');
        }
        
    }


}
