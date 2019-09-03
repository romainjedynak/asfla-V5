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

<div id="calendar"></div>

@endsection


@section('javascript')

<script>
  require(['fullcalendar-core', 'fullcalendar-daygrid', 'jquery'], function ($) {
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'dayGrid' ],
      defaultView: 'dayGridMonth'
    });

    calendar.render();
    });
  });
</script>

@endsection
