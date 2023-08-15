@extends('adminlte::page')

@section('title', 'Perguntas')

@section('content_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <h1>Perguntas</h1>
            </div>
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('cadastro190')}}">Cadastro de ocorrências</a></li>
                    <li class="breadcrumb-item active">Perguntas</li>
                </ol>
            </div>
        </div>
    </div>
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
$cidades = \App\Models\Cidade::all();
$naturezaocorrencia = App\Models\NaturezaOcorrencia::all();
$questions = App\Models\NatOcorPerguntas::first()->get();
?>
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card  card-outline">
            <div class="col-md-12">
                <div class="row">
                <div class="col-md-2">
                        <label>Solicitante: {{$ocorrencia['solicitante']}}</label>
                        <br>
                        <label>Contato: {{$ocorrencia['telefone']}}</label>

                    </div>


                    <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="inputTelefone">Cidade</label>
                                <input type="text" name="inputCidade" class="form-control"
                                    id="inputCidade" list="cidades-list" placeholder="Digite a cidade"
                                    value="{{$ocorrencia['cidade']}}"required>
                                <datalist id="cidades-list">
                                    @foreach ($cidades as $cidade)
                                        <option value="{{ $cidade->nome }}"></option>
                                    @endforeach
                                </datalist>
                                <div class="text-danger">{{ $errors->first('inputCidade') }}</div>
                                <p id="resultCEP"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputEndereco">Endereço</label>
                                <input type="text" name="inputEndereco" class="form-control"
                                    id="inputEndereco" placeholder="Endereço"
                                    value="{{$ocorrencia['endereco']}}" required>
                                <div class="text-danger">{{ $errors->first('inputEndereco') }}</div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="inputNumero">Número</label>
                                <input type="text" name="inputNumero" class="form-control"
                                    id="inputNumero" placeholder="Número"
                                    value="{{$ocorrencia['numero']}}" required>
                                <div class="text-danger">{{ $errors->first('inputNumero') }}</div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="inputComplemento">Complemento</label>
                                <input type="text" name="inputComplemento" class="form-control"
                                    id="inputComplemento" placeholder="Complemento"
                                    value="{{$ocorrencia['complemento']}}" required>
                                <div class="text-danger">{{ $errors->first('inputComplemento') }}
                                </div>
                                <p id="resultAddress"></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputSelectAdress">Bairo</label>
                                <select class="form-control select2 select2-hidden-accessible"
                                    style="width: 100%;" data-select2-id="1" tabindex="-1"
                                    aria-hidden="true" name="inputSelectAdress" id="inputSelectAdress" value="{{$ocorrencia['bairro']}}"
                                    onblur="adressSelect()"onclick="adressSelect()" required>
                                    <option value="" disabled selected>Selecione um bairro
                                    </option>
                                </select>
                                <div class="text-danger">{{ $errors->first('inputSelectAdress') }}</div>
                                <p id="resultAddress"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputReferencia">Referência</label>
                                <input type="text" name="inputReferencia" class="form-control"
                                    id="inputReferencia" placeholder="Referência"
                                    value="{{$ocorrencia['referencia']}}" onfocus="adressSelect()" required>
                                <div class="text-danger">{{ $errors->first('inputReferencia') }}</div>
                                <p id="resultAddress"></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="inputBatalhao">BPM/M</label>
                                <input type="text" name="inputBatalhao" class="form-control"
                                    id="inputBatalhao" placeholder="Batalhão"
                                    value="{{$ocorrencia['bpmm']}}" required>
                                <div class="text-danger">{{ $errors->first('inputBatalhao') }}</div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="inputCompanhia">Cia</label>
                                <input type="text" name="inputCompanhia" class="form-control"
                                    id="inputCompanhia" placeholder="Cia"
                                    value="{{$ocorrencia['cia']}}" required>
                                <div class="text-danger">{{ $errors->first('inputCompanhia') }}</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputNaturezaocorrencia">Natureza da ocorrência</label>
                                <input type="text" name="inputNaturezaocorrencia" class="form-control"
                                    id="inputNaturezaocorrencia" list="naturezaocorrencia-list"
                                    placeholder="Digite a natureza da ocorrência"
                                    value="{{$ocorrencia['naturezaocorrencia']}}"
                                    onchange="getPerguntas(this)" required>
                                <datalist id="naturezaocorrencia-list">
                                    @foreach ($naturezaocorrencia as $n)
                                        <option value="{{ $n->codigo }} - {{ $n->descricao }}">
                                            {{ $n->codigo }} - {{ $n->descricao }}</option>
                                    @endforeach
                                </datalist>
                                <div class="text-danger">
                                    {{ $errors->first('inputNaturezaocorrencia') }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card card-danger card-outline">
            <div class="row">
                <div class="col-md-2">
                    <div class="d-flex flex-column py-2">
                        <div class="d-flex flex-column scrollbar-deep-purple bordered-deep-purple thin">
                            <div class="overflow-auto" style="max-height: 420px; margin-top: 10;">
                                <a class="btn btn-sm btn-app bg-primary flex-grow-1" href="/cadastro190">
                                    <span class="badge bg-success"></span>
                                    <i class="fas fa-save"></i> Salvar
                                </a>

                                <a class="btn btn-sm btn-app bg-warning flex-grow-1" data-toggle="modal" data-target="#modal-pessoa">
                                    <span class="badge bg-purple"></span>
                                    <i class="fas fa-user"></i> Pessoa
                                </a>
                                @include('modal.cadastro190.cadastro190_pessoa')

                                <a class="btn btn-sm btn-app bg-success flex-grow-1" data-toggle="modal" data-target="#modal-veiculo">
                                    <span class="badge bg-purple"></span>
                                    <i class="fas fa-car"></i> Veículo
                                </a>
                                @include('modal.cadastro190.cadastro190_veiculo')

                                <a class="btn btn-sm btn-app bg-danger flex-grow-1" data-toggle="modal" data-target="#modal-smartphone">
                                    <span class="badge bg-teal"></span>
                                    <i class="fas fa-phone"></i> IMEI
                                </a>
                                @include('modal.cadastro190.cadastro190_smartphone')

                                <a class="btn btn-sm btn-app bg-secondary flex-grow-1" data-toggle="modal" data-target="#modal-ramaisprincipais">
                                    <span class="badge bg-success"></span>
                                    <i class="fas fa-sitemap"></i> Ramais
                                </a>
                                <a class="btn btn-sm btn-app bg-secondary flex-grow-1" data-toggle="modal" data-target="#modal-ramaisprincipais">
                                    <span class="badge bg-success"></span>
                                    <i class="fas fa-sitemap"></i> Ramais
                                </a>
                                <a class="btn btn-sm btn-app bg-secondary flex-grow-1" data-toggle="modal" data-target="#modal-ramaisprincipais">
                                    <span class="badge bg-success"></span>
                                    <i class="fas fa-sitemap"></i> Ramais
                                </a>
                                <a class="btn btn-sm btn-app bg-secondary flex-grow-1" data-toggle="modal" data-target="#modal-ramaisprincipais">
                                    <span class="badge bg-success"></span>
                                    <i class="fas fa-sitemap"></i> Ramais
                                </a>
                                @include('modal.ramal.ramal_principais')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">

                                    <div class="p-1">
                                        <!-- <div class="p-1">
                                            <i class="fas fa-arrow-left" onclick="nextQuestion('-')"></i>
                                            <i class="fas fa-arrow-right" onclick="nextQuestion('+')"></i>
                                        </div> -->
                                        <div class="col-md-12">
                                            <form action="{{ url('perguntas') }}" method="post">
                                                @csrf
                                                <h1>Questionário</h1>
                                                @foreach ($questions as $question)
                                                    <p>{{ $question->pergunta }}</p>
                                                    @foreach ($question->respostas as $resposta)
                                                        <div>
                                                            <input type="radio" name="answers[{{ $question->id }}]" value="{{ $resposta->id }}" id="answer{{ $resposta->id }}">
                                                            <label for="answer{{ $resposta->id }}">{{ $resposta->content }}</label>
                                                        </div>
                                                    @endforeach
                                                @endforeach
                                                <button type="submit">Próxima Pergunta</button>
                                            </form>
                                        </div>
                                        <label style="font-size: 15px; font-weight: bold;" class="display-5" id="displayQuestion"></label>
                                        <p style="font-size: 12px;" class=" lead" id="displayDescription"></p>
                                    </div>
                                    <div class="form-floating">
                                        <label for="floatingTextarea" class="form-label">Resposta do solicitante</label>
                                        <textarea class="form-control" id="displayResponse" style="height: 100px"></textarea>
                                        <br>

                                        <button type="button" class="btn btn-block btn-outline-danger btn-sm text-center" id="btnAlert">POLICIAL EM PERIGO</button>

                                        <div id="confirmationSection" style="display: none;">
                                            <p>VOCE SELECIONOU POLICIAL EM PERIGO?</p>
                                            <button type="button" class="btn btn-primary" id="btnConfirm">Confirmar</button>
                                            <button type="button" class="btn btn-secondary" id="btnCancel">Cancelar</button>
                                        </div>

                                        <p id="dispatcherAck" style="display: none; color: red;">Despachador Ciente</p>

                                        <input type="hidden" id="inputHide" value="0">

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

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="list-group">
                                        <ul class="list-group overflow-auto" style="max-height: 300px;" id="resposeQuestion">

                                        </ul>
                                    </div>
                                    <div class="form-floating">
                                        <label for="floatingTextarea2" class="form-label">Observação</label>
                                        <textarea class="form-control" id="floatingTextarea2" style="height: 60px"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-block btn-outline-warning btn-sm text-center" id="btnAlertaParcial">ALERTA PARCIAL</button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-block btn-outline-danger btn-sm text-center" id="btnAlertaGeral">ALERTA GERAL</button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-block bg-gradient-warning btn-sm text-center">GERAR SOP</button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-block bg-gradient-danger btn-sm text-center">GERAR OCORRÊNCIA</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="content">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" name="checkPolicial" id="checkPolicial">
        <label class="form-check-label" for="checkPolicial">POLICIAL EM PERIGO</label>
    </div>
    <br>
    <div id="mensagem" class="bg-danger text-white font-weight-bold text-center" style="display: none;">
        ⚠️ VOCÊ SELECIONOU A OPÇÃO POLICIAL EM PERIGO ⚠️
    </div>
</section>

@stop

@section('js')

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
    /* Adicione estilos para indicar qual botão está selecionado */
.btn.active {
    background-color: #007bff;
    color: #fff;
}
</style>
@endsection
