<?php
$bpmm = App\Models\Bpmm::where('tipo', 1)->get();
$especialidades = App\Models\Bpmm::where('tipo', 2)->get();
$bombeiros = App\Models\Bpmm::where('tipo', 3)->get();
?>
<div class="modal fade" id="modal-novo-5{{ $ocorrencia['id'] }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Redirecionar ocorrência</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('despachador/redirecionar') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{ $ocorrencia['id'] }}" />
                    <!-- Conteúdo do novo modal 5 -->
                    <div class="col-md-12">
                        <label for="nome">BPM/M</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                            data-select2-id="1" tabindex="-1" aria-hidden="true" name="bpmmSelect" id="bpmmSelect">
                            <option value="">Selecione uma opção</option>

                            <option value="bpmm">Rádio patrulha</option>
                            <option value="especialidades">Especialidades</option>
                            <option value="bombeiros">Bombeiros</option>
                        </select>
                    </div>
                    <div class="col-md-12" id="bpmmDiv" style="display: none;">
                        <label for="nome">BPM/M</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                            data-select2-id="1" tabindex="-1" aria-hidden="true" name="bpmm" id="bpmm">
                            <option value="">Selecione uma opção</option>
                            @foreach ($bpmm as $b)
                                <option value="{{ $b->nome }}" @if ($ocorrencia['bpmm'] == $b->nome) selected @endif>
                                    {{ $b->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12" id="especialidadesDiv" style="display: none;">
                        <label for="nome">Especialidades</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                            data-select2-id="1" tabindex="-1" aria-hidden="true" name="especialidades"
                            id="especialidades">
                            <option value="">Selecione uma opção</option>
                            @foreach ($especialidades as $b)
                                <option value="{{ $b->nome }}">{{ $b->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12" id="bombeirosDiv" style="display: none;">
                        <label for="nome">Bombeiros</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                            data-select2-id="1" tabindex="-1" aria-hidden="true" name="bombeiros" id="bombeiros">
                            <option value="">Selecione uma opção</option>
                            @foreach ($bombeiros as $b)
                                <option value="{{ $b->nome }}">{{ $b->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label>Observação</label>
                        <textarea id="observacao" name="observacao" class="form-control" rows="4"></textarea>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success">Redirecionar</button>
            </div>
            </form>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#bpmmSelect').on('change', function() {
        var selectedOption = $(this).val();

        // Ocultar todos os divs de selects
        $('#bpmmDiv, #especialidadesDiv, #bombeirosDiv').hide();

        // Mostrar o div correspondente à opção selecionada
        $('#' + selectedOption + 'Div').show();
    });
});
</script>
