<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BINNEC</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div >
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        BIINEC
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->


                            <li><a href="{{ route('register') }}">Register</a></li>

                    </ul>
                </div>
            </div>
        </nav>



<div class="container">

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Logifwefwefwefwefewfwenddd</div>
              <div class="panel-body">

                      <form  action="/login" method="POST">
                        {{ csrf_field() }}
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="password">
                        <input type="submit" value="Entrar">
                      </form>
              </div>
        </div>
      </div>
    </div>






                                      {{-- <div class="row">
                                          <div class="col-md-8 col-md-offset-2">
                                              <div class="panel panel-default">
                                                  <div class="panel-heading">Login</div>
                                                  <div class="panel-body">
                                                      <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                                          {{ csrf_field() }}

                                                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                              <div class="col-md-6">
                                                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                                                  @if ($errors->has('email'))
                                                                      <span class="help-block">
                                                                          <strong>{{ $errors->first('email') }}</strong>
                                                                      </span>
                                                                  @endif
                                                              </div>
                                                          </div>

                                                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                              <label for="password" class="col-md-4 control-label">Password</label>

                                                              <div class="col-md-6">
                                                                  <input id="password" type="password" class="form-control" name="password" required>


                                                              </div>
                                                          </div>

                                                          <div class="form-group">
                                                              <div class="col-md-6 col-md-offset-4">
                                                                  <div class="checkbox">
                                                                      <label>
                                                                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                                      </label>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                          <div class="form-group">
                                                              <div class="col-md-8 col-md-offset-4">
                                                                  <button type="submit" class="btn btn-primary">
                                                                      Login
                                                                  </button>

                                                              </div>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div> --}}


                    </div>



    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
