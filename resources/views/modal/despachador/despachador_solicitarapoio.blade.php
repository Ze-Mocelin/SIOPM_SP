<div class="modal fade" id="modal-apoio{{ $ocorrencia['id'] }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Solicitar Apoio</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="input-group input-group-sm">
                            <select class="form-control" id="select1">
                                <option value="" disabled selected>Escolha uma personalidade</option>
                                <option value="patrulhamento">Patrulhamento</option>
                                <option value="especialidades">Especialidades</option>
                                <option value="bombeiros">Bombeiros</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-sm">
                            <select class="form-control" id="select2">
                                <!-- Opções serão preenchidas dinamicamente -->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="input-group input-group-sm">
                            <textarea class="form-control"></textarea>
                            <span class="input-group-append">
                                <button type="button" class="btn btn-info btn-flat" id="redirecionarBtn">Apoio</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const select1 = document.getElementById("select1");
        const select2 = document.getElementById("select2");
        const redirecionarBtn = document.getElementById("redirecionarBtn");

        // Opções do segundo select baseadas na seleção do primeiro select
        select1.addEventListener("change", function() {
            const selectedOption = select1.value;
            select2.innerHTML = ""; // Limpar as opções existentes

            if (selectedOption === "patrulhamento") {
    const nullOption = document.createElement("option");
    nullOption.value = "";
    nullOption.text = "Escolha o batalhão";
    select2.add(nullOption);

    const option1 = document.createElement("option");
    option1.value = "1bpmm";
    option1.text = "1º BPM/M";
    select2.add(option1);

    const option2 = document.createElement("option");
    option2.value = "2bpmm";
    option2.text = "2º BPM/M";
    select2.add(option2);
} else if (selectedOption === "especialidades") {
    const nullOption = document.createElement("option");
    nullOption.value = "";
    nullOption.text = "Escolha o batalhão";
    select2.add(nullOption);

    const option1 = document.createElement("option");
    option1.value = "transito";
    option1.text = "Trânsito";
    select2.add(option1);

    const option2 = document.createElement("option");
    option2.value = "choque";
    option2.text = "Choque";
    select2.add(option2);
} else if (selectedOption === "bombeiros") {
    const nullOption = document.createElement("option");
    nullOption.value = "";
    nullOption.text = "Escolha o GB";
    select2.add(nullOption);

    const option1 = document.createElement("option");
    option1.value = "1gb";
    option1.text = "1º GB";
    select2.add(option1);

    const option2 = document.createElement("option");
    option2.value = "2gb";
    option2.text = "2º GB";
    select2.add(option2);
}

        });

        // Adicionar o evento de clique no botão "Redirecionar"
        redirecionarBtn.addEventListener("click", function() {
            const selectedOption1 = select1.value;
            const selectedOption2 = select2.value;

            if (selectedOption1 && selectedOption2) {
                Swal.fire({
                    icon: 'success',
                    title: 'SUCESSO',
                    text: 'Ocorrência foi redirecionada.',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'FALHA',
                    text: 'Selecione o Batalhão',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
            }
        });
    });
</script>
