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
                <form method="POST" autocomplete="off"
                action="{{ url('cadastro190') }}">
                @csrf
                <input type="hidden" name="step" value="1">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Solicitante</label>
                                <input type="text" name="inputSolicitante"
                                    class="form-control" id="inputSolicitante"
                                    placeholder="Nome do solicitante"
                                    value="{{ old('inputSolicitante') }}" required>
                                <div class="text-danger">
                                    {{ $errors->first('inputSolicitante') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <input class="form-check-input" type="checkbox"
                                id="checkboxAnonimo" name='checkboxAnonimo' value='1' onchange="toggleAnonimo()">
                            <label for="checkboxAnonimo">Anônimo</label>
                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="inputTelefone">Telefone</label>
                                <input type="text" name="inputTelefone" class="form-control" id="inputTelefone" placeholder="Telefone" value="{{ old('inputTelefone') }}" required maxlength="11">
                                <div class="text-danger">
                                    {{ $errors->first('inputTelefone') }}
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputTelefone">Cidade</label>
                                <input type="text" name="inputCidade"
                                    class="form-control" id="inputCidade"
                                    list="cidades-list"
                                    placeholder="Digite a cidade"
                                    value="{{ old('inputCidade') }}"required>
                                <datalist id="cidades-list">
                                    @foreach ($cidades as $cidade)
                                        <option value="{{ $cidade->nome }}">
                                        </option>
                                    @endforeach
                                </datalist>
                                <div class="text-danger">
                                    {{ $errors->first('inputCidade') }}
                                </div>
                                <p id="resultCEP"></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="inputEndereco">Endereço</label>
                                <input type="text" name="inputEndereco"
                                    class="form-control" id="inputEndereco"
                                    placeholder="Endereço"
                                    value="{{ old('inputEndereco') }}" required>
                                <div class="text-danger">
                                    {{ $errors->first('inputEndereco') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="inputNumero">Número</label>
                                <input type="text" name="inputNumero"
                                    class="form-control" id="inputNumero"
                                    placeholder="Número"
                                    value="{{ old('inputNumero') }}" required>
                                <div class="text-danger">
                                    {{ $errors->first('inputNumero') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputComplemento">Complemento</label>
                                <input type="text" name="inputComplemento"
                                    class="form-control" id="inputComplemento"
                                    placeholder="Complemento"
                                    value="{{ old('inputComplemento') }}"
                                    >
                                <div class="text-danger">
                                    {{ $errors->first('inputComplemento') }}
                                </div>
                                <p id="resultAddress"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputSelectAdress">Bairro</label>
                                <select
                                    class="form-control select2 select2-hidden-accessible"
                                    style="width: 100%;" data-select2-id="1"
                                    tabindex="-1" aria-hidden="true"
                                    name="inputSelectAdress"
                                    id="inputSelectAdress"
                                    onblur="adressSelect()"onclick="adressSelect()"
                                    required>
                                    <option value="" disabled selected>
                                        Selecione um bairro
                                    </option>
                                </select>
                                <div class="text-danger">
                                    {{ $errors->first('inputSelectAdress') }}
                                </div>
                                <p id="resultAddress"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputReferencia">Referência</label>
                                <input type="text" name="inputReferencia"
                                    class="form-control" id="inputReferencia"
                                    placeholder="Referência"
                                    value="{{ old('inputReferencia') }}"
                                    onfocus="adressSelect()">
                                <div class="text-danger">
                                    {{ $errors->first('inputReferencia') }}
                                </div>
                                <p id="resultAddress"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputBatalhao">BPM/M</label>
                                <input type="text" name="inputBatalhao"
                                    class="form-control" id="inputBatalhao"
                                    placeholder="Batalhão"
                                    value="{{ old('inputBatalhao') }}" required>
                                <div class="text-danger">
                                    {{ $errors->first('inputBatalhao') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputCompanhia">Cia</label>
                                <input type="text" name="inputCompanhia"
                                    class="form-control" id="inputCompanhia"
                                    placeholder="Cia"
                                    value="{{ old('inputCompanhia') }}" required>
                                <div class="text-danger">
                                    {{ $errors->first('inputCompanhia') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputNaturezaocorrencia">Natureza
                                    da
                                    ocorrência</label>
                                <input type="text"
                                    name="inputNaturezaocorrencia"
                                    class="form-control"
                                    id="inputNaturezaocorrencia"
                                    list="naturezaocorrencia-list"
                                    placeholder="Digite a natureza da ocorrência"
                                    value="{{ old('inputNaturezaocorrencia') }}"
                                    onchange="getPerguntas(this)" required>
                                <datalist id="naturezaocorrencia-list">
                                    @foreach ($naturezaocorrencia as $n)
                                        <option
                                            value="{{ $n->codigo }} - {{ $n->descricao }}">
                                            {{ $n->codigo }} -
                                            {{ $n->descricao }}
                                        </option>
                                    @endforeach
                                </datalist>
                                <div class="text-danger">
                                    {{ $errors->first('inputNaturezaocorrencia') }}
                                </div>
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
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input class="form-check-input" type="checkbox"
                                value="1" name="checkPolicial"
                                id="checkPolicial">
                            <label class="form-check-label"
                                for="checkPolicial">POLICIAL EM
                                PERIGO</label>
                            <div id="mensagem"
                                class="bg-danger text-white font-weight-bold text-center"style="display: none;">
                                ⚠️ VOCÊ SELECIONOU A OPÇÃO POLICIAL
                                EM PERIGO ⚠️
                            </div>
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
<script>
    var inputNumero = document.getElementById("inputNumero");
    var inputEndereco = document.getElementById("inputEndereco");
    var inputCidade = document.getElementById("inputCidade");
    var inputBatalhao = document.getElementById("inputBatalhao");
    var inputCompanhia = document.getElementById("inputCompanhia");
    var inputSelectAdress = document.getElementById("inputSelectAdress");

    inputCidade.addEventListener("input", function(event) {
        if (event.inputType === "insertLineBreak" || event.inputType === "insertText") {
            fetchCEP();
        }
    });

    inputNumero.addEventListener("input", function(event) {
        if (event.inputType === "insertLineBreak" || event.inputType === "insertText") {
            fetchAddress();
        }
    });





    function clearResult() {
        document.getElementById("resultAddress").innerText = "";
        document.getElementById("resultCEP").innerText = "";
        document.getElementById("inputBatalhao").innerText = "";
        document.getElementById("inputCompanhia").innerText = "";
    }

    var dateAdress = [];

    function fetchAddress() {
        var city = inputCidade.value.replace(/-/g, ',');
        var url = "https://nominatim.openstreetmap.org/search?q=" + encodeURIComponent(inputEndereco.value + " " +
            city + " " + inputNumero.value) + "&format=json&addressdetails=2";
        clearResult();

        fetch(url)
            .then(response => response.json())
            .then(data => {
                selectAdress(data);
                dateAdress = data;

                if (data.length > 0) {
                    var latitude = data[0].lat;
                    var longitude = data[0].lon;
                    // fetchBPMM(latitude, longitude);
                } else {
                    document.getElementById("resultAddress").innerText = "Endereço não encontrado";
                }
            })

    }

    function adressSelect() {
        var data = document.getElementById("inputSelectAdress");
        for (let index = 0; index < dateAdress.length; index++) {



            if (dateAdress[index].address['suburb'] == data.value) {

                var latitude = dateAdress[index].lat;
                var longitude = dateAdress[index].lon;

                fetchBPMM(latitude, longitude);
            }
        }
    }

    function selectAdress(paraments) {
        var datalist = document.getElementById("inputSelectAdress");
        datalist.innerHTML = "";

        for (let index = 0; index < paraments.length; index++) {
            var option = document.createElement("option");
            option.value = paraments[index].address['suburb'];
            option.text = paraments[index].address['suburb'];
            datalist.appendChild(option);
        }
    }


    function fetchBPMM(lat, lon) {
        var hostname = window.location.hostname;
        var url = "{{ url('/api/battalion-map') }}";

        /* if (hostname === "localhost") {
                    url = "http://localhost:81/siopm-off2/public/api/battalion-map";
                } else if (hostname === "127.0.0.1") {
                    // url = "http://127.0.0.1:8000/api/battalion-map";
                    url = "http://127.0.0.1:8000/public/api/battalion-map";
                } else if (hostname === "siopm-off.limiarnews.online") {
                    url = "https://siopm-off.limiarnews.online/public/api/battalion-map";
                } else {
                    // Defina uma URL padrão para outros servidores
                    url = "http://outro-servidor.com/api/battalion-map";
                }
        */
        clearResult();

        var data = {
            latitude: lat,
            longitude: lon
        };

        fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(responseData => {
                console.log(responseData)
                var values = responseData.split(' ');
                inputBatalhao.value = values[0].trim();
                inputCompanhia.value = values[1].trim();
            })
            .catch(error => {
                console.log(error);
            });
    }

    function fetchCEP() {
        var cepNumeros = inputCidade.value.replace(/\D/g, "");
        clearResult();

        if (isNaN(cepNumeros)) {
            return;
        }

        var url = "https://viacep.com.br/ws/" + encodeURIComponent(cepNumeros) + "/json/";

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (!data.erro) {
                    inputCidade.value = data.localidade;
                } else {
                    document.getElementById("resultCEP").innerText = "Endereço não encontrado";
                }
            })
            .catch(error => {
                console.log(error);
                document.getElementById("resultCEP").innerText = "Ocorreu um erro ao buscar o endereço";
            });
    }
</script>
