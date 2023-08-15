@extends('adminlte::page')

@section('title', 'Quick shortcuts ADMIN')

@section('content_header')
    <!-- Content header here -->
@stop

@section('content')

@if(Auth::user()->nivel == 'Administrador_master' || Auth::user()->nivel == 'Chefia')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="glyphicon glyphicon-bookmark"></span>Atendente</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">
                                            <a href="{{url('cadastro190')}}" class="btn btn-danger btn-lg btn-block btn-disabled" role="button"><span class="fa fa-user"></span> <br />Cadastro de ocorrência</a>
                                            <a href="#" class="btn btn-warning btn-lg btn-block btn-disabled" role="button"><span class="fa fa-magnifying-glass"></span> <br />Pesquisar Ocorrências</a>
                                        </div>
                                        <div class="col-xs-6 col-md-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="glyphicon glyphicon-bookmark"></span>Despachador</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">
                                            <a href="{{url('despachador')}}" class="btn btn-danger btn-lg btn-block btn-disabled" role="button"><span class="fa fa-headset"></span> <br />Cabine batalhão</a>
                                            <a href="{{url('veiculocrime')}}" class="btn btn-warning btn-lg btn-block btn-disabled" role="button"><span class="fa fa-table"></span> <br />Planilha de carater geral</a>
                                            <a href="{{url('veiculocrimepersonalizada')}}" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-table-list"></span> <br />Planilha Personalizada</a>
                                            <a href="{{url('cadastro/despachador')}}" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-user"></span> <br />Gerar Ocorrência</a>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <a href="#" class="btn btn-success btn-lg btn-block btn-disabled" role="button"><span class="fa fa-search"></span> <br />Pesquisar Ocorrências</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="glyphicon glyphicon-bookmark"></span>Supervisor</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">
                                            <a href="#" class="btn btn-danger btn-lg btn-block btn-disabled" role="button"><span class="fa fa-shield-alt"></span> <br />Supervisão 190</a>
                                            <a href="#" class="btn btn-warning btn-lg btn-block btn-disabled" role="button"><span class="fa fa-eye"></span> <br />Verificar Ocorrências</a>
                                            <a href="{{url('supervisor190/estatistica')}}" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-chart-column"></span> <br />Estatisticas</a>
                                            <a href="{{url('despachador')}}" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-headset"></span> <br />Ocorrências CAD</a>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <a href="{{url('usuarios/logados')}}" class="btn btn-success btn-lg btn-block btn-disabled" role="button"><span class="fa fa-users-between-lines"></span> <br />Usuários Logados</a>
                                            <a href="#" class="btn btn-info btn-lg btn-block btn-disabled" role="button"><span class="fa fa-user-tie"></span> <br />Supervisão CPA</a>
                                            <a href="#" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-user-shield"></span> <br />Supervisionar CPA</a>
                                            <a href="#" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-infinity"></span> <br />Unir CPA</a>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <a href="#" class="btn btn-danger btn-lg btn-block btn-disabled" role="button"><span class="fa fa-check"></span> <br />Gerenciar BPM/M</a>
                                            <a href="#" class="btn btn-warning btn-lg btn-block btn-disabled" role="button"><span class="fa fa-check-double"></span> <br />Unir Batalhões</a>
                                            <a href="{{url('cpa/estatistica')}}" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-chart-line"></span> <br />Estatistica CPA</a>
                                            <a href="{{url('usuarios/logados')}}" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-users-viewfinder"></span> <br />Usuários Logados</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="glyphicon glyphicon-bookmark"></span>STQ</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">
                                            <a href="{{url('cidades')}}" class="btn btn-danger btn-lg btn-block btn-disabled" role="button"><span class="fa fa-city"></span> <br />Gerenciar Cidades</a>
                                            <a href="{{url('bpmm')}}" class="btn btn-warning btn-lg btn-block btn-disabled" role="button"><span class="fa fa-check"></span> <br />Gerenciar BPM/M</a>
                                            <a href="{{url('ramal')}}" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-check-to-slot"></span> <br />Gerenciar P.A</a>
                                            <a href="{{url('naturezaocorrencia')}}" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-clipboard-check"></span> <br />Gerenciar Natureza</a>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <a href="{{url('naturezaocorrenciaperguntas')}}" class="btn btn-success btn-lg btn-block btn-disabled" role="button"><span class="fa fa-list-check"></span> <br />Gerenciar perguntas</a>
                                            <a href="{{ url('gerenciarcpa') }}" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-file-circle"></span> <br />Gerenciar CPA</a>
                                            <a href="{{ url('publications') }}" class="btn btn-info btn-lg btn-block btn-disabled" role="button"><span class="fa fa-file-lines"></span> <br />Gerenciar Instruções</a>
                                            <a href="{{ url('/publications_instrucoes_cadastro_ocorrencias') }}" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-file"></span> <br />Instruções Cadastro</a>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <a href="{{ url('/publications_instrucoes_sistema_civil') }}" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-file-shield"></span> <br />Instruções Sistema cívil</a>
                                            <a href="{{ url('/publications_instrucoes_sistema') }}" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-file-shield"></span> <br />Instruções Sistema</a>
                                            <a href="{{ url('/publications_instrucoes_icc') }}" class="btn btn-warning btn-lg btn-block btn-disabled" role="button"><span class="fa fa-file-lines"></span> <br />Instruções ICC</a>
                                            <a href="{{ url('/publications_instrucoes_ordem_servico') }}" class="btn btn-danger btn-lg btn-block btn-disabled" role="button"><span class="fa fa-file-invoice"></span> <br />Ordem de Serviço</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="glyphicon glyphicon-bookmark"></span>Técnica</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">
                                            <a href="{{url('usuarios')}}" class="btn btn-danger btn-lg btn-block btn-disabled" role="button"><span class="fa fa-user"></span> <br />Gerenciar Usuários</a>
                                            <a href="#" class="btn btn-warning btn-lg btn-block btn-disabled" role="button"><span class="fa fa-user-minus"></span> <br />Usuários Deletados</a>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="glyphicon glyphicon-bookmark"></span>Certidões</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">
                                            <a href="#" class="btn btn-danger btn-lg btn-block btn-disabled" role="button"><span class="fa fa-eye"></span> <br />Verificar Ocorrências</a>
                                            <a href="#" class="btn btn-warning btn-lg btn-block btn-disabled" role="button"><span class="fa fa-delete-left"></span> <br />Deletar Ocorrências</a>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="glyphicon glyphicon-bookmark"></span>Chefia</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">
                                            <a href="{{url('chefia/estatistica')}}" class="btn btn-danger btn-lg btn-block btn-disabled" role="button"><span class="fa fa-chart-pie"></span> <br />Estatísticas de ocorrências</a>
                                            <a href="#" class="btn btn-warning btn-lg btn-block btn-disabled" role="button"><span class="far fa-building"></span> <br />Selecionar Batalhão</a>
                                            <a href="#" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-users"></span> <br />Usuários Logados</a>
                                            <a href="#" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-eye"></span> <br />Verificar ocorrências</a>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <a href="#" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-circle"></span> <br />Total de cadastro</a>
                                            <a href="#" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-plus"></span> <br />Total de Pendências</a>
                                            <a href="#" class="btn btn-primary btn-lg btn-block btn-disabled" role="button"><span class="fa fa-minus"></span> <br />Total de encerramentos</a>

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
@else
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Usuário sem acesso!</p>
                </div>
            </div>
        </div>
    </div>
@endif
@stop
@section('css')
<style>
.btn-disabled {

    }

    /* Estilos para tornar o botão com link redondo */
    .btn-round {
        background-color: #007bff; /* Cor azul para realçar */
        color: #fff; /* Texto em branco para melhor contraste */
        /* Ajuste o tamanho da fonte conforme necessário */
        display: flex;
        align-items: center;
        justify-content: center;
        display: none;
    }
</style>
@stop
@section('js')
<script>
    // Adicionando estilos específicos aos links com href="#"
    document.addEventListener("DOMContentLoaded", function () {
        const links = document.querySelectorAll('a[href="#"]');
        for (const link of links) {
            link.classList.add("btn-round");
        }
    });
</script>
@stop
