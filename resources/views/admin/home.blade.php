@extends('layouts.app')

@section('content-title', 'Home')
@section('content-subtitle', 'Dashboard')

@section('content')
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>{{ __($qtd_campanhas) }}</h3>

        <p>Campanhas</p>
      </div>
      <div class="icon">
        <i class="fa fa-hands-helping"></i>
      </div>
      <a href="{{ action('CampanhaController@index') }}" class="small-box-footer">Mais Informações <i
          class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>{{ __($qtd_doacoes) }}</h3>

        <p>Doacões</p>
      </div>
      <div class="icon">
        <i class="fa fa-donate"></i>
      </div>
      <a href="{{ action('DoacaoController@index') }}" class="small-box-footer">Mais Informações <i
          class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>{{ __($qtd_utilizadores) }}</h3>

        <p>Utilizadores</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="{{ action('UserController@index') }}" class="small-box-footer">Mais Informações <i
          class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>{{ __($qtd_pedidos) }}</h3>

        <p>Pedidos</p>
      </div>
      <div class="icon">
        <i class="fa fa-hand-holding-heart"></i>
      </div>
      <a href="#" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<!-- /.row -->
<div class="row">
  <center>
    <img src=" {{ asset('img/sos_logo2.svg') }}" alt="" width="76%">
  </center>
</div>
@endsection