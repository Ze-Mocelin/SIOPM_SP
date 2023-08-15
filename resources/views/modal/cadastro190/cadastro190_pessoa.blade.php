    <div class="modal fade" id="modal-pessoa">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pessoa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        {{csrf_field()}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nomePessoa" class="form-control" id="nomePessoa" placeholder="Nome completo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nome">RG</label>
                                    <input type="text" name="rgPessoa" class="form-control" id="rgPessoa" placeholder="RG">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nome">Situação</label>
                                    <select id="situacaoPessoa" name="situacaoPessoa" class="form-control" name="situacao">
                                        <option value="Testemunha">Testemunha</option>
                                        <option value="Autor">Autor</option>
                                        <option value="Procurado">Procurado</option>
                                        <option value="Vitima">Vitima</option>
                                        <option value="Vitima Fatal">Vitima Fatal</option>
                                        <option value="Conduzido">Conduzido</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary toastrDefaultSuccess" id="saveButtonPessoa" data-dismiss="modal">Salvar</button>
                    </form>
                </div>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
