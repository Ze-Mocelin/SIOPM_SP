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
                {{Session('status')}}
            </div>
            @endif
            @if(Session('error'))
            <div class="bg-danger" style="padding: 20px;">
                {{Session('error')}}
            </div>
            @endif
            @if(Session('message'))
            <div class="bg-success" style="padding: 20px;">
                {{Session('message')}}
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
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="card card-danger card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-edit"></i>
                            Cadastro de Emergência
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <form action="#" method="POST" autocomplete="off" class="col-md-8">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-8 mb-3">
                                        <label for="inputSolicitante" class="form-label">Solicitante</label>
                                        <div class="d-flex align-items-center">
                                            <input type="text" name="inputSolicitante" id="inputSolicitante" class="form-control" autocomplete="off" placeholder="Digite o nome do solicitante" required>
                                            <div class="text-danger">{{$errors->first('inputSolicitante')}}</div>
                                            <div class="form-check ms-3">
                                                <input class="form-check-input" type="checkbox" id="checkboxAnonimo">
                                                <label class="form-check-label" for="checkboxAnonimo">Anônimo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="inputTelefone" class="form-label">Telefone</label>
                                        <input type="tel" name="inputTelefone" class="form-control" autocomplete="off" id="inputTelefone" placeholder="Digite o telefone" required>
                                        <div class="text-danger">{{$errors->first('inputTelefone')}}</div>
                                    </div>
                                </div>
                                <div class="row mb-12">
                                    <div class="col-md-3 mb-3">
                                        <label for="inputCEP" class="form-label">CEP</label>
                                        <input type="text" name="inputCEP" class="form-control" autocomplete="off" id="inputCEP" placeholder="Digite o CEP" required>
                                        <div class="text-danger">{{$errors->first('inputCEP')}}</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputCidade" class="form-label">Cidade</label>
                                        <input type="text" class="form-control" id="inputCidade" name="inputCidade" list="cidades-list" placeholder="Digite a cidade" required>
                                        <datalist id="cidades-list">
                                            @foreach ($cidades as $cidade)
                                                <option value="{{$cidade->nome}}"></option>
                                            @endforeach
                                        </datalist>
                                    <div class="text-danger">{{$errors->first('inputCidade')}}</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="inputUF" class="form-label">UF</label>
                                        <input type="text" name="inputUF" class="form-control" autocomplete="off" id="inputUF" placeholder="Digite o UF" required>
                                        <div class="text-danger">{{$errors->first('inputUF')}}</div>
                                    </div>
                                </div>
                                <p id="resultCEP"></p>
                                <div class="row mb-12">
                                    <div class="col-md-6 mb-3">
                                        <label for="inputEndereco" class="form-label">Endereço</label>
                                        <input type="text" name="inputEndereco" class="form-control" id="inputEndereco" placeholder="Digite o endereço" required>
                                        <div class="text-danger">{{$errors->first('inputEndereco')}}</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="inputNumero" class="form-label">Número</label>
                                        <input type="text" name="inputNumero" class="form-control" id="inputNumero" placeholder="Digite Número" maxlength="6" required>
                                        <div class="text-danger">{{$errors->first('inputNumero')}}</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="inputComplemento" class="form-label">Complemento</label>
                                        <input type="text" name="inputComplemento" class="form-control" id="inputComplemento" placeholder="Complemento">
                                        <div class="text-danger">{{$errors->first('inputComplemento')}}</div>
                                    </div>
                                </div>
                                <p id="resultAddress"></p>
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label for="inputBairro" class="form-label">Bairro</label>
                                        <input type="text" name="inputBairro" class="form-control" id="inputBairro" placeholder="Digite o bairro" required>
                                        <div class="text-danger">{{$errors->first('inputBairro')}}</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputReferencia" class="form-label">Referência</label>
                                        <input type="text" name="inputReferencia" class="form-control" id="inputReferencia" placeholder="Digite uma referência" required>
                                        <div class="text-danger">{{$errors->first('inputReferencia')}}</div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 mb-4">
                                        <label for="inputBatalhao" class="form-label">BPM/M</label>
                                        <input type="text" name="inputBatalhao" class="form-control" id="inputBatalhao" placeholder="Batalhão" maxlength="5" required>
                                        <div class="text-danger">{{$errors->first('inputBatalhao')}}</div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="naturezaocorrencia">Natureza da ocorrência</label>
                                            <input type="text" class="form-control" id="inputNaturezaOcorrencia" name="inputNaturezaOcorrencia" list="naturezaocorrencia-list" placeholder="Digite a natureza da ocorrência" onchange="getPerguntas(this)">
                                            <datalist id="naturezaocorrencia-list">
                                                @foreach ($naturezaocorrencia as $n)
                                                <option value="{{$n->codigo}} - {{$n->descricao}}"></option>
                                                @endforeach
                                            </datalist>
                                            <div class="text-danger">{{$errors->first('inputNaturezaOcorrencia')}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row col-md-12" id="perguntas-container">
                                    @php
                                    $contador = 0;
                                    @endphp
                                    <div class="row col-md-12">
                                        @foreach ($natocorperguntas as $n)
                                        @if ($contador % 3 === 0)

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! $n->codigo!!}
                                            </div>
                                        </div>

                                        @else

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! $n->codigo!!}
                                            </div>
                                        </div>

                                        @endif
                                        @php
                                        $contador++;
                                        @endphp
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Marque Box -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkPolicial">
                                    <label class="form-check-label" for="checkPolicial">POLICIAL EM PERIGO</label>
                                </div>
                                <br>
                                <div id="mensagem" class="bg-danger text-white font-weight-bold text-center" style="display: none;">
                                    ⚠️ VOCÊ SELECIONOU A OPÇÃO POLICIAL EM PERIGO ⚠️
                                </div>
                                <!-- ... -->
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
    $("#inputNaturezaOcorrencia").change(function() {
            var selectedOption = $(this).val();
            var perguntasContainer = $("#perguntas-container");

            if (selectedOption !== '') {
                perguntasContainer.show();
                perguntasContainer.find('.pergunta').hide();
                perguntasContainer.find('.pergunta:contains("' + selectedOption + '")').show();
            } else {
                perguntasContainer.hide();
            }
        });
    });
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
<script>
    var inputNumero = document.getElementById("inputNumero");
    var inputEndereco = document.getElementById("inputEndereco");
    var inputCidade = document.getElementById("inputCidade");
    var inputBatalhao = document.getElementById("inputBatalhao");


    inputCidade.addEventListener("keyup", function(event) {
        if (event.keyCode === 13 || event.keyCode === 9) {
            fetchCEP();
        }
    });

    inputEndereco.addEventListener("keyup", function(event) {
        if (event.keyCode === 13 || event.keyCode === 9) {
            fetchAddress()
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

    }

    function fetchAddress() {
        var city = inputCidade.value.replace(/-/g, ',');
        var url = "https://nominatim.openstreetmap.org/search?q=" + encodeURIComponent(inputEndereco.value + " " + city + " " + inputNumero.value) + "&format=json&addressdetails=2";
        clearResult();

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.length > 0) {
                    var latitude = data[0].lat;
                    var longitude = data[0].lon;
                    fetchBPMM(latitude, longitude);
                } else {
                    document.getElementById("resultAddress").innerText = "Endereço não encontrado";
                }
            })
            .catch(error => {
                console.log(error);
                document.getElementById("resultAddress").innerText = "Ocorreu um erro ao buscar o endereço";
            });
    }

    function fetchBPMM(lat, lon) {
        var url = "http://127.0.0.1:8000/api/battalion-map";
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
@stop
