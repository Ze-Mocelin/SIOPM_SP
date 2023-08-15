@extends('adminlte::page')

@section('title', 'Todos usuários logados')

@section('content_header')
    <!-- Content header here -->
@stop

<?php
$atendente = App\Models\User::where('nivel', '=', 'Atendente')->get();
$despachador = App\Models\User::where('nivel', '=', 'Despachador')->get();
$supervisor = App\Models\User::where('nivel', '=', 'Supervisor')->get();
$tecnica = App\Models\User::where('nivel', '=', 'tecnica')->get();
$STQ = App\Models\User::where('nivel', '=', 'STQ')->get();
$certidoes = App\Models\User::where('nivel', '=', 'certidoes')->get();
$chefia = App\Models\User::where('nivel', '=', 'chefia')->get();
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
                                                    <a class="nav-link active" id="atendente-tab" data-toggle="tab"
                                                        href="#atendente" role="tab" aria-controls="atendente"
                                                        aria-selected="true">Atendentes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="despachador-tab" data-toggle="tab"
                                                        href="#despachador" role="tab" aria-controls="despachador"
                                                        aria-selected="false">Despachadores</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="supervisao-tab" data-toggle="tab"
                                                        href="#supervisao" role="tab" aria-controls="supervisao"
                                                        aria-selected="true">Supervisores</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="tecnica-tab" data-toggle="tab"
                                                        href="#tecnica" role="tab" aria-controls="tecnica"
                                                        aria-selected="true">Tecnica</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="stq-tab" data-toggle="tab"
                                                        href="#stq" role="tab" aria-controls="stq"
                                                        aria-selected="true">STQ</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="certidoes-tab" data-toggle="tab"
                                                        href="#certidoes" role="tab" aria-controls="certidoes"
                                                        aria-selected="true">Certidões</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="chefia-tab" data-toggle="tab"
                                                        href="#chefia" role="tab" aria-controls="chefia"
                                                        aria-selected="true">Chefia</a>
                                                </li>


                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content" id="myTabContent">
                                                <!-- Atendente tab content -->
                                                <div class="tab-pane fade show active" id="atendente" role="tabpanel"
                                                    aria-labelledby="atendente-tab">
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
                                                                    <td>{{ $b->matricula}} {{$b->identificacao}} {{ $b->name  }}</td>
                                                                    <td>{{ $b->updated_at }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- Despachador tab content -->
                                                <div class="tab-pane fade" id="despachador" role="tabpanel"
                                                    aria-labelledby="despachador-tab">
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
                                                                    <td>{{ $b->matricula}} {{$b->identificacao}} {{ $b->name  }}</td>
                                                                    <td>{{ $b->updated_at }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- Supervisão tab content -->
                                                <div class="tab-pane fade" id="supervisao" role="tabpanel"
                                                    aria-labelledby="supervisao-tab">
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
                                                                    <td>{{ $b->matricula}} {{$b->identificacao}} {{ $b->name  }}</td>
                                                                    <td>{{ $b->updated_at }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- Tecnica tab content -->
                                                <div class="tab-pane fade" id="tecnica" role="tabpanel"
                                                    aria-labelledby="tecnica-tab">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Tecnica</th>
                                                                <th>Nome</th>
                                                                <th>Logado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($tecnica as $b)
                                                                <tr>
                                                                    <td>{{ $b->logado }}</td>
                                                                    <td>{{ $b->matricula}} {{$b->identificacao}} {{ $b->name  }}</td>
                                                                    <td>{{ $b->updated_at }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- STQ tab content -->
                                                <div class="tab-pane fade" id="stq" role="tabpanel"
                                                    aria-labelledby="stq-tab">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>STQ</th>
                                                                <th>Nome</th>
                                                                <th>Logado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($STQ as $b)
                                                                <tr>
                                                                    <td>{{ $b->logado }}</td>
                                                                    <td>{{ $b->matricula}} {{$b->identificacao}} {{ $b->name  }}</td>
                                                                    <td>{{ $b->updated_at }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- Certidões tab content -->
                                                <div class="tab-pane fade" id="certidoes" role="tabpanel"
                                                    aria-labelledby="certidoes-tab">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Certidões</th>
                                                                <th>Nome</th>
                                                                <th>Logado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($certidoes as $b)
                                                                <tr>
                                                                    <td>{{ $b->logado }}</td>
                                                                    <td>{{ $b->matricula}} {{$b->identificacao}} {{ $b->name  }}</td>
                                                                    <td>{{ $b->updated_at }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <!-- Chefia tab content -->
                                                <div class="tab-pane fade" id="chefia" role="tabpanel"
                                                    aria-labelledby="chefia-tab">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Oficial</th>
                                                                <th>Nome</th>
                                                                <th>Logado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($chefia as $b)
                                                                <tr>
                                                                    <td>{{ $b->logado }}</td>
                                                                    <td>{{ $b->matricula}} {{$b->identificacao}} {{ $b->name  }}</td>
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
