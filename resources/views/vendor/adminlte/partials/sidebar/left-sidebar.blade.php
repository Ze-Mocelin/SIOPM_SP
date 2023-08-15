@if(Auth::user()->nivel=="Administrador_master" || Auth::user()->nivel=="Chefia")
    @include('theme.menu_completo')
@else
    @include('theme.menu_nivel')
@endif
