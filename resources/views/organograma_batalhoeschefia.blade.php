@extends('adminlte::page')

@section('title', 'Organograma Batalhões')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Organograma Batalhões</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a>
                            @include('modal.organograma.perfil_chefia')</li>
                        <li class="breadcrumb-item active">Organograma Batalhões</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-danger card-outline">
                <div class="card-body pad" style="overflow-x: auto; white-space: nowrap;">
                    <div class="row">
                        <div class="col-md-12">

                            <div style="display: flex; justify-content: center; width: 100vw;">
                                <button type="button" class="btn btn-block btn-danger btn-xs">
                                    <b>TELA DO DESPACHO DE OCORRÊNCIA</b>
                                </button>
                            </div>


                        </div>
                    </div>

                    <span style="width: 50px; display: inline-block;"></span>


                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i>  ****
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i> ****
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3149</span>
                                <i class="fas fa-user-check"></i>  49ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3104</span>
                                <i class="fas fa-user-check"></i>  04ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3123</span>
                                <i class="fas fa-user-check"></i>  23ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3116</span>
                                <i class="fas fa-user-check"></i>  16ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9805</span>
                                <i class="fas fa-user-shield"></i>  SUP M5
                            </a>
                            @include('modal.organograma.perfil_chefia')

                            <span style="width: 10px; display: inline-block;"></span>

                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9807</span>
                                <i class="fas fa-user-shield"></i>  SUP M7
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3115</span>
                                <i class="fas fa-user-check"></i>  15ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3131</span>
                                <i class="fas fa-user-check"></i>  31ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3126</span>
                                <i class="fas fa-user-check"></i>  26ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">9951</span>
                                <i class="fas fa-user-check"></i>  BAEP CPM
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">9950</span>
                                <i class="fas fa-user-check"></i>  BAEP CPC
                            </a>
                            @include('modal.organograma.perfil_chefia')


                            <span style="width: 10px; display: inline-block;"></span>


                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9812</span>
                                <i class="fas fa-user-shield"></i>  SUP M12
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3117</span>
                                <i class="fas fa-user-check"></i>  17ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3132</span>
                                <i class="fas fa-user-check"></i>  32ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3135</span>
                                <i class="fas fa-user-check"></i>  35ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i>  ****
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-warning custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">9816</span>
                                <i class="fas fa-road-circle-check"></i>  CET
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-primary custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">9817</span>
                                <i class="fas fa-train-subway"></i>  METRÔ
                            </a>
                            @include('modal.organograma.perfil_chefia')




                            <!-- Adicione mais botões -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i>  ****
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3114</span>
                                <i class="fas fa-user-check"></i>  14ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3120</span>
                                <i class="fas fa-user-check"></i>  20ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3133</span>
                                <i class="fas fa-user-check"></i>  33ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3125</span>
                                <i class="fas fa-user-check"></i>  25ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3136</span>
                                <i class="fas fa-user-check"></i>  36ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9808</span>
                                <i class="fas fa-user-shield"></i>  SUP M8
                            </a>
                            @include('modal.organograma.perfil_chefia')


                            <span style="width: 10px; display: inline-block;"></span>


                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9803</span>
                                <i class="fas fa-user-shield"></i>  SUP M3
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3118</span>
                                <i class="fas fa-user-check"></i>  18ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3105</span>
                                <i class="fas fa-user-check"></i>  05ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3109</span>
                                <i class="fas fa-user-check"></i>  09ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3143</span>
                                <i class="fas fa-user-check"></i>  43ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i>  ****
                            </a>
                            @include('modal.organograma.perfil_chefia')


                            <span style="width: 10px; display: inline-block;"></span>


                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9804</span>
                                <i class="fas fa-user-shield"></i>  SUP M4
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3102</span>
                                <i class="fas fa-user-check"></i>  02ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3139</span>
                                <i class="fas fa-user-check"></i>  39ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3129</span>
                                <i class="fas fa-user-check"></i>  29ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3148</span>
                                <i class="fas fa-user-check"></i>  48ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-secondary custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">9818</span>
                                <i class="fas fa-train-subway"></i>  CPTM
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9819</span>
                                <i class="fas fa-bus"></i>  SP TRANS
                            </a>
                            @include('modal.organograma.perfil_chefia')


                            <!-- Adicione mais botões -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i>  ****
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i>  ****
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">9958</span>
                                <i class="fas fa-user-check"></i>  ROD-AMB
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">9956</span>
                                <i class="fas fa-user-check"></i>  02ºBPTRAN
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">9955</span>
                                <i class="fas fa-user-check"></i>  01ºBPTRAN
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">9957</span>
                                <i class="fas fa-user-check"></i>  CHOQUE
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9813</span>
                                <i class="fas fa-user-shield"></i>  SUP ESP
                            </a>
                            @include('modal.organograma.perfil_chefia')


                            <span style="width: 10px; display: inline-block;"></span>


                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9801</span>
                                <i class="fas fa-user-shield"></i>  SUP M1
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3107</span>
                                <i class="fas fa-user-check"></i>  07ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3111</span>
                                <i class="fas fa-user-check"></i>  11ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3113</span>
                                <i class="fas fa-user-check"></i>  13ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-dark custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-info">9963</span>
                                <i class="fas fa-users-rays"></i>  VDM 1
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-dark custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-info">9964</span>
                                <i class="fas fa-users-rays"></i>  VDM 2
                            </a>
                            @include('modal.organograma.perfil_chefia')


                            <span style="width: 10px; display: inline-block;"></span>


                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">31</span>
                                <i class="fas fa-user-shield"></i>  SUP M11
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3121</span>
                                <i class="fas fa-user-check"></i>  21ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3108</span>
                                <i class="fas fa-user-check"></i>  08ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i>  ****
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i>  ****
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i>  ****
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-info custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">9820</span>
                                <i class="fas fa-person-military-pointing"></i>  GCM
                            </a>
                            @include('modal.organograma.perfil_chefia')



                            <!-- Adicione mais botões -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9956</span>
                                <i class="fas fa-solid fa-fire-extinguisher"></i>  RESERVA
                            </a>

                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9970</span>
                                <i class="fas fa-solid fa-fire-extinguisher"></i>  RETRIAGEM
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9977</span>
                                <i class="fas fa-solid fa-fire-extinguisher"></i>  8ºGB
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9974</span>
                                <i class="fas fa-solid fa-fire-extinguisher"></i>  3ºGB
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9976</span>
                                <i class="fas fa-solid fa-fire-extinguisher"></i>  5º|17º
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9969</span>
                                <i class="fas fa-solid fa-fire-extinguisher"></i>  CONFERENTE
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9815</span>
                                <i class="fas fa-user-shield"></i>  SUP A
                            </a>
                            @include('modal.organograma.perfil_chefia')


                            <span style="width: 10px; display: inline-block;"></span>


                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9802</span>
                                <i class="fas fa-user-shield"></i>  SUP M2
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3146</span>
                                <i class="fas fa-user-check"></i>  46ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3103</span>
                                <i class="fas fa-user-check"></i>  03ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3112</span>
                                <i class="fas fa-user-check"></i>  12ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-dark custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-info">9953</span>
                                <i class="fas fa-users-rays"></i>  VDM 3
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-dark custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-info">9954</span>
                                <i class="fas fa-users-rays"></i>  VDM 4
                            </a>


                            <span style="width: 10px; display: inline-block;"></span>


                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9809</span>
                                <i class="fas fa-user-shield"></i>  SUP M9
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3119</span>
                                <i class="fas fa-user-check"></i>  19ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3128</span>
                                <i class="fas fa-user-check"></i>  28ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3138</span>
                                <i class="fas fa-user-check"></i>  38ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i>  ****
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i>  ****
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i>  ****
                            </a>
                            @include('modal.organograma.perfil_chefia')



                            <!-- Adicione mais botões -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9973</span>
                                <i class="fas fa-solid fa-fire-extinguisher"></i>  2ºGB
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9972</span>
                                <i class="fas fa-solid fa-fire-extinguisher"></i>  1ºGB
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9971</span>
                                <i class="fas fa-hand-holding-medical"></i>  GRAU
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9975</span>
                                <i class="fas fa-solid fa-fire-extinguisher"></i>  4ºGB
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9978</span>
                                <i class="fas fa-solid fa-fire-extinguisher"></i>  18ºGB
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9968</span>
                                <i class="fas fa-solid fa-fire-extinguisher"></i>  CONFERENTE
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9814</span>
                                <i class="fas fa-user-shield"></i>  SUP B
                            </a>
                            @include('modal.organograma.perfil_chefia')


                            <span style="width: 10px; display: inline-block;"></span>


                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">9809</span>
                                <i class="fas fa-user-shield"></i>  SUP M10
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3137</span>
                                <i class="fas fa-user-check"></i>  37ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3101</span>
                                <i class="fas fa-user-check"></i>  01ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3122</span>
                                <i class="fas fa-user-check"></i>  22ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3127</span>
                                <i class="fas fa-user-check"></i>  27ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i> ****
                            </a>
                            @include('modal.organograma.perfil_chefia')


                            <span style="width: 10px; display: inline-block;"></span>


                            <a class="btn btn-app bg-danger custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-warning">31</span>
                                <i class="fas fa-user-shield"></i>  SUP M6
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3124</span>
                                <i class="fas fa-user-check"></i>  24ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3106</span>
                                <i class="fas fa-user-check"></i>  06ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3110</span>
                                <i class="fas fa-user-check"></i>  10ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-success custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">3130</span>
                                <i class="fas fa-user-check"></i>  30ºBPM/M
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i> ****
                            </a>
                            @include('modal.organograma.perfil_chefia')
                            <a class="btn btn-app bg-light custom-btn modal-show" data-bpmm_id="1" data-toggle="modal" data-target="#modal-perfil">
                                <span class="badge bg-danger">****</span>
                                <i class="fas fa-spinner"></i> ****
                            </a>
                            @include('modal.organograma.perfil_chefia')


                            <!-- Adicione mais botões -->
                        </div>




                    <style>
                        /* styles.css */
                        .custom-btn {
                            margin-right: 2px;

                        }


                    </style>
                    <!-- Continue creating more buttons as needed -->
                </div>
            </div>
        </div>
        </div>
    </section>

    <div class="modal fade" id="modal-user-bpm">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-secondary">
                <div class="modal-header">
                    <h4 class="modal-title">BPM/M - editar </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="card-body">
Teste
                    </div>
                <!-- /.card-body -->
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-outline-light">Salvar</button>

                </div>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection

@section('js')
@endsection


