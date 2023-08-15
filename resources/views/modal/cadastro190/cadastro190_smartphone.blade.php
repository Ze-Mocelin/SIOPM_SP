<div class="modal fade" id="modal-smartphone">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">CADASTRAR IMEI</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nome">Marca</label>
                                <input type="text" name="marcaSmartphone" class="form-control" id="marcaSmartphone" placeholder="Marca">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="nome">Modelo</label>
                                <input type="text" name="modeloSmartphone" class="form-control" id="modeloSmartphone" placeholder="Modelo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Número IMEI</label>
                                <input type="text" name="numeroimeiSmartphone" class="form-control" id="numeroimeiSmartphone" placeholder="Número IMEI">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Situação</label>
                                <select id="situacaoSmartphone" class="form-control" name="situacaoSmartphone">

                                        <option value="Extraviado">Extraviado</option>
                                        <option value="Roubo">Roubo</option>
                                        <option value="Furto">Furto</option>
                                        </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- /.card-body -->
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary toastrDefaultSuccess" id="saveButtonSmartphone" data-dismiss="modal">Salvar</button>
                </form>
            </div>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
