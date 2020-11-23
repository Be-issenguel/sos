@extends('layouts.app')

@section('content-title', 'Home')
@section('content-subtitle', 'Campanhas')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title">Listagem de Campanhas</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Titulo</th>
              <th>Categoria</th>
              <th>Província</th>
              <th>Status</th>
              <th>Valor Esperado</th>
              <th>Valor Arrecadado</th>
              <th>{{ __('Opções')}}</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($campanhas as $campanha)
            <tr>
              <td>{{ $campanha->titulo }}</td>
              <td>{{ $campanha->categoria }}</td>
              <td>{{ $campanha->provincia }}</td>
              <td>{{ $campanha->status }}</td>
              <td class="text-right">{{ $campanha->valor_esperado . __(' AKZ') }}</td>
              <td class="text-right">{{ $campanha->valor_arrecadado . __(' AKZ') }}</td>
              <td>
                <a href="#" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-alt"></i></a>
              </td>
            </tr>
            @endforeach

          </tbody>
          <tfoot>
            <tr>
              <th>Titulo</th>
              <th>Categoria</th>
              <th>Província</th>
              <th>Status</th>
              <th>Valor Esperado</th>
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