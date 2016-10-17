<div class="row">
  <!--<div class="col-md-6">
    <h2 class="text-center">Añadir jugador</h2>
    {include file='FormJugador.tpl' links=$equipos}
  </div>-->
  <div class="col-xs-12">
    <h2>Seleccionar equipo:<h2>
    {$nombreSelector='PlayersSelectEquipo'}
    {include file='selectorEquipo.tpl' links=$equipos links=$nombreSelector}
    {include file='tablaJugadores.tpl' links=$jugadores}
  </div>
</div>
