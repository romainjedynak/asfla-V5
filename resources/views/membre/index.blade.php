<!-- Import du template -->
@extends('layouts.app')

@section('page-lien-membre-active')
active
@endsection

<!-- Titre de la page -->
@section('page-titre')
Gestion des membres
@endsection

<!-- Contenu de la page -->
@section('page-contenu')

<div class="row row-cards row-deck">
  <div class="col-12">
    <div class="card">

      <!-- Titre du tableau -->
      <div class="card-header">
        <h3 class="card-title">Liste des membres</h3>
        <button type="submit" class="btn btn-outline-primary btn-sm ml-auto">Ajouter</button>
      </div>

      <div class="table-responsive">
        <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
          <thead>
            <tr>
              <th class="text-center w-1"><i class="icon-people"></i></th>
              <th>Membre</th>
              <th>Adresse mail</th>
              <th>Département</th>
              <th>Adresse</th>
              <th class="text-center">Statut</th>
              <th class="text-center"><i class="icon-settings"></i></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">
                <div class="avatar d-block" style="background-image: url(/asfla/public/img/profile/jedynak.jpg)">
                  <!--<span class="avatar-status bg-green"></span>-->
                </div>
              </td>
              <td>
                <div>Caroline GRIMA</div>
                <!--
                  <div class="small text-muted">
                    Registered: Mar 19, 2018
                  </div>
                -->
              </td>
              <td>
                <div>carolinejedynak.sagefemme@gmail.com</div>
              </td>
              <td>
                <div>Bas-rhin</div>
              </td>
              <td>
                <div>10 rue du cimetière</div>
                <div>67600 Ebersheim</div>
              </td>
              <td class="text-center">
                <span class="badge badge-primary">Actif</span>
              </td>
              <td class="text-center">
                <div class="item-action dropdown">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-info"></i> Consulter</a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Modifier</a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-trash"></i> Supprimer</a>
                  </div>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

@endsection
