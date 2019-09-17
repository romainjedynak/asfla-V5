<!-- Import du template -->
@extends('layouts.app')

@section('page-lien-agenda-active')
active
@endsection

<!-- Titre de la page -->
@section('page-titre')
Agenda
@endsection

<!-- Contenu de la page -->
@section('page-contenu')

<div class="row row-cards row-deck">
  <div class="col-12">
    <div class="card">

      <div class="card-header">

        <div id="calendar"></div>

      </div>

    </div>
  </div>

</div>

@endsection


@section('javascript')

<script>
  require(['fullcalendar', 'moment', 'fullcalendar-locale', 'jquery'], function () {


    $(document).ready(function() {

  //Initialisation du calendrier
  $('#calendar').fullCalendar({

    //Gestion de la langue (locale FR)
    locale: 'fr',

    events: [
    {
      title  : 'Assemblée générale',
      start  : '2019-09-27'
    },
    ]

  })

});

  });
</script>

@endsection
