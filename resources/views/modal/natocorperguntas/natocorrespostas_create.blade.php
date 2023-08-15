<?php
$naturezaocorrencia = App\Models\NaturezaOcorrencia::where('status', 1)->get();
$natocorperguntas = App\Models\NatOcorPerguntas::all();
?>
<div class="modal fade" id="modal-respostas">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar natureza da ocorrência respostas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('naturezaocorrenciarespostas/create')}}">
                {{csrf_field()}}

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="naturezaocorrencia">Natureza da ocorrência</label>
                                <input type="text" class="form-control" id="naturezaocorrencia" name="naturezaocorrencia" list="naturezaocorrencia-list" placeholder="Digite a natureza da ocorrência">
                                <datalist id="naturezaocorrencia-list">
                                    @foreach ($naturezaocorrencia as $n)
                                        <option value="{{$n->codigo}} - {{$n->descricao}}"></option>
                                    @endforeach
                                </datalist>
                                <div class="text-danger">{{$errors->first('naturezaocorrencia')}}</div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="prioridade">Prioridade</label>
                                <input type="text" name="prioridade" class="form-control" id="prioridade" placeholder="1, 2, 3, 4" >
                                <div class="text-danger">{{$errors->first('prioridade')}}</div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="tipo">Tipo</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="tipo" id="tipo">
                                        <option value="input">Input</option>
                                        <option value="select">Select</option>
                               </select>
                                <div class="text-danger">{{$errors->first('tipo')}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="tipo">Pergunta</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="pergunta" id="pergunta">
                                    @foreach ($natocorperguntas as $n)
                                    <option value="{{$n->id}}">{{ substr($n->naturezaocorrencia, 0, 3) }} - {{$n->pergunta}}</option>
                                @endforeach
                               </select>
                                <div class="text-danger">{{$errors->first('pergunta')}}</div>
                            </div>
                            <div class="form-group">
                                <label for="pergunta">Resposta</label>
                                <input type="text" name="resposta" class="form-control" id="resposta" placeholder="Digite a resposta" >
                                <div class="text-danger">{{$errors->first('resposta')}}</div>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Digite a descrição" >
                                <div class="text-danger">{{$errors->first('descricao')}}</div>
                            </div>
                            <div class="form-group">
                                <label for="textoauxiliar">Texto auxiliar</label>
                                <input type="text" name="textoauxiliar" class="form-control" id="textoauxiliar" placeholder="Digite o texto para orientar a resposta" >
                                <div class="text-danger">{{$errors->first('textoauxiliar')}}</div>
                            </div>
                            <a class="btn btn-success" onclick="gerarCodigo()">Gerar código</a>
                            <div class="form-group">
                                <label for="codigo">Código</label>
                                <textarea id="codigo" name="codigo" rows="10" class="form-control"></textarea>
                                <div class="text-danger">{{$errors->first('codigo')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
    function gerarCodigo() {
        var tipo = document.getElementById("tipo").value;
        var resposta = document.getElementById("resposta").value;
        var codigoTextarea = document.getElementById("codigo");

        var codigoHtml = '';

        if (tipo === "input") {
            codigoHtml += '<label for="nome_do_input">' + resposta + '</label>';
            codigoHtml += '<input type="text" class="form-control" name="nome_do_input" placeholder="Digite algo">';
        }
        // Adicione mais condições para outros tipos, se necessário.
        if(tipo === "select"){
            codigoHtml += '<label for="nome_do_input">' + resposta + '</label>';
            codigoHtml += '<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="nome_do_input" id="nome_do_input">';
            codigoHtml += '<option value="digite o valor da opção">digite a opção</option>';
            codigoHtml += '</select>';
        }
        codigoTextarea.value = codigoHtml;
    }

</script>
