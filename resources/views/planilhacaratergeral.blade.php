@extends('adminlte::page')

@section('title', 'Veículos Criminosos')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Veículos Criminosos</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Veículos Criminosos</li>
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
                    {{Session('status')}}
                </div>
            @endif
            @if(Session('error'))
                <div class="bg-danger" style="padding: 20px;">
                    {{Session('error')}}
                </div>
            @endif
            @if(Session('message'))
                <div class="bg-success" style="padding: 20px;">
                    {{Session('message')}}
                </div>
            @endif
            </div>
        </div>
    </row>
@stop

<?php

?>
@section('content')

<style>
#example1 {
        padding-top: 1px;
        padding-bottom: 1px;
        line-height: 0.8;
    }
    </style>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-edit"></i>
                                Veículos Criminosos
                            </h3>
                        </div>
                        <div class="card-body">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Veículos Criminosos</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="example1" class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>PLACA</th>
                                                <th>MARCA</th>
                                                <th>MODELO</th>
                                                <th>COR</th>
                                                <th>CRIME</th>
                                                <th>BATALHÃO</th>
                                                <th>TEMPO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ABC-1234</td>
                                                <td>VOLKSWAGEN</td>
                                                <td>FUSCA</td>
                                                <td>AZUL</td>
                                                <td>ROUBO</td>
                                                <td>01ºBPM/M</td>
                                                <td>2023-07-17 02:59:48</td>
                                            </tr>
                                            <tr>
                                                <td>XYZ-9876</td>
                                                <td>Chevrolet</td>
                                                <td>Cruze</td>
                                                <td>Vermelho</td>
                                                <td>Roubo</td>
                                                <td>3ºBPM/M</td>
                                                <td>2023-07-19 10:30:45</td>
                                            </tr>
                                            <tr>
                                                <td>DEF-5678</td>
                                                <td>Honda</td>
                                                <td>Civic</td>
                                                <td>Branco</td>
                                                <td>Assalto</td>
                                                <td>8ºBPM/M</td>
                                                <td>2023-07-19 12:05:55</td>
                                            </tr>
                                            <tr>
                                                <td>GHI-2468</td>
                                                <td>Toyota</td>
                                                <td>Corolla</td>
                                                <td>Prata</td>
                                                <td>Sequestro</td>
                                                <td>12ºBPM/M</td>
                                                <td>2023-07-19 14:20:30</td>
                                            </tr>
                                            <tr>
                                                <td>MNO-1357</td>
                                                <td>Nissan</td>
                                                <td>Altima</td>
                                                <td>Preto</td>
                                                <td>Furto</td>
                                                <td>15ºBPM/M</td>
                                                <td>2023-07-19 16:45:12</td>
                                            </tr>
                                            <tr>
                                                <td>PQR-9753</td>
                                                <td>Hyundai</td>
                                                <td>Santa Fe</td>
                                                <td>Cinza</td>
                                                <td>Roubo</td>
                                                <td>20ºBPM/M</td>
                                                <td>2023-07-19 18:10:27</td>
                                            </tr>
                                            <tr>
                                                <td>JKL-6543</td>
                                                <td>Mercedes</td>
                                                <td>GLC</td>
                                                <td>Marrom</td>
                                                <td>Assalto</td>
                                                <td>23ºBPM/M</td>
                                                <td>2023-07-19 20:35:33</td>
                                            </tr>
                                            <tr>
                                                <td>STU-4321</td>
                                                <td>Audi</td>
                                                <td>A4</td>
                                                <td>Verde</td>
                                                <td>Sequestro</td>
                                                <td>28ºBPM/M</td>
                                                <td>2023-07-19 22:50:50</td>
                                            </tr>
                                            <tr>
                                                <td>VWX-7890</td>
                                                <td>BMW</td>
                                                <td>X5</td>
                                                <td>Amarelo</td>
                                                <td>Furto</td>
                                                <td>30ºBPM/M</td>
                                                <td>2023-07-20 01:15:15</td>
                                            </tr>
                                            <tr>
                                                <td>BBB-1111</td>
                                                <td>Fiat</td>
                                                <td>Punto</td>
                                                <td>Prata</td>
                                                <td>Roubo</td>
                                                <td>2ºBPM/M</td>
                                                <td>2023-07-20 03:40:40</td>
                                            </tr>
                                            <tr>
                                                <td>CCC-2222</td>
                                                <td>Renault</td>
                                                <td>Duster</td>
                                                <td>Azul</td>
                                                <td>Assalto</td>
                                                <td>4ºBPM/M</td>
                                                <td>2023-07-20 05:55:55</td>
                                            </tr>
                                            <tr>
                                                <td>DDD-3333</td>
                                                <td>Jeep</td>
                                                <td>Wrangler</td>
                                                <td>Preto</td>
                                                <td>Sequestro</td>
                                                <td>6ºBPM/M</td>
                                                <td>2023-07-20 08:20:20</td>
                                            </tr>
                                            <tr>
                                                <td>EEE-4444</td>
                                                <td>Subaru</td>
                                                <td>Impreza</td>
                                                <td>Vermelho</td>
                                                <td>Furto</td>
                                                <td>9ºBPM/M</td>
                                                <td>2023-07-20 10:45:45</td>
                                            </tr>
                                            <tr>
                                                <td>FFF-5555</td>
                                                <td>Volvo</td>
                                                <td>S60</td>
                                                <td>Branco</td>
                                                <td>Roubo</td>
                                                <td>11ºBPM/M</td>
                                                <td>2023-07-20 13:00:00</td>
                                            </tr>
                                            <tr>
                                                <td>GGG-6666</td>
                                                <td>Mazda</td>
                                                <td>MX-5</td>
                                                <td>Prata</td>
                                                <td>Assalto</td>
                                                <td>14ºBPM/M</td>
                                                <td>2023-07-20 15:25:22</td>
                                            </tr>
                                            <tr>
                                                <td>HHH-7777</td>
                                                <td>Citroen</td>
                                                <td>C4</td>
                                                <td>Amarelo</td>
                                                <td>Sequestro</td>
                                                <td>17ºBPM/M</td>
                                                <td>2023-07-20 17:50:36</td>
                                            </tr>
                                            <tr>
                                                <td>III-8888</td>
                                                <td>Kia</td>
                                                <td>Sorento</td>
                                                <td>Cinza</td>
                                                <td>Furto</td>
                                                <td>19ºBPM/M</td>
                                                <td>2023-07-20 20:15:48</td>
                                            </tr>
                                            <tr>
                                                <td>JJJ-9999</td>
                                                <td>Jaguar</td>
                                                <td>F-PACE</td>
                                                <td>Verde</td>
                                                <td>Roubo</td>
                                                <td>21ºBPM/M</td>
                                                <td>2023-07-20 22:40:53</td>
                                            </tr>
                                            <tr>
                                                <td>KKK-0000</td>
                                                <td>Lexus</td>
                                                <td>IS</td>
                                                <td>Marrom</td>
                                                <td>Assalto</td>
                                                <td>24ºBPM/M</td>
                                                <td>2023-07-21 01:05:59</td>
                                            </tr>
                                            <tr>
                                                <td>LLL-1122</td>
                                                <td>Infiniti</td>
                                                <td>Q50</td>
                                                <td>Vermelho</td>
                                                <td>Sequestro</td>
                                                <td>26ºBPM/M</td>
                                                <td>2023-07-21 03:30:10</td>
                                            </tr>
                                            <tr>
                                                <td>MMM-3344</td>
                                                <td>Acura</td>
                                                <td>TLX</td>
                                                <td>Preto</td>
                                                <td>Furto</td>
                                                <td>29ºBPM/M</td>
                                                <td>2023-07-21 05:55:18</td>
                                            </tr>
                                            <tr>
                                                <td>NNN-5566</td>
                                                <td>Bentley</td>
                                                <td>Continental</td>
                                                <td>Branco</td>
                                                <td>Roubo</td>
                                                <td>31ºBPM/M</td>
                                                <td>2023-07-21 08:20:22</td>
                                            </tr>
                                            <tr>
                                                <td>OOO-7788</td>
                                                <td>Chrysler</td>
                                                <td>300C</td>
                                                <td>Prata</td>
                                                <td>Assalto</td>
                                                <td>5ºBPM/M</td>
                                                <td>2023-07-21 10:45:30</td>
                                            </tr>
                                            <tr>
                                                <td>PPP-9900</td>
                                                <td>Hummer</td>
                                                <td>H2</td>
                                                <td>Azul</td>
                                                <td>Sequestro</td>
                                                <td>7ºBPM/M</td>
                                                <td>2023-07-21 13:10:40</td>
                                            </tr>
                                            <tr>
                                                <td>QQQ-1234</td>
                                                <td>Land Rover</td>
                                                <td>Range Rover</td>
                                                <td>Vermelho</td>
                                                <td>Furto</td>
                                                <td>10ºBPM/M</td>
                                                <td>2023-07-21 15:35:55</td>
                                            </tr>
                                            <tr>
                                                <td>RRR-5678</td>
                                                <td>Maserati</td>
                                                <td>GranTurismo</td>
                                                <td>Amarelo</td>
                                                <td>Roubo</td>
                                                <td>13ºBPM/M</td>
                                                <td>2023-07-21 18:00:10</td>
                                            </tr>
                                            <tr>
                                                <td>SSS-9876</td>
                                                <td>Porsche</td>
                                                <td>911</td>
                                                <td>Verde</td>
                                                <td>Assalto</td>
                                                <td>16ºBPM/M</td>
                                                <td>2023-07-21 20:25:20</td>
                                            </tr>
                                            <tr>
                                                <td>TTT-2468</td>
                                                <td>Rolls-Royce</td>
                                                <td>Phantom</td>
                                                <td>Prata</td>
                                                <td>Sequestro</td>
                                                <td>18ºBPM/M</td>
                                                <td>2023-07-21 22:50:30</td>
                                            </tr>
                                            <tr>
                                                <td>UUU-1357</td>
                                                <td>Tesla</td>
                                                <td>Model S</td>
                                                <td>Cinza</td>
                                                <td>Furto</td>
                                                <td>22ºBPM/M</td>
                                                <td>2023-07-22 01:15:45</td>
                                            </tr>
                                            <tr>
                                                <td>VVV-7890</td>
                                                <td>Volkswagen</td>
                                                <td>Golf</td>
                                                <td>Preto</td>
                                                <td>Roubo</td>
                                                <td>25ºBPM/M</td>
                                                <td>2023-07-22 03:40:55</td>
                                            </tr>
                                            <tr>
                                                <td>WWW-1111</td>
                                                <td>Alfa Romeo</td>
                                                <td>Giulia</td>
                                                <td>Branco</td>
                                                <td>Assalto</td>
                                                <td>27ºBPM/M</td>
                                                <td>2023-07-22 06:05:58</td>
                                            </tr>
                                            <tr>
                                                <td>XXX-2222</td>
                                                <td>Bugatti</td>
                                                <td>Veyron</td>
                                                <td>Amarelo</td>
                                                <td>Sequestro</td>
                                                <td>30ºBPM/M</td>
                                                <td>2023-07-22 08:30:00</td>
                                            </tr>
                                            <tr>
                                                <td>ZZZ-9999</td>
                                                <td>BMW</td>
                                                <td>320I</td>
                                                <td>PRETA</td>
                                                <td>FURTO</td>
                                                <td>22ºBPM/M</td>
                                                <td>2023-07-17 04:55:48</td>
                                            </tr>
                                        </tbody>
                                    </table>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop
@section('js')
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "scrollInfinite": true, // Habilitar rolagem infinita
            "scrollY": "500px", // Altura da área de rolagem
            "scrollCollapse": true, // Colapsar quando não há registros suficientes para preencher a área de rolagem
            "paging": false, // Desabilitar paginação (porque estamos usando rolagem infinita)

            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            "colReorder": true // Habilitar a escolha de ordem por colunas
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        // Filtrar a tabela com base nos batalhões selecionados
        $('input[name="batalhoes[]"]').on('change', function () {
            var selectedBatalhoes = $('input[name="batalhoes[]"]:checked').map(function () {
                return this.value;
            }).get();

            $("#example1").DataTable().column(5).search(selectedBatalhoes.join('|'), true, false).draw();
        });
    });
</script>

@stop
