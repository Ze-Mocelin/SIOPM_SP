<?php
$ocorrencias = App\Models\Ocorrencia::get();
$emergencias = App\Models\cadastro190::get();
?>
@extends('adminlte::page')

@section('title', 'Cadastro de Emergência')

@section('content')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Estatisticas</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Chefia</a></li>
    <li class="breadcrumb-item active">Estatística de Ocorrências</li>
    </ol>
    </div>
    </div>
    </div>
    </div>
    <!-- painéis -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                <h3>{{$emergencias->count()}}</h3>
                <p>Total de Ocorrências</p>
            </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer"> + informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$emergencias->count()}}</h3>
                    <p>Ocorrências Urgentes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-fw fa-pie-graph"></i>
                </div>
                    <a href="#" class="small-box-footer"> + Informações <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        
            <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
                <div class="inner">
                <h3>{{$ocorrencias->count()}}</h3>
                <p>Policial em Perigo</p>
            </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer"> + Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <div class="col-lg-3 col-6">
        
        <div class="small-box bg-warning">
        <div class="inner">
        <h3>{{$emergencias->count()}}</h3>
        <p>Ocorrencias Registradas</p>
        </div>
        <div class="icon">
        <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer"> + Informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
        <div class="inner">
        <h3>30</h3>
        <p>Ocorrencias Encerradas</p>
        </div>
        <div class="icon">
        <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer"> + Informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        <div class="col-lg-3 col-6">
        <div class="small-box bg-secondary">
        <div class="inner">
        <h3>20</h3>
        <p>Ocorrencias Pendentes</p>
        </div>
        <div class="icon">
        <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer"> + Informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>


        <div class="col-lg-3 col-6">
        <div class="small-box bg-secondary">
        <div class="inner">
        <h3>20</h3>
        <p>SOP Cadastrados</p>
        </div>
        <div class="icon">
        <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer"> + Informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        <div class="col-lg-3 col-6">
        <div class="small-box bg-secondary">
        <div class="inner">
        <h3>20</h3>
        <p>Alerta Gerais</p>
        </div>
        <div class="icon">
        <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer"> + Informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>



    <div class="col-lg-3 col-6">
        <div class="small-box bg-secondary">
        <div class="inner">
        <h3>20</h3>
        <p>Ocorrências Flagrantes</p>
        </div>
        <div class="icon">
        <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer"> + Informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>





    </div>




    
        <!-- painéis -->
@endsection