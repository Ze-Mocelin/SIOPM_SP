@php
    $supervisao190 = App\Models\Ramais::where('tipo','=',2)->get();
    $supervisao193 = App\Models\Ramais::where('tipo','=',3)->get();
    $supervisaocivil = App\Models\Ramais::where('tipo','=',4)->get();
    $SOP190 = App\Models\Ramais::where('tipo','=',5)->get();
    $SOPBombeiro = App\Models\Ramais::where('tipo','=',6)->get();
    $Interprete = App\Models\Ramais::where('tipo','=',7)->get();
@endphp
<div class="modal fade" id="modal-ramaisprincipais">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">Ramais principais</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <span class="justify center text-center"><b>Supervisão 190</b></span><br>
                            @foreach ($supervisao190 as $s)
                                {{$s->nome}} |
                            @endforeach
                        </div>
                        <div class="col-md-2">
                            <span class="justify center text-center"><b>Supervisão 193</b></span><br>
                            @foreach ($supervisao193 as $s)
                                {{$s->nome}} |
                            @endforeach
                        </div>
                        <div class="col-md-2">
                            <span class="justify center text-center"><b>Supervisão cívil</b></span><br>
                            @foreach ($supervisaocivil as $s)
                                {{$s->nome}} |
                            @endforeach
                        </div>
                        <div class="col-md-2">
                            <span class="justify center text-center"><b>SOP 190</b></span><br>
                            @foreach ($SOP190 as $s)
                                {{$s->nome}} |
                            @endforeach
                        </div>
                        <div class="col-md-2">
                            <span class="justify center text-center"><b>SOP Bombeiro</b></span><br>
                            @foreach ($SOPBombeiro as $s)
                                {{$s->nome}} |
                            @endforeach
                        </div>
                        <div class="col-md-2">
                            <span class="justify center text-center"><b>Interprete</b></span><br>
                            @foreach ($Interprete as $s)
                                {{$s->nome}} |
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
