<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    @if (auth()->check())
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('img/user.png') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>@yield('user-name', 'Alexander Pierce')</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    @endif
    {{--
    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    --}}

    <!-- Sidebar Menu -->
    @if (auth()->check())
    @section('sidebar-menu')
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
      <li><a href="{{ action('CampanhaController@index')}}"><i class="fa fa-hands-helping"></i>
          <span>Campanhas</span></a></li>
      <li><a href="{{ action('DoacaoController@index') }}"><i class="fa fa-donate"></i> <span>Doações</span></a></li>
      <li><a href="{{ action('UserController@index') }}"><i class="fa fa-users"></i> <span>Utilizadores</span></a></li>
    </ul>
    @endif
    @show
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>