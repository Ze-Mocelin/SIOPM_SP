<div class="card-body">
    <div class="modal fade" id="modal-despachador">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Observar todas Ocorrências</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('cidade/create')}}">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nome">Observar:</label>
                                        <div>
                                            <label>
                                                <input type="radio" name="descricao" value="CGP E CFP CIENTE DAS PENDENCIAS, NADA DETERMINOU"> CGP E CFP CIENTE DAS PENDENCIAS, NADA DETERMINOU
                                            </label>
                                        </div>
                                        <div>
                                            <label>
                                                <input type="radio" name="descricao" value="FALTA DE VIATURA"> FALTA DE VIATURA
                                            </label>
                                        </div>
                                        <div>
                                            <label>
                                                <input type="radio" name="descricao" value="Modelo 3"> Modelo 3
                                            </label>
                                        </div>
                                        <div>
                                            <label>
                                                <input type="radio" name="descricao" value="Modelo 4"> Modelo 4
                                            </label>
                                        </div>
                                        <div>
                                            <label>
                                                <input type="radio" name="descricao" value="Modelo 5"> Modelo 5
                                            </label>
                                        </div>
                                        <div>
                                            <label>
                                                <input type="radio" name="descricao" value="" checked> Texto personalizado
                                            </label>
                                            <textarea id="descricao-personalizada" name="descricao-personalizada" rows="4" cols="50"></textarea>
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
</div>

<script>
    const radioButtons = document.querySelectorAll('input[type="radio"]');
    const descricaoPersonalizada = document.getElementById('descricao-personalizada');

    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            if (this.value === '') {
                descricaoPersonalizada.style.display = 'block';
            } else {
                descricaoPersonalizada.style.display = 'none';
            }
        });
    });
</script>
