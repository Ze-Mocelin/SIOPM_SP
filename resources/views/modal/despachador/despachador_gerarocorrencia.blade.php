<div class="modal fade" id="modal-gerarocorrencia">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Gerar Ocorrência</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('usuario/create')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" class="form-control" id="estado" placeholder="Estado">
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereço">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="text" name="numero" class="form-control" id="numero" placeholder="Número">
                        </div>
                    </div>      
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Complemento">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">   
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="referência">referencia</label>
                            <input type="text" name="referencia" class="form-control" id="referencia" placeholder="Referência">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bpmm">BPMM</label>
                            <input type="text" name="bpmm" class="form-control" id="bpmm" placeholder="BPMM">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="natureza">Natureza de Ocorrência</label>
                            <input type="text" name="natureza" class="form-control" id="natureza" placeholder="Natureza de Ocorrência">
                        </div>
                     </div>
                </div>
                <div class="row">
                    <div class="row col-md-12">
                        <div class="form-group">
                            <label for="historico">Histórico Inicial</label>
                            <textarea name="historico" class="form-control" id="historico" placeholder="Histórico Inicial" rows="5" cols="100"></textarea>
                        </div>
                    </div>   
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Gerar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
