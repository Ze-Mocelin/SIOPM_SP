<div class="modal fade" id="modal-view-{{$publication->id}}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Informações</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                @if ($publication->file_type === 'pdf')
                    <!-- Exibir o conteúdo do arquivo PDF -->
                    <iframe src="{{ asset('informacoes/' . $publication->folder . '/' . $publication->file_path) }}" width="100%" height="450px" style="border: none;"></iframe>
                @else
                    <!-- Exibir a imagem para arquivos JPG -->
                    <img src="{{ asset('informacoes/' . $publication->folder . '/' . $publication->file_path) }}" alt="Imagem" style="max-width: 100px;">
                @endif
                </div>
            <!-- /.card-body -->
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
