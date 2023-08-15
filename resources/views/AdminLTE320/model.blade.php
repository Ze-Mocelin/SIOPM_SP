<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @section('meta')
  @show
  <title>{{env('APP_NAME')}}</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="adminlte230/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="adminlte230/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="adminlte230/dist/css/adminlte.min.css">
  @section('headscript')
  @show
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="adminlte230/dist/img/EscudoPMESP.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  @section('body')
  @show
</body>
<script src="adminlte230/plugins/jquery/jquery.min.js"></script>
<script src="adminlte230/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="adminlte230/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="adminlte230/dist/js/adminlte.js"></script>
<script src="adminlte230/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="adminlte230/plugins/raphael/raphael.min.js"></script>
<script src="adminlte230/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="adminlte230/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="adminlte230/plugins/chart.js/Chart.min.js"></script>
<script src="adminlte230/dist/js/demo.js"></script>
<script src="adminlte230/dist/js/pages/dashboard2.js"></script>
@section('footerscript')
@show
</html>
