<!-- Import du template -->
@extends('layouts.app')

@section('page-lien-document-active')
active
@endsection

<!-- Titre de la page -->
@section('page-titre')
Documents
@endsection

<!-- Contenu de la page -->
@section('page-contenu')

<div class="row row-cards row-deck">
  <div class="col-12">
    <div class="card">

      <!-- Titre du tableau -->
      <div class="card-header">
        <h3 class="card-title">Liste des documents</h3>
        <button type="submit" class="btn btn-outline-primary btn-sm ml-auto">Ajouter</button>
      </div>

      <div class="table-responsive">
        <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
          <thead>
            <tr>
              <th>Nom</th>
              <th class="text-center">Format</th>
              <th>Auteur</th>
              <th class="text-center">Date de mise à jour</th>
              <th class="text-center">&nbsp;</th>
              <th class="text-center"><i class="icon-settings"></i></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div>Formulaire adhésion</div>
                <!--
                  <div class="small text-muted">
                    Registered: Mar 19, 2018
                  </div>
                -->
              </td>
              <td class="text-center">
                <div>PDF</div>
              </td>
              <td>
                <div>Caroline JEDYNAK</div>
              </td>
              <td class="text-center">
                <div>03/09/2019</div>
              </td>
              <td class="text-center">
                <div>
                  <button class="btn btn-outline-primary btn-sm ml-auto">Télécharger</button>
                </div>
              </td>
              <td class="text-center">
                <div class="item-action dropdown">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Modifier</a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-trash"></i> Supprimer</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <div>Compte-rendu réunion maternitée</div>
                <!--
                  <div class="small text-muted">
                    Registered: Mar 19, 2018
                  </div>
                -->
              </td>
              <td class="text-center">
                <div>PDF</div>
              </td>
              <td>
                <div>Caroline JEDYNAK</div>
              </td>
              <td class="text-center">
                <div>17/09/2019</div>
              </td>
              <td class="text-center">
                <div>
                  <button class="btn btn-outline-primary btn-sm ml-auto">Télécharger</button>
                </div>
              </td>
              <td class="text-center">
                <div class="item-action dropdown">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Modifier</a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-trash"></i> Supprimer</a>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <div>Compte-rendu assemblée générale</div>
                <!--
                  <div class="small text-muted">
                    Registered: Mar 19, 2018
                  </div>
                -->
              </td>
              <td class="text-center">
                <div>PDF</div>
              </td>
              <td>
                <div>Caroline JEDYNAK</div>
              </td>
              <td class="text-center">
                <div>17/09/2019</div>
              </td>
              <td class="text-center">
                <div>
                  <button class="btn btn-outline-primary btn-sm ml-auto">Télécharger</button>
                </div>
              </td>
              <td class="text-center">
                <div class="item-action dropdown">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
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
