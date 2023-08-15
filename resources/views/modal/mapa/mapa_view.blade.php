<div class="modal fade" id="modal-viewmap-{{$m->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Mapa - visualizar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map" style="height: 500px;"></div>

    <script>
        // Função de inicialização do mapa
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12, // Defina o nível de zoom adequado
                center: {lat: -33.865143, lng: 151.209900} // Coordenadas de centro do mapa
            });

            // Camada KML
            var kmlLayer = new google.maps.KmlLayer({
                url: "{{ $kmlPath }}",
                map: map
            });
        }
    </script>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>

            </div>
        </div>
    </div>
</div>
