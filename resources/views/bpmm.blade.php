@extends('adminlte::page')

@section('title', 'BPM/M')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cadastro de BPMM</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">BPMM</li>
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
$radio_patrulha = App\Models\Bpmm::where('tipo', '=', 1)->get();
$especialidades = App\Models\Bpmm::where('tipo', '=', 2)->get();
$bombeiros = App\Models\Bpmm::where('tipo', '=', 3)->get();
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
                                BPM/M
                            </h3>
                        </div>
                        <div class="card-body">
                            <!-- Modal button -->
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Cadastrar batalhão
                            </button>
                            @include('modal.bpmm.bpmm_create')

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">BPM/M</h3>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="bd-example bd-example-tabs">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="radio_patrulha-tab" data-toggle="tab" href="#radio_patrulha" role="tab" aria-controls="radio_patrulha" aria-selected="true">Rádio patrulha</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="especialidades-tab" data-toggle="tab" href="#especialidades" role="tab" aria-controls="especialidades" aria-selected="false">Especialidades</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="bombeiros-tab" data-toggle="tab" href="#bombeiros" role="tab" aria-controls="bombeiros" aria-selected="false">Bombeiros</a>
                                                </li>
                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content" id="myTabContent">
                                                <!-- Radio patrulha tab content -->
                                                <div class="tab-pane fade show active" id="radio_patrulha" role="tabpanel" aria-labelledby="radio_patrulha-tab">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 10px">#</th>
                                                                <th>Batalhão</th>
                                                                <th>Ações</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($radio_patrulha as $b)
                                                                <tr>
                                                                    <td>{{ $b->id }}</td>
                                                                    <td>{{ $b->nome }}</td>
                                                                    <td>
                                                                        <div class="">
                                                                            <div class="" style="">
                                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-{{$b->id}}">
                                                                                    <i class="fas fa-edit"></i>Editar
                                                                                </button>

                                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$b->id}}">
                                                                                    <i class="fas fa-trash"></i>Excluir
                                                                                </button>

                                                                                @include('modal.bpmm.bpmm_edit')
                                                                                @include('modal.bpmm.bpmm_delete')
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- Especialidades tab content -->
                                                <div class="tab-pane fade" id="especialidades" role="tabpanel" aria-labelledby="especialidades-tab">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 10px">#</th>
                                                                <th>Batalhão</th>
                                                                <th>Ações</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($especialidades as $b)
                                                                <tr>
                                                                    <td>{{ $b->id }}</td>
                                                                    <td>{{ $b->nome }}</td>
                                                                    <td>
                                                                        <div class="">
                                                                            <div class="" style="">
                                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-{{$b->id}}">
                                                                                    <i class="fas fa-edit"></i>Editar
                                                                                </button>

                                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$b->id}}">
                                                                                    <i class="fas fa-trash"></i>Excluir
                                                                                </button>

                                                                                @include('modal.bpmm.bpmm_edit')
                                                                                @include('modal.bpmm.bpmm_delete')
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- Bombeiros tab content -->
                                                <div class="tab-pane fade" id="bombeiros" role="tabpanel" aria-labelledby="bombeiros-tab">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 10px">#</th>
                                                                <th>Batalhão</th>
                                                                <th>Ações</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($bombeiros as $b)
                                                                <tr>
                                                                    <td>{{ $b->id }}</td>
                                                                    <td>{{ $b->nome }}</td>
                                                                    <td>
                                                                        <div class="">
                                                                            <div class="" style="">
                                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-{{$b->id}}">
                                                                                    <i class="fas fa-edit"></i>Editar
                                                                                </button>

                                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$b->id}}">
                                                                                    <i class="fas fa-trash"></i>Excluir
                                                                                </button>

                                                                                @include('modal.bpmm.bpmm_edit')
                                                                                @include('modal.bpmm.bpmm_delete')
                                                                            </div>
                                                                        </div>
                                                                    </td>
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
