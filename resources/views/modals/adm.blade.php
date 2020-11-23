<!-- Modal Ver Doação -->
<div class="modal fade" id="mdl-ver-doacao" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title text-center" id="staticBackdropLabel" style="color: #00E676">Detalhes da Doação
                </h3>
                <div class="text-center" style="color: #00E676">
                    <i class="fa fa-donate fa-4x"></i>
                </div>

            </div>
            <div class="modal-body">
                <div class="border-bottom">
                    <h4>Doador: <span id="mdl-ver-doacao-nome"></span> </h4>
                    <h4>Email: <span id="mdl-ver-doacao-email"></span> </h4>
                </div>
                <hr>
                <embed id="mdl-ver-doacao-talao" type="" width="100%">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Inserir Valor Doação -->
<div class="modal fade" id="mdl-aceitar-doacao" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title text-center" id="staticBackdropLabel" style="color: #00E676">Detalhes da Doação
                </h3>
                <div class="text-center" style="color: #00E676">
                    <i class="fa fa-donate fa-4x"></i>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{ action('DoacaoController@aceitar') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="mdl-aceitar-doacao-id" required>
                    <div class="form-group">
                        <label for="mdl-aceitar-doacao-valor" class="col-form-label">Valor da Doação:</label>
                        <input type="number" name="valor" required id="mdl-aceitar-doacao-valor" class="form-control"
                            placeholder="Insira aqui o valor da doacao">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Aceitar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>