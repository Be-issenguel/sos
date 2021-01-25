@extends('site.app')
@section('conteudo')
<!-- slider_area_start -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="slider_area">
                <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="slider_text ">
                                    <h3> <span class="site-color">NÃO DEIXE</span> que a pobreza se transforme em
                                        paisagem</h2>
                                        <h4 style="color: white">Modificar a comunidade não precisa de grandes passos,
                                            só
                                            precisa de
                                            iniciativa...</h4>
                                        <a href="{{ route('sos') }}" class="boxed-btn3">Iniciar SOS</a>
                                        <a href="#" data-target="#mdl-doacao-directa" data-toggle="modal"
                                            class="boxed-btn3">Doe Agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="slider_area">
                <div class="single_slider  d-flex align-items-center slider_bg_2 overlay2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="slider_text ">
                                    <h3> <span class="site-color">Partilhe</span> aqui um pouquinho</h3>
                                    <h4 style="color: white">Modificar a comunidade não precisa de grandes passos, só
                                        precisa de
                                        iniciativa...</h4>
                                    <a href="{{ route('sos') }}" class="boxed-btn3">Iniciar SOS</a>
                                    <a href="#" data-target="#mdl-doacao-directa" data-toggle="modal"
                                        class="boxed-btn3">Doe Agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="slider_area">
                <div class="single_slider  d-flex align-items-center slider_bg_3 overlay2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="slider_text ">
                                    <h3> <span class="site-color">PROJETE</span> um futuro melhor</h3>
                                    <h4 style="color: white">Modificar a comunidade não precisa de grandes passos, só
                                        precisa de
                                        iniciativa...</h4>
                                    <a href="{{ route('sos') }}" class="boxed-btn3">Iniciar SOS</a>
                                    <a href="#" data-target="#mdl-doacao-directa" data-toggle="modal"
                                        class="boxed-btn3">Doe Agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- Start Align Area -->
<br>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="">
            <div class="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-defination">
                            <div class="section_title mb-20">
                                <h3><span>Quem Somos?</span></h3>
                            </div>
                            <p style="text-align: justify;text-justify: inter-word;">A vaquinha SOS é uma organização
                                que tem como missão apoiar iniciativas de combate à
                                pobreza, através de projectos sociais (sustentáveis), e também por meio do fomento ao
                                financiamento desses mesmos projectos, contribuindo assim para o desenvolvimento
                                sustentável do país. Somos a ponte entre quem precisa de ajuda e quem deseja mudar
                                vidas.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-defination">
                            <div class="section_title mb-20">
                                <h3><span>Como Mudamos Vidas?</span></h3>
                            </div>
                            <p style="text-align: justify;text-justify: inter-word;">Pessoas individuais ou colectivas
                                (pode ser você), enviam-nos projectos de forte impacto
                                social. Após aprovação do projecto, nós os disponibilizamps no site para que as pessoas
                                possam fazer doaçõe.s</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Align Area end -->

<!-- popular_causes_area_start  -->
<div class="popular_causes_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-55">
                    <h3><span>Campanhas Em Destaque</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="causes_active owl-carousel">
                    @forelse ($campanhas as $campanha)
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="{{ asset("img/uploads/campanhas/$campanha->imagem") }}" alt="">
                        </div>
                        <div class="causes_content">
                            <div class="custom_progress_bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: {{ (($campanha->valor_arrecadado*100)/$campanha->valor_esperado + 9) }}%;"
                                        aria-valuenow="{{ (($campanha->valor_arrecadado*100)/$campanha->valor_esperado) }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <span class="progres_count">
                                            {{ number_format((($campanha->valor_arrecadado*100)/$campanha->valor_esperado)) }}%
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <span><i>$</i> {{ $campanha->valor_arrecadado }} Kz recebido de
                                    {{ $campanha->valor_esperado }} Kz</span>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <h6><i class="fa fa-tags"></i> {{ $campanha->objectivo }}</h6>
                                <h6><i class="fa fa-donate"></i> {{ $campanha->doacoes() }} Doações</h6>
                            </div>
                            <h4>{{ $campanha->titulo }}</h4>
                            <p>{{ $campanha->descricao }}</p>
                            <a href="{{ action('CampanhaController@show',['id' => $campanha->id]) }}"
                                class="btn btn-success btn-block">Saber
                                Mais <span class="fa fa-align-justify" style="float:right"></span></a>
                        </div>
                    </div>
                    @empty
                    <h1>SEM CAMPANHAS REGISTADA</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular_causes_area_end  -->


<!-- news__area_start  -->
<div class="news__area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-55">
                    <h3><span>Histórias de Sucesso</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="news_active owl-carousel">
                                <div class="single__blog d-flex align-items-center">
                                    <div class="thum">
                                        <img src="img/news/zunga_1.jpg" alt="" style="height=200%">
                                    </div>
                                    <div class="newsinfo">
                                        <span>July 18, 2019</span>
                                        <a href="single-blog.html">
                                            <h3>Conheça a SOS Angola</h3>
                                        </a>
                                        <p>No sentido de ajudar as zungueiras da comunidade do Distrito Urbano de
                                            Vila
                                            Flor, no período de COVID-19, foram levantados fundos no valor de 300
                                            000
                                            Kz, para aquisição de cestas básicas, e no dia 16 de Abril foram
                                            entregues
                                            100 cestas básicas à estas guerreiras</p>{{-- 
                                        <a class="read_more" href="single-blog.html">Leia Mais</a> --}}
                                    </div>
                                </div>
                                <div class="single__blog d-flex align-items-center">
                                    <div class="thum">
                                        <img src="img/news/zunga_2.jpg" alt="">
                                    </div>
                                    <div class="newsinfo">
                                        <span>July 18, 2019</span>
                                        <a href="single-blog.html">
                                            <h3>Conheça a SOS Angola</h3>
                                        </a>
                                        <p>Identificando uma comunidade (BITA) que sofre de carência de bens de
                                            primeira
                                            necessidade, levantou-se um fundo de 700 000 Kz para aquisição de cestas
                                            básicas, e no dia 2 de Maio foi realizada a entrega de 350 cestas
                                            básicas à
                                            comunidade do BITA Tanque.</p>{{-- 
                                        <a class="read_more" href="single-blog.html">Leia Mais</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- news__area_end  -->

<!-- Modal Doação -->
<div class="modal fade" id="mdl-doacao-directa" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel" style="color: #00E676">VAQUINHA SOS PRESTACAO DE SERV
                    SU LD</h5>
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
<!-- Modal Doação end -->
@endsection