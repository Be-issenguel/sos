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
                    <h3 class="mb-30">Crie a Sua Conta</h3>
                    <form action="{{ action('UserController@store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" style="color: #00E676">Nome:</label>
                                    <input type="text" name="nome" placeholder="Insira o seu primeiro nome"
                                        class="form-control" id="nome" value="{{ old('nome') }}">
                                    @if ($errors->has('nome'))
                                    <span class="text-danger">{{ $errors->first('nome') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sobrenome" style="color: #00E676">Sobre Nome:</label>
                                    <input type="text" name="sobrenome" placeholder="Insira o seu último nome"
                                        class="form-control" id="sobrenome" value="{{ old('sobrenome') }}">
                                    @if ($errors->has('sobrenome'))
                                    <span class="text-danger">{{ $errors->first('sobrenome') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" style="color: #00E676">Email:</label>
                                    <input type="email" name="email" placeholder="Insira o seu endereço de email"
                                        class="form-control" id="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" style="color: #00E676">Telefone:</label>
                                    <input type="phone" name="telefone" placeholder="Insira o seu nº de telefone"
                                        class="form-control" id="telefone" value="{{ old('telefone') }}">
                                    @if ($errors->has('telefone'))
                                    <span class="text-danger">{{ $errors->first('telefone') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" style="color: #00E676">Palavra-Passe:</label>
                            <input type="password" name="password" placeholder="Insira a sua palavra-passe"
                                class="form-control" id="password">
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Criar</button>
                        <a href="{{ route('sos') }}" class="mt-5">Entrar</a>
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