@extends('adminlte::page')
@section('title', 'Informações')
@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Informações</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Informações</li>
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
@section('content')
    <?php

        $sistema=App\Models\Publication::where('type',1)->orderby('created_at', 'desc')->get();
        $cadastro_ocorrencia=App\Models\Publication::where('type',2)->orderby('created_at', 'desc')->get();
        $instrucoes_sistema=App\Models\Publication::where('type',3)->orderby('created_at', 'desc')->get();
        $ordem_servico=App\Models\Publication::where('type',4)->orderby('created_at', 'desc')->get();
        $instrucoes_icc=App\Models\Publication::where('type',5)->orderby('created_at', 'desc')->get();

    ?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-edit"></i>
                                Informações
                            </h3>
                        </div>
                        <div class="card-body">
                            <!-- Botão Informação -->
                            <a class="btn btn-app bg-success" data-toggle="modal" data-target="#modal-default">
                                <span class="badge bg-purple"></span>
                                <i class="fas fa-plus"></i> Informação
                            </a>
                            @include('modal.publications.publications_create')
                            <!-- Botão Nova pasta -->
                            <a class="btn btn-app bg-primary" data-toggle="modal" data-target="#modal-folder">
                                <span class="badge bg-purple"></span>
                                <i class="fas fa-folder"></i> Nova pasta
                            </a>
                            @include('modal.publications.publications_folder')
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Lista de informações</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="bd-example bd-example-tabs">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="instrucoes_civil_tab" data-toggle="tab"
                                                        href="#instrucoes_civil" role="tab"
                                                        aria-controls="instrucoes_civil" aria-selected="true">Instruções
                                                        Emergência</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="instrucoes_militar_tab" data-toggle="tab"
                                                        href="#instrucoes_militar" role="tab"
                                                        aria-controls="instrucoes_militar" aria-selected="false">Instruções
                                                        Militares</a>
                                                </li>
                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content" id="myTabContent">
                                                <!-- Radio patrulha tab content -->
                                                <div class="tab-pane fade show active" id="instrucoes_civil" role="tabpanel"
                                                    aria-labelledby="instrucoes_civil_tab">
                                                    <div class="bd-example bd-example-tabs">
                                                        <!-- Submenu nav tabs -->
                                                        <ul class="nav nav-tabs" id="submenu_civil" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="sistema_civil_tab"
                                                                    data-toggle="tab" href="#sistema_civil" role="tab"
                                                                    aria-controls="sistema_civil"
                                                                    aria-selected="true">Sistema</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="cadastro_de_ocorrencias_tab"
                                                                    data-toggle="tab" href="#cadastro_de_ocorrencias"
                                                                    role="tab" aria-controls="cadastro_de_ocorrencias"
                                                                    aria-selected="false">Cadastro de ocorrências</a>
                                                            </li>
                                                        </ul>
                                                        <!-- Submenu tab content -->
                                                        <div class="tab-content" id="submenu_civil_content">
                                                            <!-- sistema civil tab content -->
                                                            <div class="tab-pane fade show active" id="sistema_civil"
                                                                role="tabpanel" aria-labelledby="sistema_civil_tab">
                                                                <!-- ... Conteúdo do submenu "Sistema" ... -->
                                                                <table id="example1"
                                                                    class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Título</th>
                                                                            <th>Descrição</th>
                                                                            <th style="display:none;">Tags</th>
                                                                            <th>Arquivo</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($sistema as $publication)
                                                                            <tr>
                                                                                <td>{{ $publication->title }}</td>
                                                                                <td>{{ $publication->description }} |Data início:{{ $publication->data_inicio }} | Data término:{{ $publication->data_termino }}}</td>
                                                                                <td>{{ $publication->tags }}</td>
                                                                                <td>
                                                                                    @if ($publication->file_type === 'pdf')
                                                                                        <!-- Exibir o link para baixar o arquivo PDF -->
                                                                                        <a href="{{ asset('informacoes/' . $publication->folder . '/' . $publication->file_path) }}"
                                                                                            download>
                                                                                            <button
                                                                                                class="btn btn-success btn-block">Baixar</button>
                                                                                        </a>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-block"
                                                                                            data-toggle="modal"
                                                                                            data-target="#modal-view-{{ $publication->id }}">
                                                                                            Visualizar
                                                                                        </button>
                                                                                        @include('modal.publications.publications_view')
                                                                                    @else
                                                                                        <!-- Exibir o link para baixar a imagem -->
                                                                                        <a href="{{ Storage::url('informacoes/' . $publication->folder . '/' . $publication->file_path) }}"
                                                                                            download>
                                                                                            <button
                                                                                                class="btn btn-primary btn-block">Baixar
                                                                                                Imagem</button>
                                                                                        </a>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-block"
                                                                                            data-toggle="modal"
                                                                                            data-target="#modal-view-{{ $publication->id }}">
                                                                                            Visualizar
                                                                                        </button>
                                                                                        @include('modal.publications.publications_view')
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- cadastro de ocorrencias tab content -->
                                                            <div class="tab-pane fade" id="cadastro_de_ocorrencias"
                                                                role="tabpanel"
                                                                aria-labelledby="cadastro_de_ocorrencias_tab">
                                                                <!-- ... Conteúdo do submenu "Cadastro de Ocorrências" ... -->
                                                                <table id="example1"
                                                                    class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Título</th>
                                                                            <th>Descrição</th>
                                                                            <th style="display:none;">Tags</th>
                                                                            <th>Arquivo</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($cadastro_ocorrencia as $publication)
                                                                            <tr>
                                                                                <td>{{ $publication->title }}</td>
                                                                                <td>{{ $publication->description }} |Data início:{{ $publication->data_inicio }} | Data término:{{ $publication->data_termino }}}</td>
                                                                                <td>{{ $publication->tags }}</td>
                                                                                <td>
                                                                                    @if ($publication->file_type === 'pdf')
                                                                                        <!-- Exibir o link para baixar o arquivo PDF -->
                                                                                        <a href="{{ asset('informacoes/' . $publication->folder . '/' . $publication->file_path) }}"
                                                                                            download>
                                                                                            <button
                                                                                                class="btn btn-success btn-block">Baixar</button>
                                                                                        </a>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-block"
                                                                                            data-toggle="modal"
                                                                                            data-target="#modal-view-{{ $publication->id }}">
                                                                                            Visualizar
                                                                                        </button>
                                                                                        @include('modal.publications.publications_view')
                                                                                    @else
                                                                                        <!-- Exibir o link para baixar a imagem -->
                                                                                        <a href="{{ Storage::url('informacoes/' . $publication->folder . '/' . $publication->file_path) }}"
                                                                                            download>
                                                                                            <button
                                                                                                class="btn btn-primary btn-block">Baixar
                                                                                                Imagem</button>
                                                                                        </a>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-block"
                                                                                            data-toggle="modal"
                                                                                            data-target="#modal-view-{{ $publication->id }}">
                                                                                            Visualizar
                                                                                        </button>
                                                                                        @include('modal.publications.publications_view')
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Especialidades tab content -->
                                                <div class="tab-pane fade" id="instrucoes_militar" role="tabpanel"
                                                    aria-labelledby="instrucoes_militar_tab">
                                                    <div class="bd-example bd-example-tabs">
                                                        <!-- Submenu nav tabs -->
                                                        <ul class="nav nav-tabs" id="submenu_militar" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="instrucoes_sistema_tab"
                                                                    data-toggle="tab" href="#instrucoes_sistema"
                                                                    role="tab" aria-controls="instrucoes_sistema"
                                                                    aria-selected="true">Instruções do Sistema</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="ordem_servico_tab"
                                                                    data-toggle="tab" href="#ordem_servico"
                                                                    role="tab" aria-controls="ordem_servico"
                                                                    aria-selected="false">Ordem de serviço</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="instrucoes_icc_tab"
                                                                    data-toggle="tab" href="#instrucoes_icc"
                                                                    role="tab" aria-controls="instrucoes_icc"
                                                                    aria-selected="false">Instruções ICC</a>
                                                            </li>
                                                        </ul>
                                                        <!-- Submenu tab content -->
                                                        <div class="tab-content" id="submenu_militar_content">
                                                            <!-- instrucoes sistema tab content -->
                                                            <div class="tab-pane fade show active" id="instrucoes_sistema"
                                                                role="tabpanel" aria-labelledby="instrucoes_sistema_tab">
                                                                <!-- ... Conteúdo do submenu "Instruções Sistema" ... -->
                                                                <table id="example1"
                                                                    class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Título</th>
                                                                            <th>Descrição</th>
                                                                            <th style="display:none;">Tags</th>
                                                                            <th>Arquivo</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($instrucoes_sistema as $publication)
                                                                            <tr>
                                                                                <td>{{ $publication->title }}</td>
                                                                                <td>{{ $publication->description }} |Data início:{{ $publication->data_inicio }} | Data término:{{ $publication->data_termino }}}</td>
                                                                                <td>{{ $publication->tags }}</td>
                                                                                <td>
                                                                                    @if ($publication->file_type === 'pdf')
                                                                                        <!-- Exibir o link para baixar o arquivo PDF -->
                                                                                        <a href="{{ asset('informacoes/' . $publication->folder . '/' . $publication->file_path) }}"
                                                                                            download>
                                                                                            <button
                                                                                                class="btn btn-success btn-block">Baixar</button>
                                                                                        </a>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-block"
                                                                                            data-toggle="modal"
                                                                                            data-target="#modal-view-{{ $publication->id }}">
                                                                                            Visualizar
                                                                                        </button>
                                                                                        @include('modal.publications.publications_view')
                                                                                    @else
                                                                                        <!-- Exibir o link para baixar a imagem -->
                                                                                        <a href="{{ Storage::url('informacoes/' . $publication->folder . '/' . $publication->file_path) }}"
                                                                                            download>
                                                                                            <button
                                                                                                class="btn btn-primary btn-block">Baixar
                                                                                                Imagem</button>
                                                                                        </a>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-block"
                                                                                            data-toggle="modal"
                                                                                            data-target="#modal-view-{{ $publication->id }}">
                                                                                            Visualizar
                                                                                        </button>
                                                                                        @include('modal.publications.publications_view')
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- ordem_de_servico tab content -->
                                                            <div class="tab-pane fade" id="ordem_servico" role="tabpanel"
                                                                aria-labelledby="ordem_servico_tab">
                                                                <!-- ... Conteúdo do submenu "Ordem de Serviço" ... -->
                                                                <table id="example1"
                                                                    class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Título</th>
                                                                            <th>Descrição</th>
                                                                            <th style="display:none;">Tags</th>
                                                                            <th>Arquivo</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($ordem_servico as $publication)
                                                                            <tr>
                                                                                <td>{{ $publication->title }}</td>
                                                                                <td>{{ $publication->description }} |Data início:{{ $publication->data_inicio }} | Data término:{{ $publication->data_termino }}}</td>
                                                                                <td>{{ $publication->tags }}</td>
                                                                                <td>
                                                                                    @if ($publication->file_type === 'pdf')
                                                                                        <!-- Exibir o link para baixar o arquivo PDF -->
                                                                                        <a href="{{ asset('informacoes/' . $publication->folder . '/' . $publication->file_path) }}"
                                                                                            download>
                                                                                            <button
                                                                                                class="btn btn-success btn-block">Baixar</button>
                                                                                        </a>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-block"
                                                                                            data-toggle="modal"
                                                                                            data-target="#modal-view-{{ $publication->id }}">
                                                                                            Visualizar
                                                                                        </button>
                                                                                        @include('modal.publications.publications_view')
                                                                                    @else
                                                                                        <!-- Exibir o link para baixar a imagem -->
                                                                                        <a href="{{ Storage::url('informacoes/' . $publication->folder . '/' . $publication->file_path) }}"
                                                                                            download>
                                                                                            <button
                                                                                                class="btn btn-primary btn-block">Baixar
                                                                                                Imagem</button>
                                                                                        </a>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-block"
                                                                                            data-toggle="modal"
                                                                                            data-target="#modal-view-{{ $publication->id }}">
                                                                                            Visualizar
                                                                                        </button>
                                                                                        @include('modal.publications.publications_view')
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- instrucoes_icc tab content -->
                                                            <div class="tab-pane fade" id="instrucoes_icc"
                                                                role="tabpanel" aria-labelledby="instrucoes_icc_tab">
                                                                <!-- ... Conteúdo do submenu "Instruções ICC" ... -->
                                                                <table id="example1"
                                                                    class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Título</th>
                                                                            <th>Descrição</th>
                                                                            <th style="display:none;">Tags</th>
                                                                            <th>Arquivo</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($instrucoes_icc as $publication)
                                                                            <tr>
                                                                                <td>{{ $publication->title }}</td>
                                                                                <td>{{ $publication->description }} |Data início:{{ $publication->data_inicio }} | Data término:{{ $publication->data_termino }}}</td>
                                                                                <td>{{ $publication->tags }}</td>
                                                                                <td>
                                                                                    @if ($publication->file_type === 'pdf')
                                                                                        <!-- Exibir o link para baixar o arquivo PDF -->
                                                                                        <a href="{{ asset('informacoes/' . $publication->folder . '/' . $publication->file_path) }}"
                                                                                            download>
                                                                                            <button
                                                                                                class="btn btn-success btn-block">Baixar</button>
                                                                                        </a>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-block"
                                                                                            data-toggle="modal"
                                                                                            data-target="#modal-view-{{ $publication->id }}">
                                                                                            Visualizar
                                                                                        </button>
                                                                                        @include('modal.publications.publications_view')
                                                                                    @else
                                                                                        <!-- Exibir o link para baixar a imagem -->
                                                                                        <a href="{{ Storage::url('informacoes/' . $publication->folder . '/' . $publication->file_path) }}"
                                                                                            download>
                                                                                            <button
                                                                                                class="btn btn-primary btn-block">Baixar
                                                                                                Imagem</button>
                                                                                        </a>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-block"
                                                                                            data-toggle="modal"
                                                                                            data-target="#modal-view-{{ $publication->id }}">
                                                                                            Visualizar
                                                                                        </button>
                                                                                        @include('modal.publications.publications_view')
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Bombeiros tab content -->
                                                <!-- ... Conteúdo do terceiro tab ... -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('js')
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
                /*"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]*/
                "columnDefs": [
            {
                "targets": 2, // Índice da coluna "tag"
                "visible": false // Oculta a coluna "tag"
            }
        ],
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


@stop
