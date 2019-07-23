<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>ASFLA - Authentification</title>

    <!-- Icons-->
    <link href="{{ asset('dist/coreui/src/icons/css/coreui-icons.min.css') }}" rel="stylesheet">
    <!--<link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">-->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">-->
    <!--<link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">-->

    <!-- Main styles for this application-->
    <link href="{{ asset('dist/coreui/src/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/coreui/src/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>

    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">

              <form method="POST" action="{{ route('login') }}">

                <div class="card-body">
                  <h1>Identification</h1>
                  <p class="text-muted">Connectez vous avec votre compte</p>

                  <!-- Identifiant -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input id="email" type="email" placeholder="Identifiant" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                  </div>

                  <!-- Mot de passe -->
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                      </span>
                    </div>
                    <input id="password" type="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                  </div>

                </form>

                <!-- Contrôles -->
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit">Se connecter</button>
                  </div>
                  <div class="col-6 text-right">
                    <button class="btn btn-link px-0" type="button">Mot de passe oublié?</button>
                  </div>
                </div>
              </div>

            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Inscription</h2>
                  <p>Créez un compte et rejoignez l'association des sages-femmes libérales d'Alsace.</p>
                  <button class="btn btn-primary active mt-3" type="button">S'inscrire!</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>

    <script src="https://kit.fontawesome.com/f8c70863ce.js"></script>

  </body>
</html>
