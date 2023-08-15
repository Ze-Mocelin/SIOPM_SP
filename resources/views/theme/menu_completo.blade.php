<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/home2') }}" class="brand-link ">
        <img src="{{ url('/vendor/adminlte/dist/img/PMESP.png') }}" alt="Admin Logo"
            class="brand-image img-circle elevation-3" style="opacity:.8">
        <span class="brand-text font-weight-light ">
            <b>SIOPM</b> off
        </span>
    </a>
    <a href="{{ url('/home') }}" class="brand-link ">
        <span class="brand-text font-weight-light align-center text-center">
            <b>{{ Auth::user()->nivel }}</b>
        </span>
    </a>
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu">
                <li>
                    <div class="form-inline my-2">
                        <div class="input-group" data-widget="sidebar-search" data-arrow-sign="»">
                            <input class="form-control form-control-sidebar" type="search" placeholder="search"
                                aria-label="search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-fw fa-search"></i>
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
                    <a class="nav-link  " href="#">
                        <i class="fa fa-user "style="margin-right: 5px;"></i>
                        <p>
                            Enviar Mensagem
                            <span class="badge badge-success right">
                                4
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{ url('admin_quick_shortcuts') }}">
                        <i class="fa fa-gear " style="margin-right: 5px;"></i>
                        <p>
                            Configurações
                        </p>
                    </a>
                </li>

                <li class="nav-header ">
                    MENU
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link  " href="">
                        <i class="fa-solid fa-phone-volume" style="margin-right: 5px;"></i>
                        <p>
                            Atendente
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('cadastro190') }}">
                                <i class="fa-solid fa-file-lines " style="margin-right: 5px;"></i>
                                <p>
                                    Cadastro de Ocorrências
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa-brands fa-searchengin" style="margin-right: 5px;"></i>
                                <p>
                                    Pesquisar Ocorrências
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link  " href="">
                        <i class="fa-solid fa-headset" style="margin-right: 5px;"></i>
                        <p>
                            Despachador
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('despachador') }}">
                                <i class="fa-solid fa-building-shield" style="margin-right: 5px;"></i>
                                <p>
                                    Cabine batalhão
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('veiculocrime') }}">
                                <i class="fa-solid fa-table-list" style="margin-right: 5px;"></i>
                                <p>
                                    Planilha de carater geral
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('veiculocrimepersonalizada') }}">
                                <i class="fa-solid fa-table-list" style="margin-right: 5px;"></i>
                                <p>
                                    Planilha Personalizada
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('cadastro/despachador') }}">
                                <i class="fa-solid fa-square-plus" style="margin-right: 5px;"></i>
                                <p>
                                    Gerar Ocorrência
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa-brands fa-searchengin" style="margin-right: 5px;"></i>
                                <p>
                                    Pesquisar Ocorrências
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link  " href="">
                        <i class="fa-solid fa-users-line" style="margin-right: 5px;"></i>
                        <p>
                            Supervisão
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview ">
                            <a class="nav-link  " href="">
                                <i class="fa-solid fa-user-shield" style="margin-right: 5px;"></i>
                                <p>
                                    Supervisão 190
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa-solid fa-list-check" style="margin-right: 5px;"></i>
                                        <p>
                                            Verificar Ocorrências
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{ url('supervisor190/estatistica') }}">
                                        <i class="fa-solid fa-chart-pie" style="margin-right: 5px;"></i>
                                        <p>
                                            Estatisticas 190
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{ url('despachador') }}">
                                        <i class="fa-solid fa-street-view" style="margin-right: 5px;"></i>
                                        <p>
                                            Ocorrências CAD
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{ url('usuarios/logados') }}">
                                        <i class="fa-solid fa-building-user" style="margin-right: 5px;"></i>
                                        <p>
                                            Usuários Logados
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{ url('supervisor/organograma190') }}">
                                        <i class="fa-solid fa-building-user" style="margin-right: 5px;"></i>
                                        <p>
                                            Organograma 190
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{ url('chefia/organograma_despacho') }}">
                                        <i class="fa-solid fa-building-user" style="margin-right: 5px;"></i>
                                        <p>
                                            Organograma Despacho
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a class="nav-link  " href="">
                                <i class="fa-solid fa-user-shield" style="margin-right: 5px;"></i>
                                <p>
                                    Supervisão CPA
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa-solid fa-list-check" style="margin-right: 5px;"></i>
                                        <p>
                                            Verificar Ocorrências
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa fa-user-shield" style="margin-right: 5px;"></i>
                                        <p>
                                            Supervisionar CPA
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa-solid fa-arrows-to-circle"></i>
                                        <p>
                                            Unir CPA
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                        <i class="fa-solid fa-arrows-to-dot" style="margin-right: 5px;"></i>
                                        <p>
                                            Gerenciar BPM/M
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">
                                    <i class="fa-solid fa-arrows-to-circle" style="margin-right: 5px;"></i>
                                        <p>
                                            Unir Batalhões
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{ url('cpa/estatistica') }}">
                                        <i class="fa-solid fa-chart-pie" style="margin-right: 5px;"></i>
                                        <p>
                                            Estatistica CPA
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{ url('usuarios/logados') }}">
                                        <i class="fa-solid fa-building-user" style="margin-right: 5px;"></i>
                                        <p>
                                            Usuários Logados
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{ url('chefia/organograma_despacho') }}">
                                        <i class="fa-solid fa-building-user" style="margin-right: 5px;"></i>
                                        <p>
                                            Organograma Despacho
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{ url('supervisor/organograma190') }}">
                                        <i class="fa-solid fa-building-user" style="margin-right: 5px;"></i>
                                        <p>
                                            Organograma 190
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link  " href="">
                        <i class="fa-regular fa-address-card" style="margin-right: 5px;"></i>
                        <p>
                            STQ
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('cidades') }}">
                                <i class="fa fa-city" style="margin-right: 5px;"></i>
                                <p>
                                    Gerenciar Cidades
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('bpmm') }}">
                                <i class="fa fa-check" style="margin-right: 5px;"></i>
                                <p>
                                    Gerenciar BPM/M
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('ramal') }}">
                                <i class="fa-solid fa-sitemap" style="margin-right: 5px;"></i>
                                <p>
                                    Gerenciar P.A
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('naturezaocorrencia') }}">
                                <i class="fa-solid fa-bars-progress" style="margin-right: 5px;"></i>
                                <p>
                                    Gerenciar Natureza
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('naturezaocorrenciaperguntas') }}">
                                <i class="fa-solid fa-file-circle-question" style="margin-right: 5px;"></i>
                                <p>
                                    Gerenciar perguntas
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('gerenciarcpa') }}">
                                <i class="fa-solid fa-route" style="margin-right: 5px;"></i>
                                <p>
                                    Gerenciar CPA
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('/publications') }}">
                                <i class="fa-solid fa-chalkboard-user" style="margin-right: 5px;"></i>
                                <p>
                                    Gerenciar Instruções
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link  " href="">
                        <i class="fa-solid fa-file-signature" style="margin-right: 5px;"></i>
                        <p>
                            Certidões
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-eye" style="margin-right: 5px;"></i>
                                <p>
                                    Verificar Ocorrências
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-delete-left" style="margin-right: 5px;"></i>
                                <p>
                                    Deletar Ocorrências
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link  " href="">
                        <i class="fa-solid fa-sliders" style="margin-right: 5px;"></i>
                        <p>
                            Tecnica
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('usuarios') }}">
                                <i class="fa-solid fa-user-plus" style="margin-right: 5px;"></i>
                                <p>
                                    Gerenciar Usuários
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-user-minus" style="margin-right: 5px;"></i>
                                <p>
                                    Usuários Deletados
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link  " href="">
                        <i class="fa-solid fa-ranking-star" style="margin-right: 5px;"></i>
                        <p>
                            Chefia
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('chefia/estatistica') }}">
                                <i class="fa-solid fa-chart-pie" style="margin-right: 5px;"></i>
                                <p>
                                    Estatiticas de ocorrências
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa-solid fa-building-circle-arrow-right" style="margin-right: 5px;"></i>
                                <p>
                                    Selecionar Batalhão
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('chefia/logados') }}">
                                <i class="fa-solid fa-building-user" style="margin-right: 5px;"></i>
                                <p>
                                    Usuarios Logados
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa fa-eye" style="margin-right: 5px;"></i>
                                <p>
                                    Verificar Ocorrências
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('chefia/organograma_despacho') }}">
                                <i class="fa-solid fa-building-circle-arrow-right" style="margin-right: 5px;"></i>
                                <p>
                                    Organograma Despacho
                                </p>
                            </a>
                            <li class="nav-item">
                                <a class="nav-link  " href="{{ url('supervisor/organograma190') }}">
                                    <i class="fa-solid fa-building-circle-arrow-right" style="margin-right: 5px;"></i>
                                    <p>
                                        Organograma 190
                                    </p>
                                </a>
                            </li>
                        </li>
                    </ul>
                </li>
                <li class="nav-header ">
                    Mapas
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link  " href="">
                        <i class="fa-solid fa-map-location-dot" style="margin-right: 5px;"></i>
                        <p>
                            Mapas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link  "
                                href="https://www.google.com/maps/d/viewer?mid=1IZQYhjM25zcrjnTEByfibpcDAE59r9o&amp;g_ep=CAESCTExLjY2LjYwMhgAQgJCUg%3D%3D&amp;shorturl=1&amp;ll=-22.95684582348968%2C-48.667755531401504&amp;z=6"
                                target="_blank">
                                <i class="fa-solid fa-earth-americas" style="margin-right: 5px;"></i>
                                <p>
                                    Mapa Copom
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link  "
                                href="https://www.google.com/maps/@-23.5580176,-46.758828,10z?entry=ttu"
                                target="_blank">

                                <i class="fa-solid fa-map-location-dot" style="margin-right: 5px;"></i>
                                <p>
                                    Google Maps
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  "
                                href="https://www.openstreetmap.org/#map=14/-23.5387/-46.6425"
                                target="_blank">

                                <i class="fa-solid fa-road" style="margin-right: 5px;"></i>
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
                <li class="nav-item has-treeview ">
                    <a class="nav-link  " href="">
                        <i class="fa-solid fa-folder-open" style="margin-right: 5px;"></i>
                        <p>
                            Intruções 190
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('/publications_instrucoes_sistema_civil') }}">
                                <i class="fa-regular fa-paste" style="margin-right: 5px;"></i>
                                <p>
                                    Sistema
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('/publications_instrucoes_cadastro_ocorrencias') }}">
                                <i class="fa-solid fa-paste" style="margin-right: 5px;"></i>
                                <p>
                                    Instruções 190
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview ">
                    <a class="nav-link  " href="">
                    <i class="fa-solid fa-address-book" style="margin-right: 5px;"></i>
                        <p>
                            Intruções Especificas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('/publications_instrucoes_sistema') }}">
                                <i class="fa-solid fa-list-check" style="margin-right: 5px;"></i>
                                <p>
                                    Sistema
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  " href="{{ url('/publications_instrucoes_ordem_servico') }}">
                                <i class="fa-regular fa-rectangle-list" style="margin-right: 5px;"></i>
                                <p>
                                    Ordens de Serviço
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link  " href="{{ url('/publications_instrucoes_icc') }}">
                                <i class="fa-solid fa-rectangle-list" style="margin-right: 5px;"></i>
                                <p>
                                    Instruções ICC
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>


                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link  " href="">
                        <i class="fa-solid fa-gears" style="margin-right: 5px;"></i>
                        <p>
                            Configurações
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link  " href="#">
                                <i class="fa-solid fa-key" style="margin-right: 5px;"></i>
                                <p>
                                    Alterar Senha
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
