@extends('AdminLTE320.model')
@section('body')
<!-- <div class="hold-transition login-page"> -->
<div class="hold-transition text-center" style="-webkit-align-items:center;-ms-flex-align:center;align-items:center;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;height:100vh;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center">
    <div class="login-box hold-transition">
      <div class="login-logo">
        <a href="/"><b>{{config('app.name')}}</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Inicie sua Sessão</p>
    
          <form action="../../index3.html" method="post">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Usuário">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Senha">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Lembrar-me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
          <p class="mb-1">
            <a href="forgot-password.html">ESqueceu a senha?</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
</div>
@endsection