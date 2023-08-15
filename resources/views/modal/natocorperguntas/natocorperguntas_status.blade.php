<div class="modal fade" id="modal-status-{{$n->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">Natureza ocorrência perguntas - trocar status  {{ $n -> naturezaocorrencia }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('naturezaocorrenciaperguntas/status/'.$n->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$n->id}}" />
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Deseja alterar o status desta pergunta?</label><br>
                                <input type="radio" name="status" class="form-check-input" id="status" value="1" @if($n->status == 1) checked @endif>Ativar<br>
                                <input type="radio" name="status" class="form-check-input" id="status" value="0" @if($n->status == 0) checked @endif>Desativar<br>
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
