@extends('layouts.app')

@section('content-title', 'Home')
@section('content-subtitle', 'Campanhas')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title">Listagem de Utilizadores</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Data Registo</th>
              <th>{{ __('Opções')}}</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($utilizadores as $utilizador)
            <tr>
              <td>{{ $utilizador->name .' '. $utilizador->surname }}</td>
              <td>{{ $utilizador->email }}</td>
              <td>{{ $utilizador->phone }}</td>
              <td>{{ $utilizador->created_at }}</td>
              <td>
                {{-- <a href="#" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a> --}}
                <a href="{{ action('UserController@destroy',['id' => $utilizador->id])}}"
                  class="btn btn-danger btn-xs">remover</a>
              </td>
            </tr>
            @endforeach

          </tbody>
          <tfoot>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Data Registo</th>
              <th>{{ __('Opções')}}</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection