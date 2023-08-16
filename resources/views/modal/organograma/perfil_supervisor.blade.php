<div class="modal fade" id="modal-perfil">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Usuário logado</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('') }}">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ url('img/copom_profile.png') }}" alt="Copom profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">152846 CB-PM LUANQUE DOS SANTOS</h3>

                                    <p class="text-muted text-center">Função: Despachador</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Ultimo Acesso:</b> <a class="float-right">13/08/2023 18:20</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Batalhão</b> <a class="float-right">49ºBPM/M</a>
                                        </li>
                                    </ul>

                                    <a href="#" class="btn btn-primary btn-block"><b>Supervisionar Cabine</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

            </div>
        </div>
    </div>
</div>
