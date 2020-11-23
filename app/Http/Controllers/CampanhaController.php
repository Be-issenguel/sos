<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Campanha;
use App\Http\Requests\CampanhaRequest;

class CampanhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.campanhas')->withCampanhas(Campanha::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            return view('site/sos');
        }else{
           return redirect('sos_login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CampanhaRequest $request)
    {   
       // dd($request->all());
        $campanha = new Campanha();
        $campanha->user_id = Auth::user()->id;
        $campanha->titulo = $request->titulo;
        $campanha->objectivo = $request->objectivo;
        $campanha->categoria = $request->categoria;
        $campanha->ndi = $request->numero_de_identficacao;
        $campanha->descricao = $request->descricao;
        $campanha->provincia = $request->provincia;
        $campanha->valor_esperado = $request->valor;
        $path = $request->file('imagem_do_projecto')->store('public');
        $campanha->imagem = explode('/',$path)[1];
        $path = $request->file('imagem_do_documento')->store('public');
        $campanha->doc_identificacao = explode('/',$path)[1];
        $campanha->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('site.detalhes')->withCampanha(Campanha::find($id));
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
        //
    }
}
