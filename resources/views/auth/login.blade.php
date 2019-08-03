<!doctype html>
<html lang="en" dir="ltr">

  <!-- En-tête -->
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />

    <title>ASFLA - Authentification</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="{{ asset('dist/tabler-gh-pages/assets/js/require.min.js') }}"></script>

    <script>
      requirejs.config({
          baseUrl: '.'
      });

    </script>
    <!-- Dashboard Core -->
    <link href="{{ asset('dist/tabler-gh-pages/assets/css/dashboard.css') }}" rel="stylesheet" />
    <script src="{{ asset('dist/tabler-gh-pages/assets/js/dashboard.js') }}"></script>

    <!-- c3.js Charts Plugin -->
    <link href="{{ asset('dist/tabler-gh-pages/assets/plugins/charts-c3/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('dist/tabler-gh-pages/assets/plugins/charts-c3/plugin.js') }}"></script>

    <!-- Google Maps Plugin -->
    <link href="{{ asset('dist/tabler-gh-pages/assets/plugins/maps-google/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('dist/tabler-gh-pages/assets/plugins/maps-google/plugin.js') }}"></script>

    <!-- Input Mask Plugin -->
    <script src="{{ asset('dist/tabler-gh-pages/assets/plugins/input-mask/plugin.js') }}"></script>

  </head>

  <body class="">
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <img src="./assets/brand/tabler.svg" class="h-6" alt="">
              </div>
              <form class="card" action="{{ route('login') }}" method="post">
                <div class="card-body p-6">
                  <div class="card-title">Identification</div>

                  <!-- Identifiant - adresse e-mail -->
                  <div class="form-group">
                    <label class="form-label">Adresse e-mail</label>
                    <input id="email" type="email" placeholder="Identifiant" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <!-- Mot de passe -->
                  <div class="form-group">
                    <label class="form-label">
                      Mot de passe
                      <a href="./forgot-password.html" class="float-right small">Mot de passe oublié</a>
                    </label>

                    <input id="password" type="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                  </div>

                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" />
                      <span class="custom-control-label">Se souvenir de moi</span>
                    </label>
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">
                Vous n'avez pas encore de compte ? <a href="./register.html">Créer un compte</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
