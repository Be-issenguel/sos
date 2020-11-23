@extends('site.app')
@section('conteudo')
<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Detalhes da Campanha</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->
<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="section_title text-center mb-55">
            <h3><span>{{ $campanha->titulo }}</span></h3>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0" style="margin:0px auto">
                <div class="blog_left_sidebar">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="{{ asset("storage/$campanha->imagem") }}" alt="">
                        </div>
                        <div class="blog_details">
                            <div class=" border-bottom">
                                <h4><i class="fa fa-user"></i> Criado Por: {{ $campanha->user->name }}
                                    {{ $campanha->user->surname }}</h4>
                                <h4><i class="fa fa-calendar"></i> Aos: {{ $campanha->created_at }}</h4>
                            </div>
                            <div class="row justify-content-center border-bottom">
                                <p style="margin-top:4%">
                                    <a href="#" data-toggle="modal" data-target="#mdl-contacto"
                                        class="btn btn-info btn-block">Obter Contacto</a>
                                </p>
                            </div>
                            <div class="row justify-content-center">
                                <h2>{{ $campanha->objectivo }}</h2>
                            </div>
                            <div class="row justify-content-center border-bottom">
                                <p>{{ $campanha->descricao }}</p>
                            </div>
                            <div class="row justify-content-center">
                                <span>Arecadado {{ $campanha->valor_arrecadado }} de
                                    {{ $campanha->valor_esperado }}</span>
                            </div>
                            <div class="">
                                <p style="margin-top:4%">
                                    <a href="#" class="btn btn-success btn-block" data-toggle="modal"
                                        data-target="#mdl-doacao">Fazer Doação</a>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
<!-- Modal Contacto -->
<div class="modal fade" id="mdl-contacto" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="staticBackdropLabel" style="color: #00E676">Contacto</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="border-bottom">
                    <h1>Nome: {{ $campanha->user->name }} {{$campanha->user->surname}}</h1>
                    <p>Para Saber mais sobre o nosso SOS contacte-nos</p>
                </div>
                <div class="row justify-content-center">
                    <h5 style="color: #00E676">Telefone:</h5>
                </div>
                <div class="row justify-content-center">
                    <p>{{ $campanha->user->phone }} </p>
                </div>
                <div class="row justify-content-center">
                    <h5 style="color: #00E676">Email:</h5>
                </div>
                <div class="row justify-content-center">
                    <p>{{ $campanha->user->email }} </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Doação -->
<div class="modal fade" id="mdl-doacao" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="staticBackdropLabel" style="color: #00E676">VAQUINHA SOS PRESTAÇÃO DE SERVIÇOS SU LD</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <img src="{{ asset('img/sos_hand.svg') }}" alt="" width="10%">
                </div>
                <div class="row justify-content-center" style="margin-top: 4%">
                    <h6>Para ajudar faça as transferência nessas coordenadas</h6>
                </div>
                <div class="row justify-content-center">
                    <h6 style="color: #00E676">IBAN</h6>
                </div>
                <div class="row justify-content-center border-bottom">
                    <h6>0055.0000.0189.3617.1011.1</h6>
                </div>
                <form action="{{ action('DoacaoController@store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="campanha" value="{{ $campanha->id }}">
                    <div class="form-group">
                        <label for="nome" class="col-form-label">Nome:</label>
                        <input type="text" name="nome" required id="d_nome" class="form-control" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" name="email" required id="d_email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="talao" class="col-form-label">Talão de Transferência:</label>
                        <input type="file" name="talao" required id="d_talao" class="form-control" id="talao">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Doar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection