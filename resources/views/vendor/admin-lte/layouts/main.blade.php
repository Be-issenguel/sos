<!DOCTYPE html>
<html lang="@yield('lang', config('app.locale', 'en'))">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>SOS</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/sos_logo.svg') }}">

  <!-- Styles -->
  @section('styles')
  <link href="{{ asset('/css/admin-lte.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/fontawesome/css/all.css') }}" rel="stylesheet">
  <link href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/fontawesome/css/all.css') }}" rel="stylesheet">
  <link href="{{ asset('/bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  @show

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  @stack('head')
</head>

<body
  class="hold-transition skin-{{ config('admin-lte.skin', 'blue') }} {{ config('admin-lte.layout', 'sidebar-mini') }}">
  <div id="app" class="wrapper">

    <!-- Main Header -->
    @include('admin-lte::layouts.main-header.main')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin-lte::layouts.main-sidebar.main')

    <!-- Content Wrapper. Contains page content -->
    @include('admin-lte::layouts.content-wrapper.main')

    <!-- Main Footer -->
    @include('admin-lte::layouts.main-footer.main')

    <!-- Control Sidebar -->
    {{-- @include('admin-lte::layouts.control-sidebar.main') --}}
  </div>
  @section('scripts')
  <script src="{{ asset('/js/manifest.js') }}" charset="utf-8"></script>
  <script src="{{ asset('/js/vendor.js') }}" charset="utf-8"></script>
  <script src="{{ asset('/js/admin-lte.js') }}" charset="utf-8"></script>
  <script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
    $(document).ready(function(){
      $("a").click(function(){

        if($(this).data("value") == "ver-doacao"){
          var id = $(this).data("id");
          var url = "{{ url('doacao') }}";
          $.get(
            url+"/"+id,
            function(doacao, status){
              if(status == "success"){
                $("#mdl-ver-doacao-nome").text(doacao[0].nome);
                $("#mdl-ver-doacao-email").text(doacao[0].email);
                var src = "{{ asset('img/uploads/doacoes') }}" +"/"+ doacao[0].talao;
                $("#mdl-ver-doacao-talao").attr("src",src);
                $("#mdl-ver-doacao").modal();
              }
            });
        }

        if($(this).data("value") == "aceitar-doacao"){
          var id = $(this).data("id");
          $("#mdl-aceitar-doacao-id").val(id);
          $("#mdl-aceitar-doacao").modal();
        }
      });

    

    })
  </script>
  @show
  @stack('body')
</body>

</html>