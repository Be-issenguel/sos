<header class="main-header">

  <!-- Logo -->
  <a href="{{ action('HomeController@index') }}" class="logo">
    @section('logo-mini')
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">sos</span>
    @show
    @section('logo-lg')
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">SOS</span>
    @show
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="a" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        @if (auth()->check())
        @include('admin-lte::layouts.main-header.navbar-right-menu.user-menu')
        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
        <li>
          <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
              class="fa fa-sign-out-alt"></i> <span></span>Sair</a>
        </li>
        @else
        <li>
          <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a>
        </li>
        @endif
      </ul>
    </div>
  </nav>
</header>