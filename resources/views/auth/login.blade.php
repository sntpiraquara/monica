@extends('marketing.skeleton')

@section('content')
  <body class="marketing register">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">

          <div class="signup-box">
            <div class="logo">
              <img src="/img/small-logo-black.png" alt="">
            </div>

            @include ('partials.errors')

            <form class="" action="/login" method="post">
              {{ csrf_field() }}

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
              </div>

              <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>

              <div class="form-group actions">
                <button type="submit" class="btn btn-primary">Entrar</button>
              </div>

              <div class="checkbox">
                <label for="remember">
                  <input type="checkbox" name="remember" id="remember" checked> Lembrar meus dados
                </label>
              </div>

              <div class="form-group links">
                <ul>
                  <li>Esqueceu sua senha? <a href="/password/reset">Resetar sua senha</a></li>
                  @if(config('monica.disable_signup') == false)
                    <li>Não tem uma conta? <a href="/register">Cadastre-se</a></li>
                  @endif
                </ul>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
@endsection
