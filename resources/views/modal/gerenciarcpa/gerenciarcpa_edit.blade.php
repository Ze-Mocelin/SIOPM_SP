<div class="card-body">
    <div class="modal fade" id="modal-edit-{{ $cpa->id }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar CPA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ url('gerenciarcpa/update') }}">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row">
                                <div class="container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2> Formação do grupo de CPA's</h2>
                                                <div class="form-group">
                                                    <label for="nome">Nome do CPA</label>
                                                    <input type="text" name="nome" class="form-control"
                                                        id="nome" placeholder="Nome" value="{{ $cpa->cpas }}">
                                                    <div class="text-danger">{{ $errors->first('nome') }}</div>
                                                </div>
                                                <p><strong>Passo 1:</strong> Clique na lista à esquerda nos batalhões
                                                    que deseja formar o CPA</p>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 40px;">
                                            <div class="col">
                                                <label for="nome">Batalhões do CPA</label><br>
                                                <select multiple="multiple" size="10" name="cpas"
                                                    title="cpas">
                                                    @foreach ($cpas as $cpa)
                                                        <optgroup label="{{ $cpa->cpas }}">
                                                            @foreach ($listacpas->where('cpas', $cpa->cpas) as $listacpa)
                                                                @foreach ($bpmm->where('id', $listacpa->battalion_id) as $b)
                                                                    <option value="{{ $listacpa->battalion_id }}">
                                                                        {{ $b->nome }}
                                                                    </option>
                                                                @endforeach
                                                            @endforeach
                                                        </optgroup>
                                                    @endforeach
                                                </select>
                                                <div class="text-danger">{{ $errors->first('CPAS') }}</div>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 40px;">
                                            <div class="col">
                                                <select multiple="multiple" size="10" name="bpmms[]" id="cpas_batalhoes"
                                                    title="bpmms[]">
                                                    @foreach ($bpmm as $b)
                                                        <option value="{{ $b->id }}">{{ $b->nome }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="text-danger">{{ $errors->first('bpmms[]') }}</div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary toastrDefaultSuccess">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>


@section('css')
    <style>
        .moveall::after {
            content: attr(title);

        }

        .removeall::after {
            content: attr(title);
        }

        // Custom styling form
        .form-control option {
            padding: 10px;
            border-bottom: 1px solid #efefef;
        }
    </style>

@stop
@section('js')

    <!-- plugin -->
    <script src="{{ url('js/jquery.bootstrap-duallistbox.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ url('bootstrap-duallistbox.css') }}">

    <script>
        var demo1 = $('select[name="bpmms[]"]').bootstrapDualListbox({
            nonSelectedListLabel: 'Lista de batalhões',
            selectedListLabel: 'Batalhões selecionados',
            preserveSelectionOnMove: 'movido',
            moveAllLabel: 'Mover tudo',
            removeAllLabel: 'Remover tudo'
        });
        $("#demoform").submit(function() {
            alert($('[name="bpmms[]"]').val());
            return false;
        });
    </script>
@stop
