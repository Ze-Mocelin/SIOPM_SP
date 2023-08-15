@extends('adminlte::page')

@section('title', 'Usuários logados')

@section('content_header')
    <!-- Content header here -->
@stop

<?php
$atendente = App\Models\User::where('nivel', '=', 'Atendente')->get();
$despachador = App\Models\User::where('nivel', '=', 'Despachador')->get();
$supervisor = App\Models\User::where('nivel', '=', 'Supervidor')->get();

?>

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Card with tabs -->
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-edit"></i>
                                Usuários logados
                            </h3>
                        </div>
                        <div class="card-body">


                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Usuários logados</h3>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="bd-example bd-example-tabs">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="atendente-tab" data-toggle="tab" href="#atendente" role="tab" aria-controls="atendente" aria-selected="true">Atendentes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="despachador-tab" data-toggle="tab" href="#despachador" role="tab" aria-controls="despachador" aria-selected="false">Despachadores</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="supervisor-tab" data-toggle="tab" href="#supervisor" role="tab" aria-controls="supervisor" aria-selected="false">Supervisor</a>
                                                </li>

                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content" id="myTabContent">
                                                <!-- Atendente tab content -->
                                                <div class="tab-pane fade show active" id="atendente" role="tabpanel" aria-labelledby="atendente-tab">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Batalhão</th>
                                                                <th>Nome</th>
                                                                <th>Logado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($atendente as $b)
                                                                <tr>
                                                                    <td>{{ $b->logado }}</td>
                                                                    <td>{{ $b->name }}</td>
                                                                    <td>{{ $b->updated_at }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- Despachador tab content -->
                                                <div class="tab-pane fade" id="despachador" role="tabpanel" aria-labelledby="despachador-tab">
                                                <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Batalhão</th>
                                                                <th>Nome</th>
                                                                <th>Logado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($despachador as $b)
                                                                <tr>
                                                                    <td>{{ $b->logado }}</td>
                                                                    <td>{{ $b->name }}</td>
                                                                    <td>{{ $b->updated_at }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade show active" id="supervisor" role="tabpanel" aria-labelledby="supervisor-tab">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Supervisor</th>
                                                                <th>Nome</th>
                                                                <th>Logado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($supervisor as $b)
                                                                <tr>
                                                                    <td>{{ $b->logado }}</td>
                                                                    <td>{{ $b->name }}</td>
                                                                    <td>{{ $b->updated_at }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
