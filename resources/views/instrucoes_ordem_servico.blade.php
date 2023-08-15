@extends('adminlte::page')
@section('title', 'Informações')
@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Informações ordem de serviço</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Informações ordem de serviço</li>
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

    $ordem_servico = App\Models\Publication::where('type', 4)
        ->orderby('created_at', 'desc')
        ->get();
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
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Lista de informações</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="bd-example bd-example-tabs">

                                            <table id="example1" class="table table-bordered table-striped">
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
                                                            <td>{{ $publication->description }} |Data
                                                                início:{{ $publication->data_inicio }} | Data
                                                                término:{{ $publication->data_termino }}}</td>
                                                            <td>{{ $publication->tags }}</td>
                                                            <td>
                                                                @if ($publication->file_type === 'pdf')
                                                                    <!-- Exibir o link para baixar o arquivo PDF -->
                                                                    <a href="{{ asset('informacoes/' . $publication->folder . '/' . $publication->file_path) }}"
                                                                        download>
                                                                        <button
                                                                            class="btn btn-success btn-block">Baixar</button>
                                                                    </a>
                                                                    <button type="button" class="btn btn-default btn-block"
                                                                        data-toggle="modal"
                                                                        data-target="#modal-view-{{ $publication->id }}">
                                                                        Visualizar
                                                                    </button>
                                                                    @include('modal.publications.publications_view')
                                                                @else
                                                                    <!-- Exibir o link para baixar a imagem -->
                                                                    <a href="{{ Storage::url('informacoes/' . $publication->folder . '/' . $publication->file_path) }}"
                                                                        download>
                                                                        <button class="btn btn-primary btn-block">Baixar
                                                                            Imagem</button>
                                                                    </a>
                                                                    <button type="button" class="btn btn-default btn-block"
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
                "columnDefs": [{
                    "targets": 2, // Índice da coluna "tag"
                    "visible": false // Oculta a coluna "tag"
                }],
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
