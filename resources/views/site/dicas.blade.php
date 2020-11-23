@extends('site.app')
@section('conteudo')
<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Dicas</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->
<!-- Start Align Area -->
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="section-top-border">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center mb-55">
                            <h3><span>DICAS PARA UM SOS BEM SUCEDIDO</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 mt-sm-20">
                        <div class="">
                            <ol class="ordered-list">
                                <li class="mb-30"><span>Saiba qual é o problema que pretende resolver</span></li>
                                <li class="mb-30"><span>Use um título cativante</span></li>
                                <li class="mb-30"><span>Carregue fotos e vídeos na máxima qualidade que puder</span>
                                </li>
                                <li class="mb-30"><span>Descreva a sua história de forma clara e objetiva</span></li>
                                <li class="mb-30"><span>Seja o mais transparente possível quanto aos custos inerentes à
                                        sua campanha SOS;</span></li>
                                <li class="mb-30"><span>Partilhe com consistência o seu SOS nas suas redes
                                        sociais</span></li>
                                <li class="mb-30"><span>Peça ao número máximo de pessoas que puder, que partilhem nas
                                        suas redes sociais com consistência</span></li>
                            </ol>
                        </div>
                        <a href="#" class="btn btn-success btn-block">Iniciar SOS</a>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('img/sos_think.svg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection