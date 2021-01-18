@extends('layouts.app')

@section('content-title', 'Home')
@section('content-subtitle', 'Campanhas')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title">Detalhes da Campanha</h3>
                <hr>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-6">

                    <h4>Titulo: {{ $campanha->titulo }}</h4>
                    <h4>Descrição: {{ $campanha->descricao }}</h4>
                    <h4>Categoria: {{ $campanha->categoria }}</h4>
                    <h4>Data de Criação: {{ $campanha->created_at }}</h4>
                    <div>
                        <h4>Imagem Principal:</h4>
                        <img src="{{ asset('img/uploads/campanhas/'.$campanha->imagem) }}" width="50%" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Criador: {{ $campanha->user->name }} {{ $campanha->user->surname }}</h4>
                    <h4>Nº de Identificação: {{ $campanha->ndi }}</h4>
                    <div>
                        <h4>Documento de Identificação:</h4>
                        <img src="{{ asset('img/uploads/campanhas/'.$campanha->doc_identificacao) }}" width="50%"
                            alt="">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@include('modals.adm')
@endsection