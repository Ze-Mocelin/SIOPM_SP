<?php

?>
<div class="card-body">
    <div class="modal fade" id="modal-folder">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Informações - pastas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('newfolder-publication')}}">
                    {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Nome da pasta</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da pasta" required>
                                <div class="text-danger">{{$errors->first('nome')}}</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <ul class="list-group">
                                    @foreach ($pastaDocumentos as $pasta => $quantidade)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $pasta }}
                                            <span class="badge bg-primary rounded-pill">{{ $quantidade }}</span>
                                        </li>
                                    @endforeach
                                  </ul>
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
