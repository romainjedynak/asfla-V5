<!-- Import du template -->
@extends('layouts.app')

@section('page-lien-welcome-active')
active
@endsection

<!-- Titre de la page -->
@section('page-titre')
Nouveautés/informations
@endsection

<!-- Contenu de la page -->
@section('page-contenu')

<div class="row row-cards row-deck">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <a href="#"><img class="card-img-top" src="/asfla/public/img/articles/cigogne.jpg" alt="Ouverture du site Web"></a>
      <div class="card-body d-flex flex-column">
        <h4><a href="#">Ouverture du site Web</a></h4>
        <div class="text-muted">Le nouveau Site Web est ouvert ! Vous y trouverez tous les services dont vous avez besoin pour pratiquer votre profession dans la région</div>
        <div class="d-flex align-items-center pt-5 mt-auto">
          <div class="avatar avatar-md mr-3" style="background-image: url(/asfla/public/img/profile/jedynak.jpg)"></div>
          <div>
            <a href="./profile.html" class="text-default">Caroline JEDYNAK</a>
            <small class="d-block text-muted">Il y a 3 jours</small>
          </div>
          <!--
            <div class="ml-auto text-muted">
              <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
            </div>
          -->
        </div>
      </div>
    </div>
  </div>

</div>
</div>

@endsection
