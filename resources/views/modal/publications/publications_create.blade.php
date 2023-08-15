<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Informações</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('publications')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nome">Título da informação</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Título da informação" required>
                                        <div class="text-danger">{{$errors->first('name')}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nome">Descição</label>
                                        <textarea name="description" class="form-control" id="description" placeholder="Descrição" rows="5" cols="100"></textarea>
                                        <div class="text-danger">{{$errors->first('description')}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nome">Tags</label>
                                        <input type="text" name="tags" class="form-control" id="tags" placeholder="Tags, separadas por víergula" required>
                                        <div class="text-danger">{{$errors->first('tags')}}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nome">Data início</label>
                                        <input type="date" name="data_inicio" class="form-control" id="data_inicio">
                                        <div class="text-danger">{{$errors->first('data_inicio')}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nome">Data término</label>
                                        <input type="date" name="data_termino" class="form-control" id="data_termino" >
                                        <div class="text-danger">{{$errors->first('data_termino')}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nome">Categoria</label>
                                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="type" id="type">
                                            <option value="0">Sem categoria</option>
                                            <option value="1">Sistema</option>
                                            <option value="2">Cadastro de ocorrências</option>
                                            <option value="3">Instruções sistema</option>
                                            <option value="4">Ordem de serviço</option>
                                            <option value="5">Instruções ICC</option>
                                        </select>
                                        <div class="text-danger">{{$errors->first('categorie_type')}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nome">Arquivo</label>
                                        <input type="file" name="file" class="form-control" id="file" size="15MB" placeholder="Arquivos suportados jpg e pdf" required accept=".jpg, .pdf, .ppt, .pptx">
                                        <p>Arquivos suportados jpg e pdf até 15MB</p>
                                        <div class="text-danger">{{$errors->first('file')}}</div>
                                    </div>
                                </div>
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
