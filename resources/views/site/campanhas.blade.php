@extends('site.app')
@section('conteudo')
<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Campanhas</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->
<!-- popular_causes_area_start  -->
@if (count($campanhas))
<div class="popular_causes_area pt-120">
    <div class="container">
        <div class="row">
            @foreach ($campanhas as $campanha)
            <div class="col-lg-4 col-md-6">
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
            </div>
            @endforeach
        </div>
    </div>
</div>
@else
<div data-scroll-index='1' class="make_donation_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-55">
                    <h3><span>SEM CAMPANHAS</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="donate_now_btn text-center">
                    <a href="#" class="boxed-btn4">Inicie Uma Agora</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endif

<!-- popular_causes_area_end  -->
@endsection