<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{url('/home2')}}" class="brand-link ">
        <img src="{{url('/vendor/adminlte/dist/img/PMESP.png')}}" alt="PMESP Logo"
            class="brand-image img-circle elevation-3" style="opacity:.8">
        <span class="brand-text font-weight-light ">
            <b>SIOPM</b> off
        </span>
    </a>
    <a href="{{url('/home')}}" class="brand-link ">
        <span class="brand-text font-weight-light align-center text-center">
            <b>{{Auth::user()->nivel}}</b>
        </span>
    </a>
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu"
                data-animation-speed="400">
                <li>
                    <div class="form-inline my-2">
                        <div class="input-group" data-widget="sidebar-search" data-arrow-sign="»">
                            <input class="form-control form-control-sidebar" type="search" placeholder="search"
                                aria-label="search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="sidebar-search-results">
                            <div class="list-group"><a href="#" class="list-group-item">
                                    <div class="search-title"><strong class="text-light"></strong>N<strong
                                            class="text-light"></strong>o<strong class="text-light"></strong> <strong
                                            class="text-light"></strong>e<strong class="text-light"></strong>l<strong
                                            class="text-light"></strong>e<strong class="text-light"></strong>m<strong
                                            class="text-light"></strong>e<strong class="text-light"></strong>n<strong
                                            class="text-light"></strong>t<strong class="text-light"></strong> <strong
                                            class="text-light"></strong>f<strong class="text-light"></strong>o<strong
                                            class="text-light"></strong>u<strong class="text-light"></strong>n<strong
                                            class="text-light"></strong>d<strong class="text-light"></strong>!<strong
                                            class="text-light"></strong></div>
                                    <div class="search-path"></div>
                                </a></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{url('/ocorrencia/cadastro')}}">
                        <i class="fa fa-file "></i>
                        <p>
                            AVISOS
                            <span class="badge badge-success right">
                                4
                            </span>
                        </p>
                    </a>
                </li>

                @switch(Auth::user()->nivel)
                    @case ('Atendente')
                        <li class="nav-header ">
                            Atendente
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{url('cadastro190')}}">
                                <i class="fa fa-user "></i>
                                <p>
                                    Cadastro de ocorrência
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-magnifying-glass"></i>
                                <p>
                                    Pesquisar Ocorrências
                                </p>
                            </a>
                        </li>
                        @break
                    @case('Despachador')
                        <li class="nav-header ">
                            Despachador
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{url('despachador')}}">
                                <i class="fa fa-headset"></i>
                                <p>
                                    Cabine batalhão
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{url('veiculocrime')}}">
                                <i class="fa fa-table"></i>
                                <p>
                                    Planilha de carater geral
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{url('veiculocrimepersonalizada')}}">
                                <i class="fa fa-table-list"></i>
                                <p>
                                    Planilha Personalizada
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{url('cadastro/despachador')}}">
                                <i class="fa fa-user"></i>
                                <p>
                                    Gerar Ocorrência
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-search"></i>
                                <p>
                                    Pesquisar Ocorrências
                                </p>
                            </a>
                        </li>
                        @break
                    @case('Supervisor')
                        <li class="nav-header ">
                            Supervisão
                        </li>
                        <li class="nav-item has-treeview ">
                            <a class="nav-link  " href="">
                                <i class="fa fa-shield-alt"></i>
                                <p>
                                    Supervisão 190

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa fa-eye"></i>
                                        <p>
                                            Verificar Ocorrências
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  "
                                        href="{{url('supervisor190/estatistica')}}">
                                        <i class="fa fa-chart-column"></i>
                                        <p>
                                            Estatisticas
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{url('despachador')}}">
                                        <i class="fa fa-headset"></i>
                                        <p>
                                            Ocorrências CAD
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{url('usuarios/logados')}}">
                                        <i class="fa fa-users-between-lines"></i>
                                        <p>
                                            Usuários Logados
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-user-tie"></i>
                                <p>
                                    Supervisão CPA

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa fa-user-shield"></i>
                                        <p>
                                            Supervisionar CPA
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa fa-infinity"></i>
                                        <p>
                                            Unir CPA
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa fa-check"></i>
                                        <p>
                                            Gerenciar BPM/M
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa fa-check-double"></i>
                                        <p>
                                            Unir Batalhões
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{url('cpa/estatistica')}}">
                                        <i class="fa fa-chart-line"></i>
                                        <p>
                                            Estatistica CPA
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{url('usuarios/logados')}}">
                                        <i class="fa fa-users-viewfinder"></i>
                                        <p>
                                            Usuários Logados
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @break
                    @case('STQ')
                        <li class="nav-header ">
                            STQ
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{url('cidades')}}">
                                <i class="fa fa-city"></i>
                                <p>
                                    Gerenciar Cidades
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{url('bpmm')}}">
                                <i class="fa fa-check"></i>
                                <p>
                                    Gerenciar BPM/M
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{url('ramal')}}">
                                <i class="fa fa-check-to-slot"></i>
                                <p>
                                    Gerenciar P.A
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{url('naturezaocorrencia')}}">
                                <i class="fa fa-clipboard-check"></i>
                                <p>
                                    Gerenciar Natureza
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  "
                                href="{{url('naturezaocorrenciaperguntas')}}">
                                <i class="fa fa-list-check"></i>
                                <p>
                                    Gerenciar perguntas
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('gerenciarcpa') }}">
                                <i class="far fa-fw fa-circle "></i>
                                <p>
                                    Gerenciar CPA
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-file-lines"></i>
                                <p>
                                    Gerenciar Instruções

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa fa-file-shield"></i>
                                        <p>
                                            Instruções Sistema
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa fa-file"></i>
                                        <p>
                                            Instruções Cadastro
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa fa-file-invoice"></i>
                                        <p>
                                            Ordem de Serviço
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa fa-file-lines"></i>
                                        <p>
                                            Instruções ICC
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @break
                    @case('Certidoes')
                        <li class="nav-header ">
                            Certidões
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-eye"></i>
                                <p>
                                    Verificar Ocorrências
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-delete-left"></i>
                                <p>
                                    Deletar Ocorrências
                                </p>
                            </a>
                        </li>
                        @break
                    @case('Tecnica')
                        <li class="nav-header ">
                            Técnica
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{url('usuarios')}}">
                                <i class="fa fa-user"></i>
                                <p>
                                    Gerenciar Usuários
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-user-minus"></i>
                                <p>
                                    Usuários Deletados
                                </p>
                            </a>
                        </li>
                        @break
                    @case('Chefia')
                        <li class="nav-header ">
                            Chefia
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{url('chefia/estatistica')}}">
                                <i class="fa fa-chart-simple"></i>
                                <p>
                                    Estatiticas de ocorrências
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-building"></i>
                                <p>
                                    Selecionar Batalhão
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-users-viewfinder"></i>
                                <p>
                                    Usuarios Logados
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="far fa-fw fa-circle "></i>
                                <p>
                                    Verificar Ocorrências
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="far fa-fw fa-circle "></i>
                                <p>
                                    Total de Cadastro
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-plus "></i>
                                <p>
                                    Total de Pendências
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-minus "></i>
                                <p>
                                    Total Encerramento
                                </p>
                            </a>
                        </li>
                        @break
                    @case('Administrador_master')
                        <li class="nav-header ">
                            Administrador master
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{url('admin_quick_shortcuts')}}">
                                <i class="fa fa-gear"></i>
                                <p>
                                    Settings
                                </p>
                            </a>
                        </li>
                        @break
                    @default
                @endswitch

                <li class="nav-header ">
                    Mapas
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link  " href="">
                        <i class="fa fa-map "></i>
                        <p>
                            Mapas
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link  "
                                href="https://www.google.com/maps/d/viewer?mid=1IZQYhjM25zcrjnTEByfibpcDAE59r9o&amp;g_ep=CAESCTExLjY2LjYwMhgAQgJCUg%3D%3D&amp;shorturl=1&amp;ll=-22.95684582348968%2C-48.667755531401504&amp;z=6"
                                target="_blank">
                                <i class="fa fa-map"></i>
                                <p>
                                    Mapa Copom
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-location-pin"></i>
                                <p>
                                    Google Maps
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-location-dot"></i>
                                <p>
                                    Open Street Maps
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header ">
                    Instruções
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a class="nav-link active " href="{{ url('/publications_instrucoes_sistema_civil') }}">
                        <i class="fa fa-list "></i>
                        <p>
                            Instruções sistema

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a class="nav-link active " href="{{ url('/publications_instrucoes_cadastro_ocorrencias') }}">
                                <i class="fa fa-bars"></i>
                                <p>
                                    Intruções cadastro
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link active "
                                        href="{{url('publications')}}">
                                        <i class="fa fa-info"></i>
                                        <p>
                                            Gerenciar informações
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  "
                                        href="{{url('viewed-publications')}}">
                                        <i class="fa fa-circle-info"></i>
                                        <p>
                                            Informações visualizadas
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a class="nav-link  " href="">
                                <i class="fa fa-circle"></i>
                                <p>
                                    Instruções Especificas
                                </p>
                            </a>
                            <li class="nav-item">
                                <a class="nav-link  " href="{{ url('/publications_instrucoes_sistema') }}">
                                    <i class="fa fa-file-shield"></i>
                                    <p>
                                        Instruções sistema
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link  " href="{{ url('/publications_instrucoes_ordem_servico') }}">
                                    <i class="fa fa-file-invoice"></i>
                                    <p>
                                        Ordem de Serviço
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  " href="{{ url('/publications_instrucoes_icc') }}">
                                    <i class="fa fa-file-lines"></i>
                                    <p>
                                        Instruções ICC
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview ">
                                <a class="nav-link  " href="">
                                    <i class="fa fa-bolt "></i>
                                    <p>
                                        Configurações
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link  " href="{{url('perguntas')}}">
                                            <i class="fa fa-Questions"></i>
                                            <p>
                                                Pergunta
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </li>
                    </ul>
                </li>

            </ul>

        </nav>
    </div>
</aside>
