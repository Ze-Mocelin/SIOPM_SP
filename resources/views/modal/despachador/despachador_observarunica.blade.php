<div class="modal fade" id="modal-novo-2{{ $ocorrencia['id'] }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Observar ocorrência</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('despachador/observar')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$ocorrencia['id']}}" />
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
                                        <textarea id="descricao_personalizada" name="descricao_personalizada" rows="4" cols="50"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="submit" id="btn-salvar-observar" type="button" class="btn btn-primary">Salvar</button>
            </div>
        </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Adiciona um evento de clique aos radios
    $('input[type="radio"]').on('click', function() {
        // Verifica se o radio selecionado é o de texto personalizado
        if ($(this).val() === '') {
            // Copia o valor do textarea para o radio
            $(this).val($('#descricao_personalizada').val());
        }
        else {
            // Copia o valor do radio para o textarea
            $('#descricao_personalizada').val($(this).val());
        }
    });
});
</script>
