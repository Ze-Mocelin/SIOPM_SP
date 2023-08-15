<div class="modal fade" id="modal-novo-4{{ $ocorrencia['id'] }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Abortar Ocorrências</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div>
                    <div>
                        <div>
                            <label for="opcao-1">
                                <input type="radio" id="opcao-1" name="opcao" onclick="handleRadioChange()">
                                TROTE
                            </label>
                        </div>
                        <div>
                            <label for="opcao-2">
                                <input type="radio" id="opcao-2" name="opcao" onclick="handleRadioChange()">
                                CONTATO VIA FONE SOLICITANTE DISPENSA PRESENÇA DE VIATURA NO LOCAL
                            </label>
                        </div>
                        <div>
                            <label for="opcao-3">
                                <input type="radio" id="opcao-3" name="opcao" onclick="handleRadioChange()">
                                ENDEREÇO NÃO LOCALIZADO
                            </label>
                        </div>
                        <div>
                            <label for="opcao-4">
                                <input type="radio" id="opcao-4" name="opcao" onclick="handleRadioChange()">
                                Opção 4
                            </label>
                        </div>
                        <textarea id="texto-editavel" class="form-control" rows="3" oninput="handleTextareaInput()" disabled></textarea>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button id="btn-salvar-observar" type="button" class="btn btn-primary">Abortar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <script>
            function handleRadioChange() {
                const textarea = document.getElementById('texto-editavel');
                const radios = document.getElementsByName('opcao');

                let selectedOption = null;

                for (const radio of radios) {
                    if (radio.checked) {
                        selectedOption = radio;
                        break;
                    }
                }

                if (selectedOption) {
                    textarea.value = selectedOption.parentElement.textContent.trim();
                    textarea.disabled = false;
                } else {
                    textarea.disabled = false;
                }
            }
        </script>
