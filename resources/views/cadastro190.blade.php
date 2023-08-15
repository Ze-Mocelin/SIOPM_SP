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
                <!-- START STEP Progressbar-->
                <!-- MultiStep Form -->
                <section class="mt-4">
                    <div class="container">
                        <form class="card">
                            <div class="card-header">


                            </div>
                            <div class="card-body">

                                <section>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column">
                                                            <a class="btn btn-app bg-warning" data-toggle="modal"
                                                                data-target="#modal-pessoa">
                                                                <span class="badge bg-purple"></span>
                                                                <i class="fas fa-user"></i> Pessoa
                                                            </a>
                                                            @include('modal.cadastro190.cadastro190_pessoa')
                                                            <a class="btn btn-app bg-success" data-toggle="modal"
                                                                data-target="#modal-veiculo">
                                                                <span class="badge bg-purple"></span>
                                                                <i class="fas fa-car"></i> Veículo
                                                            </a>
                                                            @include('modal.cadastro190.cadastro190_veiculo')
                                                            <a class="btn btn-app bg-blue" data-toggle="modal"
                                                                data-target="#modal-smartphone">
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
                                                            <button type="reset" class="btn btn-app btn-danger bg-maroon">
                                                                <span class="badge btg-primary"></span>
                                                                <i class="fas fa-trash"></i> Limpar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10">

                                                <!--<div class="card-header">
                                                                                                                    <h3 class="card-title">
                                                                                                                        <i class="fas fa-edit"></i>
                                                                                                                        Cadastro de Emergência
                                                                                                                    </h3>
                                                                                                                </div>-->
                                                <div class="card-body">
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
                                                            <div class="row">
                                                                <div class="hidden">
                                                                    <input type="hidden" value=""
                                                                        id="inputHidden_celular_numeroimei" name="inputHidden_celular_numeroimei">
                                                                    <input type="hidden" value=""
                                                                        id="inputHidden_celular_modelo" name="inputHidden_celular_modelo">
                                                                    <input type="hidden" value=""
                                                                        id="inputHidden_celular_marca" name="inputHidden_celular_marca">
                                                                    <input type="hidden" value=""
                                                                        id="inputHidden_celular_situacao" name="inputHidden_celular_situacao">
                                                                    <input type="hidden" value=""
                                                                        id="inputHidden_veiculo_placa" name="inputHidden_veiculo_placa">
                                                                    <input type="hidden" value=""
                                                                        id="inputHidden_veiculo_marca" name="inputHidden_veiculo_marca">
                                                                    <input type="hidden" value=""
                                                                        id="inputHidden_veiculo_modelo" name="inputHidden_veiculo_modelo">
                                                                    <input type="hidden" value=""
                                                                        id="inputHidden_veiculo_cor" name="inputHidden_veiculo_cor">
                                                                    <input type="hidden" value=""
                                                                        id="inputHidden_veiculo_chassi" name="inputHidden_veiculo_chassi">
                                                                    <input type="hidden" value=""
                                                                        id="inputHidden_veiculo_situacao" name="inputHidden_veiculo_situacao">
                                                                    <input type="hidden" value=""
                                                                        id="inputHidden_pessoas_rg" name="inputHidden_pessoas_rg">
                                                                    <input type="hidden" value=""
                                                                        id="inputHidden_pessoas_nome" name="inputHidden_pessoas_nome">
                                                                    <input type="hidden" value=""
                                                                        id="inputHidden_pessoas_situacao" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 text-center">

                                                        <!-- Seu conteúdo de formulário aqui -->

                                                        <button type="submit" id="botaoSalvar"
                                                            class="btn btn-block btn-success toastrDefaultSuccess">Próximo</button>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection

@section('js')


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btnAlert').click(function() {
                $('#btnAlert').hide(); // Esconde o botão de alerta
                $('#confirmationSection').show(); // Mostra a seção de confirmação
            });

            $('#btnCancel').click(function() {
                $('#btnAlert').show(); // Mostra novamente o botão de alerta
                $('#confirmationSection').hide(); // Esconde a seção de confirmação
            });

            $('#btnConfirm').click(function() {
                $('#dispatcherAck').show(); // Mostra a mensagem de "Despachador Ciente"
                $('#inputHide').val(parseInt($('#inputHide').val()) + 1); // Acrescenta 1 ao valor do input
                $('#btnAlert').show(); // Mostra novamente o botão de alerta
                $('#confirmationSection').hide(); // Esconde a seção de confirmação
            });
        });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        //OCULTA O BOTAO AVANÇAR ATÉ QUE O USUARIO CLIQUE NO BOTAO SALVAR
        /* $(document).ready(function () {
             $('#botaoSalvar').click(function (event) {
                 event.preventDefault();

                 // Aqui você pode adicionar a lógica para salvar os dados do formulário

                 // Após salvar os dados, exiba o botão "Próximo"
                 $('#next_button').show();
             });
         });*/
    </script>
    <script>
        //FORMATA O CAMPO TELEFONE
        document.addEventListener('DOMContentLoaded', function() {
            const telefoneInput = document.getElementById('inputTelefone');

            telefoneInput.addEventListener('input', function() {
                const inputValue = telefoneInput.value.replace(/\D/g, ''); // Remove não números
                const formattedValue = formatarTelefone(inputValue);
                telefoneInput.value = formattedValue;
            });
        });

        function formatarTelefone(numero) {
            const padraoTelefone = /(\d{2})(\d{5})(\d{4})/;
            return numero.replace(padraoTelefone, '($1) $2-$3');
        }
    </script>
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
    <script>
        //ALERTA POLICIAL EM PERIGO FOI SELECIONADO
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

        //STEP-BY-STEP
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;



            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function() {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function() {
                return false;
            })

        });
    </script>

    <script>
        var current = 0;
        var tabs = $(".tab");
        var tabs_pill = $(".tab-pills");

        loadFormData(current);

        function loadFormData(n) {
            $(tabs_pill[n]).addClass("active");
            $(tabs[n]).removeClass("d-none");
            $("#back_button").attr("disabled", n == 0 ? true : false);
            n == tabs.length - 1 ?
                $("#next_button").text("Submit").removeAttr("onclick") :
                $("#next_button")
                .attr("type", "button")
                .text("Next")
                .attr("onclick", "next()");
        }

        function next() {
            $(tabs[current]).addClass("d-none");
            $(tabs_pill[current]).removeClass("active");

            current++;
            loadFormData(current);
        }

        function back() {
            $(tabs[current]).addClass("d-none");
            $(tabs_pill[current]).removeClass("active");

            current--;
            loadFormData(current);
        }
    </script>
    <script>
        // Obtém os botões por seus IDs
        const btnAlertaParcial = document.getElementById('btnAlertaParcial');
        const btnAlertaGeral = document.getElementById('btnAlertaGeral');

        // Adiciona eventos de clique para os botões
        btnAlertaParcial.addEventListener('click', () => {
            if (btnAlertaParcial.classList.contains('active')) {
                btnAlertaParcial.classList.remove('active');
            } else {
                btnAlertaParcial.classList.add('active');
                btnAlertaGeral.classList.remove('active');
            }
        });

        btnAlertaGeral.addEventListener('click', () => {
            if (btnAlertaGeral.classList.contains('active')) {
                btnAlertaGeral.classList.remove('active');
            } else {
                btnAlertaGeral.classList.add('active');
                btnAlertaParcial.classList.remove('active');
            }
        });
    </script>
    <script>
        let questions = {
            "roubo": [{
                    "question": "Você está seguro agora? Precisa de assistência médica imediata?",
                    "description": "Verificar a segurança da vítima e se há necessidade de atendimento médico urgente.",
                    "respose": "Sim, estou seguro. Não preciso de assistência médica imediata."
                },
                {
                    "question": "Onde e quando ocorreu o roubo?",
                    "description": "Obter informações sobre o local e horário do roubo.",
                    "respose": "O roubo ocorreu na Rua [], às []h de ontem."
                },
                {
                    "question": "Você conseguiu ver o rosto do assaltante? Poderia fornecer alguma descrição?",
                    "description": "Solicitar detalhes físicos sobre o assaltante para auxiliar nas investigações.",
                    "respose": "Sim, consegui ver o rosto dele. El[] era [], cabelos [] e usava []."
                },
                {
                    "question": "Quais pertences foram roubados? Celular, carteira, documentos?",
                    "description": "Identificar os pertences roubados para relatar à polícia e auxiliar na recuperação.",
                    "respose": "Foram roubados []."
                },
                {
                    "question": "Você notou se o assaltante estava armado? Se sim, qual tipo de arma?",
                    "description": "Verificar se o assaltante estava armado e obter informações sobre o tipo de arma utilizada.",
                    "respose": "Sim, o assaltante estava armado com []."
                },
                {
                    "question": "Alguém testemunhou o roubo? Existe algum vídeo de vigilância nas proximidades?",
                    "description": "Investigar a presença de testemunhas ou possíveis evidências em vídeo que possam ajudar nas investigações.",
                    "respose": "Não havia ninguém por perto, e não tenho conhecimento de câmeras de vigilância na área."
                },
                {
                    "question": "Você possui algum seguro para os itens roubados?",
                    "description": "Verificar se a vítima possui algum seguro que possa cobrir os itens roubados.",
                    "respose": "Sim, possuo seguro residencial que cobre roubo de pertences."
                },
                {
                    "question": "Você já entrou em contato com a polícia para registrar o roubo?",
                    "description": "Confirmar se a vítima já acionou as autoridades competentes para registrar o incidente.",
                    "respose": "Sim, já registrei um boletim de ocorrência na delegacia local."
                },
                {
                    "question": "Há alguma identificação pessoal importante que precisamos saber para ajudá-lo?",
                    "description": "Identificar se há documentos importantes roubados que possam causar problemas adicionais à vítima.",
                    "respose": "Sim, [] foram roubados."
                },
                {
                    "question": "Você consegue se lembrar de qualquer informação adicional sobre o assaltante, como tatuagens, cicatrizes ou características distintas?",
                    "description": "Obter informações adicionais que possam ajudar a identificar o assaltante.",
                    "respose": "Não consegui identificar nenhuma característica distintiva além do que já mencionei."
                },
                {
                    "question": "Você se sente fisicamente ferido de alguma forma? Podemos chamar uma ambulância?",
                    "description": "Avaliar se a vítima sofreu ferimentos físicos que requerem atenção médica imediata.",
                    "respose": "Não estou ferido fisicamente. Não é necessário chamar uma ambulância."
                },
                {
                    "question": "Existe algum lugar seguro para onde possamos levá-lo agora?",
                    "description": "Verificar se a vítima precisa de um local seguro ou apoio adicional.",
                    "respose": "Sim, tenho um amigo próximo onde posso ficar temporariamente até resolver essa situação."
                }
            ]
        };

        let displayQuestion = document.getElementById("displayQuestion");
        let displayDescription = document.getElementById("displayDescription");
        let displayResponse = document.getElementById("displayResponse");
        let indexQuestion = 0;

        displayResponse.addEventListener("keyup", function(event) {
            if (event.keyCode === 13 || event.keyCode === 9) {
                const question = questions.roubo[indexQuestion - 1].question;
                const response = displayResponse.value;
                generationResponse(question, response);
            }
        });

        generationQuestion();

        function nextQuestion(params) {
            indexQuestion = (params === '+') ? indexQuestion + 1 : indexQuestion - 1;
        }

        function generationResponse(question, response) {
            let list = document.getElementById("resposeQuestion");
            let listItem = generationElementResponse(question, response);
            list.appendChild(listItem);
            generationQuestion();
        }

        function generationElementResponse(question, response) {
            var listItem = document.createElement("li");
            listItem.className = "list-group-item";

            var innerDiv = document.createElement("small");
            innerDiv.className = "d-flex justify-content-between align-items-center";
            innerDiv.textContent = question;

            var iconDiv = document.createElement("div");
            iconDiv.className = "float-right";

            var editLink = createIconElement("a", "text-info", "Edit todo", "fas fa-pencil-alt me-3");
            var deleteLink = createIconElement("a", "text-danger", "Delete todo", "fas fa-trash-alt");
            iconDiv.append(editLink, deleteLink);

            var responseDiv = document.createElement("div");
            responseDiv.textContent = response;

            listItem.appendChild(iconDiv);
            listItem.appendChild(innerDiv);
            listItem.appendChild(responseDiv);

            return listItem;
        }

        function createIconElement(elementType, className, tooltip, iconClass) {
            var element = document.createElement(elementType);
            element.className = className;
            element.setAttribute("data-mdb-toggle", "tooltip");
            element.setAttribute("title", tooltip);

            var icon = document.createElement("i");
            icon.className = iconClass;

            element.appendChild(icon);

            return element;
        }


        function clearDisplay() {
            displayQuestion.innerText = "";
            displayDescription.innerText = "";
            displayResponse.value = "";
        }

        function generationQuestion() {
            clearDisplay();
            let question = questions.roubo[indexQuestion];
            indexQuestion++;

            displayQuestion.innerText = question.question;
            displayDescription.innerText = question.description;
            displayResponse.value = question.respose;
        }


        // ====================================================
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
@section('css')
    <style>
        #msform fieldset:not(.active) .fs-title {
            display: none;
        }

        * {
            margin: 0;
            padding: 0;
        }

        html {
            height: 100%;
        }

        /*Background color*/
        #grad1 {
            background-color: : #red;
            background-image: linear-gradient(120deg, #dc3545, #000000);
        }

        /*form styles*/
        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
        }

        #msform fieldset .form-card {
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        #msform fieldset {
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E;
        }



        /*Blue Buttons*/
        #msform .action-button {
            width: 100px;
            background: skyblue;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
        }

        /*Previous Buttons*/
        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
        }

        /*Dropdown List Exp Date*/
        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px;
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue;
        }

        /*The background card*/
        .card {
            /*z-index: 0;*/
            border: none;
            border-radius: 0.5rem;
            position: relative;
        }

        /*FieldSet headings*/
        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }

        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey;
        }

        #progressbar .active {
            color: #000000;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 25%;
            float: left;
            position: relative;
        }

        /*Icons in the ProgressBar*/
        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f023";
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007";
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f09d";
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c";
        }

        /*ProgressBar before any progress*/
        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px;
        }

        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        }

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: skyblue;
        }

        /*Imaged Radio Buttons*/
        .radio-group {
            position: relative;
            margin-bottom: 25px;
        }

        .radio {
            display: inline-block;
            width: 204;
            height: 104;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px;
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
        }

        /*Fit image in bootstrap div*/
        .fit-image {
            width: 100%;
            object-fit: cover;
        }
    </style>
@endsection
