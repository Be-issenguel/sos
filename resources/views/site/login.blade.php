@extends('site.app')
@section('conteudo')
<!-- Start Align Area -->
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">

        </div>

        <div class="section-top-border md-30">
            <div class="row">
                <div class="col-lg-7 col-md-8">
                    <h3 class="mb-30">Entre para iniciar a sua Sessão</h3>
                    <form action="{{ route('login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email" style="color: #00E676">Email:</label>
                            <input type="email" name="email" placeholder="Insira o seu endereço de email"
                                class="form-control" id="email">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password" style="color: #00E676">Palavra-Passe:</label>
                            <input type="password" name="password" placeholder="Insira a sua palavra-passe"
                                class="form-control" id="password">
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Entrar</button>
                        <a href="{{ route('sos_register') }}" class="mt-5">Registe-se</a>
                    </form>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('img/sos_think.svg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Align Area -->
@endsection