<!doctype html>
<html lang="en" dir="ltr">
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
    <link rel="icon" href="{{ asset('dist/tabler-gh-pages/favicon.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />

    <!-- Titre de la page -->
    <title>ASFLA - Association des Sage-Femmes Libérales d'Alsace</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">


    <link href="{{ asset('dist/fullcalendar/packages/core/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/fullcalendar/packages/daygrid/main.css') }}" rel="stylesheet" />


  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">

              <!-- Affichage du logo -->
              <a class="header-brand" href="{{ route('welcome') }}">
                <!--<img src="{{ asset('dist/tabler-gh-pages/demo/brand/tabler.svg') }}" class="header-brand-img" alt="tabler logo">-->
                ASFLA
              </a>

              <div class="d-flex order-lg-2 ml-auto">

                <div class="dropdown d-none d-md-flex">

                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
                      <div>
                        <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                        <div class="small text-muted">10 minutes ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
                      <div>
                        <strong>Alice</strong> started new task: Tabler UI design.
                        <div class="small text-muted">1 hour ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
                      <div>
                        <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                        <div class="small text-muted">2 hours ago</div>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                  </div>
                </div>
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(/asfla/public/img/profile/jedynak.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Caroline JEDYNAK</span>
                      <small class="text-muted d-block mt-1">Administrateur</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-user"></i> Profile
                    </a>
                    <!--<a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-settings"></i> Settings
                    </a>-->
                    <!--<a class="dropdown-item" href="#">
                      <span class="float-right"><span class="badge badge-primary">6</span></span>
                      <i class="dropdown-icon fe fe-mail"></i> Inbox
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-send"></i> Message
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                    </a>-->
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-log-out"></i> Se déconnecter
                    </a>
                  </div>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">

              <!-- Formulaire de recherche - /!\ Pour le moment pas activé -->
              <!--
              <div class="col-lg-3 ml-auto">
                <form class="input-icon my-3 my-lg-0">
                  <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                  <div class="input-icon-addon">
                    <i class="fe fe-search"></i>
                  </div>
                </form>
              </div>
              -->
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">

                  <!-- Retour à la page d'accueil -->
                  <li class="nav-item">
                    <a href="{{ route('welcome') }}" class="nav-link @yield('page-lien-welcome-active')"><i class="fe fe-home"></i> Accueil</a>
                  </li>

                  <!-- Agenda -->
                  <li class="nav-item">
                    <a href="{{ route('agenda.index') }}" class="nav-link @yield('page-lien-agenda-active')"><i class="fe fe-calendar"></i> Agenda</a>
                  </li>

                  <!-- Documents -->
                  <li class="nav-item">
                    <a href="{{ route('document.index') }}" class="nav-link @yield('page-lien-document-active')"><i class="fe fe-file"></i> Documents</a>
                  </li>

                  <!-- Gestion des membres -->
                  <li class="nav-item">
                    <a href="{{ route('membre.index') }}" class="nav-link @yield('page-lien-membre-active')"><i class="fe fe-users"></i> Membres</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="container">

            <div class="page-header">
              <h1 class="page-title">
                @yield('page-titre')
              </h1>
            </div>

            @yield('page-contenu')

      </div>

      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item"><a href="./docs/index.html">Aide en ligne</a></li>
                    <li class="list-inline-item"><a href="./faq.html">Mentions légales</a></li>
                  </ul>
                </div>
                <!--
                  <div class="col-auto">
                    <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source code</a>
                  </div>
                -->
              </div>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2019 <a href=".">Association des Sages Femmes Libérables d'Alsace</a>
            </div>
          </div>
        </div>
      </footer>
    </div>

    @yield('javascript')

  </body>
</html>
