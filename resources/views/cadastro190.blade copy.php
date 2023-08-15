@extends('adminlte::page')

@section('title', 'Cadastro de Emergência')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cadastro de Emergência</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Cadastro de Emergência</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <row>
        <div class="container-fluid">
            <div>
                @if (Session('status'))
                    <div class="bg-success" style="padding: 20px;">
                        {{ Session('status') }}
                    </div>
                @endif
                @if (Session('error'))
                    <div class="bg-danger" style="padding: 20px;">
                        {{ Session('error') }}
                    </div>
                @endif
                @if (Session('message'))
                    <div class="bg-success" style="padding: 20px;">
                        {{ Session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </row>
@stop

<?php
$naturezaocorrencia = App\Models\NaturezaOcorrencia::all();
$natocorperguntas = App\Models\NatOcorPerguntas::where('status', '=', 1)->get();
$cidades = App\Models\Cidade::all();
?>
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-danger card-outline">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <a class="btn btn-app bg-warning" data-toggle="modal" data-target="#modal-pessoa">
                                        <span class="badge bg-purple"></span>
                                        <i class="fas fa-user"></i> Pessoa
                                    </a>
                                    @include('modal.cadastro190.cadastro190_pessoa')
                                    <a class="btn btn-app bg-success" data-toggle="modal" data-target="#modal-veiculo">
                                        <span class="badge bg-purple"></span>
                                        <i class="fas fa-car"></i> Veículo
                                    </a>
                                    @include('modal.cadastro190.cadastro190_veiculo')
                                    <a class="btn btn-app bg-danger" data-toggle="modal" data-target="#modal-smartphone">
                                        <span class="badge bg-teal"></span>
                                        <i class="fas fa-phone"></i> IMEI
                                    </a>
                                    @include('modal.cadastro190.cadastro190_smartphone')
                                    <a class="btn btn-app bg-secondary" data-toggle="modal"
                                        data-target="#modal-ramaisprincipais">
                                        <span class="badge bg-success"></span>
                                        <i class="fas fa-sitemap"></i> Ramais
                                    </a>
                                    @include('modal.ramal.ramal_principais')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-11">

                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-edit"></i>
                                Cadastro de Emergência
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <form method="POST" autocomplete="off" class="col-md-8"
                                    action="{{ url('cadastro190/create') }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-8 mb-3">
                                            <label for="inputSolicitante" class="form-label">Solicitante</label>
                                            <div class="d-flex align-items-center">
                                                <input type="text" name="inputSolicitante" id="inputSolicitante"
                                                    class="form-control" autocomplete="off"
                                                    placeholder="Digite o nome do solicitante"
                                                    value="{{ old('inputSolicitante') }}">
                                                <div class="form-check ms-3">
                                                    <input class="form-check-input" type="checkbox" id="checkboxAnonimo"
                                                        onchange="toggleAnonimo()">
                                                    <label class="form-check-label" for="checkboxAnonimo">Anônimo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="inputTelefone" class="form-label">Telefone</label>
                                            <input type="tel" name="inputTelefone" class="form-control"
                                                autocomplete="off" id="inputTelefone" placeholder="Digite o telefone"
                                                required>
                                        </div>
                                    </div>
                                    <div class="row mb-12">
                                        <label for="cidades" class="form-label">Cidade</label>
                                        <input type="text" class="form-control" id="inputCidade" name="inputCidade"
                                            list="cidades-list" placeholder="Digite a cidade" required>
                                        <datalist id="cidades-list">
                                            @foreach ($cidades as $cidade)
                                                <option value="{{ $cidade->nome }}"></option>
                                            @endforeach
                                        </datalist>
                                        <div class="text-danger">{{ $errors->first('inputCidade') }}</div>
                                    </div>
                                    <p id="resultCEP"></p>
                                    <div class="row mb-3">
                                        <div class="col-md-6 mb-3">
                                            <label for="inputEndereco" class="form-label"
                                            >Endereço</label>
                                            <input type="text" name="inputEndereco" class="form-control"
                                                id="inputEndereco" placeholder="Digite o endereço" required>

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="inputNumero" class="form-label"
                                                >Número</label>
                                            <input type="text" name="inputNumero" class="form-control"
                                                id="inputNumero" placeholder="Digite Número" maxlength="6" required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="inputComplemento" class="form-label">Complemento</label>
                                            <input type="text" name="inputComplemento" class="form-control"
                                                id="inputComplemento" placeholder="Complemento">
                                        </div>
                                    </div>
                                    <p id="resultAddress"></p>
                                    <div class="row mb-3">
                                        <div class="col-md-6 mb-3">
                                            <label for="inputBairro" class="form-label">Bairro</label>
                                            <select id="inputSelectAdress" name="inputSelectAdress"
                                                class="form-control"onblur="adressSelect()"onclick="adressSelect()">
                                                <option value="" disabled selected>Selecione um bairro</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputReferencia" class="form-label">Referência</label>
                                            <input type="text" name="inputReferencia" class="form-control"
                                                id="inputReferencia" placeholder="Digite uma referência">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4 mb-4">
                                            <label for="inputBatalhao" class="form-label">BPM/M</label>
                                            <input type="text" name="inputBatalhao" class="form-control"
                                                id="inputBatalhao" placeholder="Batalhão" maxlength="5" required>
                                        </div>
                                        <div class="col-md-2 mb-2">
                                            <label for="inputCompanhia" class="form-label">CIA</label>
                                            <input type="text" name="inputCompanhia" class="form-control"
                                                id="inputCompanhia" placeholder="Companhia" required>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="naturezaocorrencia">Natureza da ocorrência</label>
                                                <input type="text" class="form-control" id="inputNaturezaocorrencia"
                                                    name="inputNaturezaocorrencia" list="naturezaocorrencia-list"
                                                    placeholder="Digite a natureza da ocorrência"
                                                    onchange="getPerguntas(this)">
                                                <datalist id="naturezaocorrencia-list">
                                                    @foreach ($naturezaocorrencia as $n)
                                                        <option value="{{ $n->codigo }} - {{ $n->descricao }}">
                                                            {{ $n->codigo }} - {{ $n->descricao }}</option>
                                                    @endforeach
                                                </datalist>
                                                <div class="text-danger">{{ $errors->first('inputNaturezaocorrencia') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Marque Box -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            name="checkPolicial" id="checkPolicial">
                                        <label class="form-check-label" for="checkPolicial">POLICIAL EM PERIGO</label>
                                    </div>
                                    <br>
                                    <div id="mensagem" class="bg-danger text-white font-weight-bold text-center"
                                        style="display: none;">
                                        ⚠️ VOCÊ SELECIONOU A OPÇÃO POLICIAL EM PERIGO ⚠️
                                    </div>
                                    <div class="hidden">
                                        <input type="hidden" id="inputHidden_celular_numeroimei">
                                        <input type="hidden" id="inputHidden_celular_modelo">
                                        <input type="hidden" id="inputHidden_celular_marca">
                                        <input type="hidden" id="inputHidden_celular_situacao">
                                        <input type="hidden" id="inputHidden_veiculo_placa">
                                        <input type="hidden" id="inputHidden_veiculo_marca">
                                        <input type="hidden" id="inputHidden_veiculo_modelo">
                                        <input type="hidden" id="inputHidden_veiculo_cor">
                                        <input type="hidden" id="inputHidden_veiculo_chassi">
                                        <input type="hidden" id="inputHidden_veiculo_situacao">
                                        <input type="hidden" id="inputHidden_pessoas_rg">
                                        <input type="hidden" id="inputHidden_pessoas_nome">
                                        <input type="hidden" id="inputHidden_pessoas_situacao">
                                    </div>
                                    <!-- ... -->
                                    <div class="modal-footer justify-content-between">
                                        <button type="reset" class="btn btn-outline-light"
                                            data-dismiss="modal">Limpar</button>
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                </form>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@stop

@section('js')
    <script>
        function toggleAnonimo() {
            var checkboxAnonimo = document.getElementById("checkboxAnonimo");
            var inputSolicitante = document.getElementById("inputSolicitante");

            if (checkboxAnonimo.checked) {
                inputSolicitante.value = "Anônimo";
            } else {
                inputSolicitante.value = "";
            }
        }
    </script>
    <script>
        // Obtém o elemento de entrada que dispara a ação desejada
        var inputCidade = document.getElementById("inputNumero");

        // Adiciona o evento keydown ao campo de entrada
        inputCidade.addEventListener("keydown", function(event) {
            // Verifica se a tecla pressionada é Enter (código 13)
            if (event.keyCode === 13) {
                // Impede o envio do formulário padrão
                event.preventDefault();

                // Executa a ação desejada, como chamar a função para buscar na API
                fetchCEP();
            }
        });
    </script>
    <script>
        // Pessoa
        var nome = document.getElementById('nome');
        var rg = document.getElementById('rg');
        var situacao = document.getElementById('situacao');
        var inputHidden_pessoas_nome = document.getElementById('inputHidden_pessoas_nome');
        var inputHidden_pessoas_rg = document.getElementById('inputHidden_pessoas_rg');
        var inputHidden_pessoas_situacao = document.getElementById('inputHidden_pessoas_situacao');
        var saveButtonPessoa = document.getElementById('saveButtonPessoa');
        var modal - pessoa = document.getElementById('modal-pessoa');

        // Adiciona o evento de clique ao botão "Salvar"
        saveButtonPessoa.addEventListener('click', function() {
            // Atribui o valor do input do modal ao input hidden
            inputHidden_pessoas_nome.value = nome.value;
            inputHidden_pessoas_rg.value = rg.value;
            inputHidden_pessoas_situacao.value = situacao.value;
            modal - pessoa.style.display = 'none';
            // Fecha o modal (caso você tenha um código para fechar o modal)
        });

        // Obtém o valor do input hidden
        var valorInputHiddennome = inputHidden_pessoas_nome.value;
        var valorInputHiddenrg = inputHidden_pessoas_rg.value;
        var valorInputHiddensituacao = inputHidden_pessoas_situacao.value;

        // Use o valor do input hidden como necessário
        console.log(valorInputHiddennome, valorInputHiddenrg, valorInputHiddensituacao);

        //smartphone
        var marca = document.getElementById('marca');
        var modelo = document.getElementById('modelo');
        var numeroimei = document.getElementById('numeroimei');
        var situacao = document.getElementById('situacao');
        var inputHidden_celular_marca = document.getElementById('inputHidden_celular_marca');
        var inputHidden_celular_modelo = document.getElementById('inputHidden_celular_modelo');
        var inputHidden_celular_numeroimei = document.getElementById('inputHidden_celular_numeroimei');
        var inputHidden_celular_situacao = document.getElementById('inputHidden_celular_situacao');
        var saveButtonSmartphone = document.getElementById('saveButtonSmartphone');
        var modal - smartphone = document.getElementById('modal-smartphone');

        // Adiciona o evento de clique ao botão "Salvar"
        saveButtonSmartphone.addEventListener('click', function() {
            // Atribui o valor do input do modal ao input hidden
            inputHidden_celular_marca.value = marca.value;
            inputHidden_celular_modelo.value = modelo.value;
            inputHidden_celular_numeroimei.value = numeroimei.value;
            inputHidden_celular_situacao.value = situacao.value;
            modal - smartphone.style.display = 'none';
            // Fecha o modal (caso você tenha um código para fechar o modal)
        });

        // Obtém o valor do input hidden
        var valorInputHiddenmarcac = inputHidden_celular_marca.value;
        var valorInputHiddenmodeloc = inputHidden_celular_modelo.value;
        var valorInputHiddennumeroimei = inputHidden_celular_numeroimei.value;
        var valorInputHiddensituacaoc = inputHidden_celular_situacao.value;

        // Use o valor do input hidden como necessário
        console.log(valorInputHiddenmarcac, valorInputHiddenmodeloc, valorInputHiddennumeroimei, valorInputHiddensituacaoc);

        //veiculo
        var placa = document.getElementById('placa');
        var chassis = document.getElementById('chassis');
        var cor = document.getElementById('cor');
        var marca = document.getElementById('marca');
        var modelo = document.getElementById('modelo');
        var situacao = document.getElementById('situacao');
        var inputHidden_veiculo_placa = document.getElementById('inputHidden_veiculo_placa');
        var inputHidden_veiculo_chassis = document.getElementById('inputHidden_veiculo_chassis');
        var inputHidden_veiculo_marca = document.getElementById('inputHidden_veiculo_marca');
        var inputHidden_veiculo_modelo = document.getElementById('inputHidden_veiculo_modelo');
        var inputHidden_veiculo_cor = document.getElementById('inputHidden_veiculo_cor');
        var inputHidden_celular_situacao = document.getElementById('inputHidden_veiculo_situacao');
        var saveButtonVeiculo = document.getElementById('saveButtonVeiculo');
        var modal - veiculo = document.getElementById('modal-veiculo');

        // Adiciona o evento de clique ao botão "Salvar"
        saveButtonSmartphone.addEventListener('click', function() {
            // Atribui o valor do input do modal ao input hidden
            inputHidden_veiculo_placa.value = placa.value;
            inputHidden_veiculo_chassis.value = chassis.value;
            inputHidden_veiculo_marca.value = marca.value;
            inputHidden_veiculo_modelo.value = modelo.value;
            inputHidden_veiculo_cor.value = cor.value;
            inputHidden_veiculo_situacao.value = situacao.value;
            modal - veiculo.style.display = 'none';
            // Fecha o modal (caso você tenha um código para fechar o modal)
        });

        // Obtém o valor do input hidden
        var valorInputHiddenplaca = inputHidden_veiculo_placa.value;
        var valorInputHiddenchassis = inputHidden_veiculo_chassis.value;
        var valorInputHiddenmarcav = inputHidden_veiculo_marca.value;
        var valorInputHiddenmodelov = inputHidden_veiculo_modelo.value;
        var valorInputHiddencor = inputHidden_veiculo_cor.value;
        var valorInputHiddensituacaov = inputHidden_veiculo_situacao.value;

        // Use o valor do input hidden como necessário
        console.log(valorInputHiddenplaca, valorInputHiddenchassis, valorInputHiddenmarcav, valorInputHiddenmodelov,
            valorInputHiddencor, valorInputHiddensituacaov);
    </script>

    <script>
        var inputNumero = document.getElementById("inputNumero");
        var inputEndereco = document.getElementById("inputEndereco");
        var inputCidade = document.getElementById("inputCidade");
        var inputBatalhao = document.getElementById("inputBatalhao");
        var inputCompanhia = document.getElementById("inputCompanhia");
        var inputSelectAdress = document.getElementById("inputSelectAdress");

        inputCidade.addEventListener("keyup", function(event) {
            if (event.keyCode === 13 || event.keyCode === 9) {
                fetchCEP();
            }
        });

        inputNumero.addEventListener("keyup", function(event) {
            if (event.keyCode === 13 || event.keyCode === 9) {
                fetchAddress()
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
                .catch(error => {
                    console.log(error);
                    document.getElementById("resultAddress").innerText = "Ocorreu um erro ao buscar o endereço";
                });
        }

        function adressSelect() {
            var data = document.getElementById("inputSelectAdress");
            for (let index = 0; index < dateAdress.length; index++) {



                if (dateAdress[index].place_id == data.value) {

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
                option.value = paraments[index].place_id;
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

    <script>
        $(document).ready(function() {
            $("#checkPolicial").change(function() {
                if (this.checked) {
                    $("#mensagem").css({
                        "display": "block",
                        "background-color": "red",
                        "color": "white"
                    });
                } else {
                    $("#mensagem").hide();
                }
            });
        });
    </script>
@stop
