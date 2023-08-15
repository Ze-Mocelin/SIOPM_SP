<div class="card-body">
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">BPM/M</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('bpmm/create')}}">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nome">Nome do batalhão</label>
                                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do batalhão">
                                        <div class="text-danger">{{$errors->first('nome')}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nome">Descrição</label>
                                        <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição">
                                        <div class="text-danger">{{$errors->first('descricao')}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nome">Polígono</label>
                                        <textarea id="poligono" name="poligono" rows="10" class="form-control" placeholder="Polígono"></textarea>
                                        <div class="text-danger">{{$errors->first('poligono')}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nome">Tipo</label><br>
                                        <input type="radio" name="tipo" class="form-check-input" id="tipo" value="1" >Rádio patrulha<br>
                                        <input type="radio" name="tipo" class="form-check-input" id="tipo" value="2" >Especialidades<br>
                                        <input type="radio" name="tipo" class="form-check-input" id="tipo" value="3" >Bombeiros<br>
                                        <div class="text-danger">{{$errors->first('tipo')}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary toastrDefaultSuccess">Salvar</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
