<?php

use App\Models\Cadastro190;
use Carbon\Carbon;

?>
@extends('adminlte::page')

@section('title', 'Cadastro de Emergência')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Despacho de Ocorrências</h1>
                    <h6>
                        @if (Cadastro190::where(DB::RAW('date(horario)'), Carbon::today()->toDateString())->count() != 0)
                            Hoje - <span class="badge badge-primary right">
                                {{ Cadastro190::count() }}
                            </span>
                        @endif
                    </h6>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Despacho de ocorrências</li>
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
$cidades = App\Models\Cidade::all();
?>
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-danger card-outline">


                <div class="row">
                    <div class="col-md-2">
                        <a class="btn btn-app bg-success" data-toggle="modal" data-target="#modal-observar">
                            <span class="badge bg-purple"></span>
                            <i class="fas fa-check"></i> Observar
                        </a>
                        @include('modal.despachador.despachador_observar')

                        <a class="btn btn-app bg-danger" data-toggle="modal" data-target="#modal-gerarocorrencia">
                            <span class="badge bg-teal"></span>
                            <i class="fas fa-plus"></i> Gerar
                        </a>
                        @include('modal.despachador.despachador_gerarocorrencia')

                        <a class="btn btn-app bg-secondary" href="http://127.0.0.1:8000/home">
                            <span class="badge bg-success"></span>
                            <i class="fas fa-users"></i> Alterar
                        </a>
                    </div>

                    <div class="col-md-1">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 1%; text-align: center;">VTR</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $n = 1 @endphp
                                @foreach ($ocorrencias as $ocorrencia)
                                    <tr>
                                        <td align="center">10205</td>

                                        <!-- SERA UM NUMERO ALEATORIO DE 0 A INFINITO PARA CADA UMA SENDO NUMEROS UNICOS E QUE SEMPRE AS 00:00 ZERA A CONTAGEM NOVAMENTE -->
                                    </tr>
                                    @php $n++ @endphp
                                @endforeach
                            </tbody>
                        </table>

                    </div>



                    <div class="col-md-9">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 2%;">
                                        <input type="checkbox" id="select-all-checkbox">
                                    </th>
                                    <th style="width: 1%; text-align: center;">⚡️</th>
                                    <th style="width: 40%;">Endereço</th>
                                    <th style="width: 2%; text-align: center;">Nat</th>
                                    <th style="width: 19%;">OPM</th>
                                    <th class="text-center" style="width: 6%;">Ação</th>
                                    <th style="width: 10%; text-align: center;">Espera</th>
                                    <th class="text-center" style="width: 6%;">Oco</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $n = 1 @endphp
                                @foreach ($ocorrencias as $ocorrencia)
                                    <tr>
                                        <td><input type="checkbox" class="despacho-checkbox"></td>
                                        <td align="center">N</td>
                                        <td>{{ $ocorrencia['endereco'] }}, {{ $ocorrencia['numero'] }}</td>
                                        <td align="center">{{ substr($ocorrencia['naturezaocorrencia'], 0, 3) }}</td>
                                        <!-- Exibe as três primeiras letras da naturezaocorrencia -->
                                        <td>{{ $ocorrencia['bpmm'] }} {{ $ocorrencia['cia'] }}</td>
                                        <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-detalhes{{ $ocorrencia['id'] }}">Visualizar</button>
                                        </td>

                                        <td id="tempo_decorrido_{{ $n }}">
                                            <?php
                                            $createdAt = $ocorrencia['created_at'];
                                            $currentDateTime = Carbon::now();
                                            $timeDifference = $currentDateTime->diff($createdAt);

                                            $hours = $timeDifference->format('%h');
                                            $minutes = $timeDifference->format('%i');
                                            $seconds = $timeDifference->format('%s');

                                            ?>
                                            <?php

                                            $serverTime = Carbon::now();
                                            //echo $serverTime;
                                            ?>
                                            {{ $hours . ':' . $minutes . ':' . $seconds }}
                                        </td>
                                        <td align="center">185</td>
                                        <!-- SERA UM NUMERO ALEATORIO DE 0 A INFINITO PARA CADA UMA SENDO NUMEROS UNICOS E QUE SEMPRE AS 00:00 ZERA A CONTAGEM NOVAMENTE -->

                                    </tr>
                                    @php $n++ @endphp
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal-detalhes{{ $ocorrencia['id'] }}">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <style>
                                                .modal-content-full-width {
                                                    width: 100%;
                                                }

                                                .modal-textarea-container {
                                                    width: 100%;
                                                }
                                            </style>
                                            <div class="modal-content modal-content-full-width">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Detalhes da Ocorrência</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Conteúdo do modal -->
                                                    <form method="post"
                                                        action="{{ url('despachador/detalhes_ocorrencia') }}">
                                                        @csrf
                                                        <input type="hidden" name="id"
                                                            value="{{ $ocorrencia['id'] }}" />
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <p><strong>Solicitante: </strong>
                                                                            {{ $ocorrencia['solicitante'] }}</p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p><strong>Telefone:</strong>
                                                                            {{ $ocorrencia['telefone'] }}</p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p><strong>Cidade: </strong>
                                                                            {{ $ocorrencia['cidade'] }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <p><strong>Endereço: </strong>
                                                                            {{ $ocorrencia['endereco'] }},
                                                                            {{ $ocorrencia['numero'] }}</p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p><strong>Complemento: </strong>
                                                                            {{ $ocorrencia['complemento'] }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <p><strong>Bairro: </strong>
                                                                            {{ $ocorrencia['bairro'] }}</p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p><strong>Referência: </strong>
                                                                            {{ $ocorrencia['referencia'] }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <p><strong>BPMM: </strong>{{ $ocorrencia['bpmm'] }}
                                                                            {{ $ocorrencia['cia'] }} BPMM:

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <p><strong>Natureza da ocorrência:
                                                                            </strong>{{ $ocorrencia['naturezaocorrencia'] }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <p><strong>Observação</strong><br>
                                                                            <textarea id="observacao" name="observacao" rows="4" cols="100">{{ $ocorrencia['observacao'] }}</textarea>
                                                                    </div>





                                                                    <div class="input-group mb-3">
                                                                        <input type="text"
                                                                            class="form-control rounded-0">
                                                                        <span class="input-group-append">
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-flat">Empenhar Viatura</button>
                                                                        </span>


                                                                        <div class="text-danger">
                                                                            {{ $errors->first('vtr') }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <div>
                                                        <p></p>
                                                        <!-- Botões do modal (exemplos de botões) -->
                                                        <style>
                                                            .btn-app {
                                                                width: 100px;
                                                                height: 60px;
                                                                font-size: 10px;
                                                            }

                                                            /* Reduz o tamanho do ícone */
                                                            .btn-app i {
                                                                font-size: 20px;
                                                            }

                                                            /* Centraliza o ícone e o texto verticalmente */
                                                            .btn-app .btn-inner-container {
                                                                display: flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                flex-direction: column;
                                                                height: 100%;
                                                            }
                                                        </style>

                                                        <a class="btn btn-app bg-secondary" data-toggle="modal"
                                                            data-target="#modal-novo-2{{ $ocorrencia['id'] }}">
                                                            <span class="badge bg-purple"></span>
                                                            <div class="btn-inner-container">
                                                                <i class="fas fa-comment"></i>
                                                                <span>Observar</span>
                                                            </div>
                                                        </a>
                                                        @include('modal.despachador.despachador_observarunica')



                                                        <a class="btn btn-app bg-success" data-toggle="modal"
                                                            data-target="#modal-apoio{{ $ocorrencia['id'] }}">
                                                            <span class="badge bg-purple"></span>
                                                            <div class="btn-inner-container">
                                                                <i class="fas fa-users"></i>
                                                                <span>Apoio</span>
                                                            </div>
                                                        </a>
                                                        @include('modal.despachador.despachador_solicitarapoio')



                                                        <a class="btn btn-app bg-danger" data-toggle="modal"
                                                            data-target="#modal-novo-4{{ $ocorrencia['id'] }}">
                                                            <div class="btn-inner-container">
                                                                <i class="fas fa-times"></i>
                                                                <span>Abortar</span>
                                                            </div>
                                                        </a>
                                                        @include('modal.despachador.despachador_abortar')

                                                        <a class="btn btn-app bg-warning" data-toggle="modal"
                                                            data-target="#modal-novo-5{{ $ocorrencia['id'] }}">
                                                            <span class="badge bg-purple"></span>
                                                            <div class="btn-inner-container">
                                                                <i class="fas fa-arrow-up"></i>
                                                                <span>Redirecionar</span>
                                                            </div>
                                                        </a>
                                                        @include('modal.despachador.despachador_redirecionarocorrencia')



                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">

                                            </div>
                                        </div>
                                    </div>
                    </div>
                    @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th style="width: 2%;">
                            </th>
                            <th style="width: 1%; text-align: center;">⚡️</th>
                            <th style="width: 40%;">Endereço</th>
                            <th style="width: 2%; text-align: center;">Nat</th>
                            <th style="width: 19%;">OPM</th>
                            <th class="text-center" style="width: 6%;">Ação</th>
                            <th style="width: 10%; text-align: center;">Espera</th>
                            <th class="text-center" style="width: 6%;">Oco</th>
                        </tr>
                    </tfoot>
                    </table>





                </div>
            </div>
        </div>
        </div>

    @stop

    @section('content')
        <?php
        $cadastro190 = App\Models\Cadastro190::all();
        ?>

        <!-- Include jQuery -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const expandirBtn = document.getElementById("expandir-btn");
                const referenciaTextarea = document.getElementById("referencia-textarea");
                let isExpanded = false;

                expandirBtn.addEventListener("click", function() {
                    if (isExpanded) {
                        referenciaTextarea.style.height = "100%";
                        expandirBtn.innerText = "Expandir";
                    } else {
                        referenciaTextarea.style.height = "auto";
                        expandirBtn.innerText = "Diminuir";
                    }
                    isExpanded = !isExpanded;
                });
            });
        </script>

        <!-- Modal Novo 4 -->
        <div class="modal fade" id="modal-novo-4">
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
                                        <input type="radio" id="opcao-1" name="opcao"
                                            onclick="handleRadioChange()">
                                        TROTE
                                    </label>
                                </div>
                                <div>
                                    <label for="opcao-2">
                                        <input type="radio" id="opcao-2" name="opcao"
                                            onclick="handleRadioChange()">
                                        CONTATO VIA FONE SOLICITANTE DISPENSA PRESENÇA DE VIATURA NO LOCAL
                                    </label>
                                </div>
                                <div>
                                    <label for="opcao-3">
                                        <input type="radio" id="opcao-3" name="opcao"
                                            onclick="handleRadioChange()">
                                        ENDEREÇO NÃO LOCALIZADO
                                    </label>
                                </div>
                                <div>
                                    <label for="opcao-4">
                                        <input type="radio" id="opcao-4" name="opcao"
                                            onclick="handleRadioChange()">
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

            @endsection

            @section('css')
                <style>
                    /* Estilo para reduzir o espaço entre as células */
                    #despachos tbody td,
                    #viaturas tbody td {
                        padding-top: 1px;
                        padding-bottom: 1px;
                    }

                    #despachos thead {
                        position: sticky;
                        top: 0;
                        background-color: white;
                    }

                    #viaturas thead {
                        position: sticky;
                        top: 0;
                        background-color: white;
                    }

                    .btn-app {
                        font-size: 09px;
                        /* Defina o tamanho da fonte desejado */
                    }
                </style>
            @endsection

            @section('js')
                <script>
                    $(document).ready(function() {
                        $("#select-all-checkbox").on("click", function() {
                            // Determine the index of the column you want to select checkboxes in
                            const columnIndex = 0; // Change this to the correct index

                            // Get all checkboxes in the column
                            const checkboxes = $("tbody tr td:nth-child(" + (columnIndex + 1) +
                                ") input[type='checkbox']");

                            // Set the state of all checkboxes in the column to match the "Select All" checkbox
                            checkboxes.prop("checked", this.checked);
                        });
                    });
                </script>
                <script>
                    function atualizarTempoDecorrido() {
                        var dataCriacao = new Date('2023-08-12 17:34:52'); // Hora de criação do banco de dados
                        var agora = new Date(); // Hora atual

                        var diferenca = agora - dataCriacao;
                        var segundos = Math.floor(diferenca / 1000) % 60;
                        var minutos = Math.floor(diferenca / (1000 * 60)) % 60;
                        var horas = Math.floor(diferenca / (1000 * 60 * 60));

                        var tempoDecorrido = horas.toString().padStart(2, '0') + ':' +
                            minutos.toString().padStart(2, '0') + ':' +
                            segundos.toString().padStart(2, '0');

                        document.getElementById('tempoDecorrido').textContent = tempoDecorrido;
                    }

                    atualizarTempoDecorrido(); // Atualizar inicialmente

                    // Atualizar a cada segundo
                    setInterval(atualizarTempoDecorrido, 1000);
                </script>
                <link href="https://cdn.datatables.net/v/bs4/jq-3.7.0/dt-1.13.6/fh-3.4.0/r-2.5.0/datatables.min.css"
                    rel="stylesheet">

                <script src="https://cdn.datatables.net/v/bs4/jq-3.7.0/dt-1.13.6/fh-3.4.0/r-2.5.0/datatables.min.js"></script>

                <script>
                    // Função para formatar o tempo em HH:MM:SS
                    function formatarTempo(tempoSegundos) {
                        let horas = Math.floor(tempoSegundos / 3600);
                        let minutos = Math.floor((tempoSegundos % 3600) / 60);
                        let segundos = Math.floor(tempoSegundos % 60);

                        // Formatar para sempre exibir 2 dígitos para as horas, minutos e segundos
                        horas = horas.toString().padStart(2, '0');
                        minutos = minutos.toString().padStart(2, '0');
                        segundos = segundos.toString().padStart(2, '0');

                        return `${horas}:${minutos}:${segundos}`;
                    }



                    // Chamar a função para atualizar o tempo decorrido a cada segundo
                    setInterval(formatarTempo, 1000);
                </script>
                <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <!-- DataTables  & Plugins -->
                <script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
                <script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
                <script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
                <script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
                <script src="{{ url('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
                <script src="{{ url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
                <script src="{{ url('plugins/jszip/jszip.min.js') }}"></script>
                <script src="{{ url('plugins/pdfmake/pdfmake.min.js') }}"></script>
                <script src="{{ url('plugins/pdfmake/vfs_fonts.js') }}"></script>
                <script src="{{ url('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
                <script src="{{ url('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
                <script src="{{ url('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

                <!-- Page specific script -->
                <script>
                    $(function() {
                        $("#example1").DataTable({
                            "responsive": true,
                            "lengthChange": false,
                            "autoWidth": false,
                            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        $('#example2').DataTable({
                            "paging": true,
                            "lengthChange": false,
                            "searching": true,
                            "ordering": true,
                            "info": true,
                            "autoWidth": false,
                            "responsive": true,
                        });
                    });
                </script>

            @endsection
