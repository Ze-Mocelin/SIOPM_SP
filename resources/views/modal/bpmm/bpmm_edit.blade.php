<div class="modal fade" id="modal-edit-{{$b->id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">BPM/M - editar {{ $b -> nome }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('bpmm/edit/'.$b->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$b->id}}" />
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Nome do batalhão</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do batalhão" value="{{ $b->nome }}">
                                <div class="text-danger">{{$errors->first('nome')}}</div>
                            </div>
                            <div class="form-group">
                                <label for="nome">Descrição</label>
                                <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição" value="{{ $b->descricao }}">
                                <div class="text-danger">{{$errors->first('descricao')}}</div>
                            </div>
                            <div class="form-group">
                                <label for="nome">Polígono</label>
                                <textarea id="poligono" name="poligono" rows="10" class="form-control" placeholder="Polígono">{{ $b->poligono }}</textarea>
                                <div class="text-danger">{{$errors->first('poligono')}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Tipo</label><br>
                                <input type="radio" name="tipo" class="form-check-input" id="tipo" value="1" @if($b->tipo == 1) checked @endif>Rádio patrulha<br>
                                <input type="radio" name="tipo" class="form-check-input" id="tipo" value="2" @if($b->tipo == 2) checked @endif>Especialidades<br>
                                <input type="radio" name="tipo" class="form-check-input" id="tipo" value="3" @if($b->tipo == 3) checked @endif>Bombeiros<br>
                                <div class="text-danger">{{$errors->first('tipo')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /.card-body -->
            </div>

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-outline-light">Salvar</button>
                </form>
            </div>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
