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
                    <h3 class="mb-30" style="color: #00E676">Registar SOS</h3>
                    <form action="{{ action('CampanhaController@store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group col-md-12">
                            <input type="number" name="valor" class="form-control" id="exampleInputEmail1"
                                placeholder="Valor á Arrecadar" aria-describedby="emailHelp">
                            @if ($errors->has('valor'))
                            <span class="text-danger">{{ $errors->first('valor') }}</span>
                            @endif
                            <small id="emailHelp" class="form-text text-muted">Se for atingido ou ultrapassado dentro do
                                prazo de angariação, os fundos serão entregues ao promotor do projecto. Caso contrário,
                                serão devolvidos aos apoiantes. Consulte para saber melhor sobre o cálculo do valor
                                líquido saber mais...</small>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1" style="color: #00E676">Titulo do SOS:</label>
                            <input type="text" name="titulo"
                                placeholder="Ajuda se for um texto claro, breve e objectivo" class="form-control"
                                id="exampleInputPassword1">
                            @if ($errors->has('titulo'))
                            <span class="text-danger">{{ $errors->first('titulo') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1" style="color: #00E676">Para que Fim:</label>
                            <select class="form-control" name="objectivo" id="exampleFormControlSelect1">
                                <option value="Saúde">Saúde</option>
                                <option value="Ambiente">Ambiente</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1" style="color: #00E676">Nº de Documento de
                                Identificação:</label>
                            <input type="text" placeholder="Nº de Indentificação / NIF / Passaporte"
                                name="numero_de_identficacao" class="form-control" id="exampleInputPassword1">
                            @if ($errors->has('numero_de_identficacao'))
                            <span class="text-danger">{{ $errors->first('numero_de_identficacao') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1" style="color: #00E676">Imagen do Documento (BI, PassPort,
                                Carta de Condução):</label>
                            <input type="file" name="imagem_do_documento" class="form-control"
                                id="exampleInputPassword1">
                            @if ($errors->has('imagem_do_documento'))
                            <span class="text-danger">{{ $errors->first('imagem_do_documento') }}</span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputPassword1" style="color: #00E676">Categoria:</label>
                                    <select class="form-control" name="categoria" id="exampleFormControlSelect1">
                                        @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->descricao }}">{{ $categoria->descricao }}</option>
                                        @endforeach
                                        <option value="Outros...">Outros...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputPassword1" style="color: #00E676">Provincia:</label>
                                    <select class="form-control" name="provincia" id="exampleFormControlSelect1">
                                        <option value="Luanda">Luanda</option>
                                        <option value="Benguela">Benguela</option>
                                        <option value="Huanbo">Huanbo</option>
                                        <option value="Uige">Uige</option>
                                        <option value="Cabinda">Cabinda</option>
                                        <option value="Kuando Kubango">Kuando Kubango</option>
                                        <option value="Lunda Sul">Lunda Sul</option>
                                        <option value="Lunda Norte">Lunda Norte</option>
                                        <option value="Bíe">Bíe</option>
                                        <option value="Kwanza Sul">Kwanza Sul</option>
                                        <option value="Moxico">Moxico</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Cunene">Cunene</option>
                                        <option value="Kwanza Norte">Kwanza Norte</option>
                                        <option value="Bengo">Bengo</option>
                                        <option value="Namibe">Namibe</option>
                                        <option value="Malanje">Malanje</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1" style="color: #00E676">Imagem Principal:</label>
                            <input type="file" name="imagem_do_projecto" class="form-control"
                                id="exampleInputPassword1">
                            @if ($errors->has('imagem_do_projecto'))
                            <span class="text-danger">{{ $errors->first('imagem_do_projecto') }}</span>
                            @endif
                            <small id="emailHelp" class="form-text text-muted">Caso não tenha um logotipo, coloque uma
                                imagem que tenha impacto e que esteja relacionada ao seu projecto</small>
                        </div>
                        <div class="form-group border-bottom col-md-12">
                            <label for="exampleInputPassword1" style="color: #00E676">Acerca do SOS:</label>
                            <textarea name="descricao" placeholder="Descrição do projecto, Ex: A história do Projecto"
                                class="form-control" id="" cols="30" rows="5"></textarea>
                            @if ($errors->has('descricao'))
                            <span class="text-danger">{{ $errors->first('descricao') }}</span>
                            @endif
                            <div class="writing-tips-contain show-for-medium medium-offset-8 medium-4">
                                <div class="layer-white writing-tips-content">
                                    <div class="mb10"><strong>Para arrecadar o máximo de dinheiro para a sua campanhas,
                                            faça o seguinte:</strong></div>
                                    <div class="flex-top mb5"><i class="fa fa-check" style="color: green;"></i><span>-
                                            Descreva o que aconteceu para tu criares este SOS(Historias)</span></div>
                                    <div class="flex-top mb5"><i class="fa fa-check" style="color: green;"></i><span>-
                                            Descreva em detalhes como os fundos serão usados</span></div>
                                    <div class="flex-top mb5"><i class="fa fa-check" style="color: green;"></i><span>-
                                            Explique quando você vai precisar dos fundos</span></div>
                                    <div class="flex-top mb5"><i class="fa fa-check" style="color: green;"></i><span>-
                                            Fale sobre o que isso significa para você</span></div>
                                    <div class="flex-top mb5"><i class="fa fa-check" style="color: green;"></i><span>-
                                            Expresse o quanto você ficará agradecido pela ajuda</span></div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 pt-3 pb-3 pb-2 mb-2 border-bottom">

                            <label for="sel1"><strong>NOTA:</strong> Ao criar o projecto SOS, estas a concordar com os
                                termos e condições imposta nesta aplicação. <a
                                    style="text-decoration: true; color: #10da65;" href="#" data-toggle="modal"
                                    data-target="#exampleModal">termo_e_políticas click
                                    aqui...</a></label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Criar SOS</button>
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