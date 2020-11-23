@extends('layouts.app')

@section('content-title', 'Home')
@section('content-subtitle', 'Doações')

@section('content')
<div class="row">
  <div class="col-xs-12">
    @if (session('message-success'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-ban"></i> Alert!</h4>
      {{ __(session('message-success')) }}
    </div>
    @endif
    @if (session('message-danger'))
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-ban"></i> Alert!</h4>
      {{ __(session('message-danger')) }}
    </div>
    @endif
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title">Listagem de Doações</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Campanha</th>
                <th>Doador</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Status</th>
                <th>{{ __('Opções')}}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($doacoes as $doacao)
              <tr>
                <td>{{ $doacao->campanha->titulo }}</td>
                <td>{{ $doacao->utente->nome }}</td>
                <td>{{ $doacao->valor }}</td>
                <td>{{ $doacao->created_at }}</td>
                <td>{{ $doacao->status }}</td>
                <td>
                  <a href="#" data-value="ver-doacao" data-id="{{ $doacao->utente->id }}"
                    class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                  @if ($doacao->status == 'pendente')
                  <a href="#" data-value="aceitar-doacao" data-id="{{ $doacao->id }}" class="btn btn-success btn-xs"><i
                      class="fa fa-thumbs-up"></i></a>
                  <a href="{{ action('DoacaoController@destroy',$doacao->id) }}" class="btn btn-danger btn-xs"><i
                      class="fa fa-trash-alt"></i></a>
                  @endif
                </td>
              </tr>
              @endforeach

            </tbody>
            <tfoot>
              <tr>
                <th>Campanha</th>
                <th>Doador</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Status</th>
                <th>{{ __('Opções')}}</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@include('modals.adm')
@endsection