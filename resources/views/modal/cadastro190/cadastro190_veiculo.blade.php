<div class="modal fade" id="modal-veiculo">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Veículo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    {{csrf_field()}}
                <div class="card-body">
                <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nome">Placa</label>
                                <input type="text" name="placaVeiculo" class="form-control" id="placaVeiculo" placeholder="Placa">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="nome">Chassis</label>
                                <input type="text" name="chassisVeiculo" class="form-control" id="chassisVeiculo" placeholder="Chassis">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nome">Cor</label>
                                <input type="text" name="corVeiculo" class="form-control" id="corVeiculo" placeholder="Cor">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nome">Marca</label>
                                <input type="text" name="marcaVeiculo" class="form-control" id="marcaVeiculo" placeholder="Marca">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="nome">Modelo</label>
                                <input type="text" name="modeloVeiculo" class="form-control" id="modeloVeiculo" placeholder="Modelo">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Situação</label>
                                <select id="situacaoVeiculo" class="form-control" name="situacaoVeiculo">
                                    <option value="Abandonado">Abandonado</option>
                                    <option value="Localizado">Localizado</option>
                                    <option value="Ação Criminosa">Ação Criminosa</option>
                                    <option value="Roubo">Roubo</option>
                                    <option value="Furto">Furto</option>
                                    <option value="Apropriação Indebita">Apropriação Indébita</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- /.card-body -->
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary toastrDefaultSuccess" id="saveButtonVeiculo" data-dismiss="modal">Salvar</button>
                </form>
            </div>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
