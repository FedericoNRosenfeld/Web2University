<div class="row col-sm-6">
  <div class="col-xs-12">
    <h2 class="text-center">Añadir jugador</h2>
    {$nombreSelector="equipoJugador"}
    {$jugador['nombre']=""}{$jugador['numero']=""}
    {include file='FormJugador.tpl' links=$equipos links=$jugador links=$nombreSelector links=$posiciones links=$TextBotonFormJugadores}
  </div>
</div>
<div class="row col-sm-6">
  <div class="col-xs-12">
    <h2 class="text-center">Añadir posicion</h2>
    {include file='FormPosiciones.tpl'}
  </div>
  <div class="col-xs-12">
    <h2 class="text-center">Listado de posiciones</h2>
    {include file='tablaPosiciones.tpl' links='$posiciones'}
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <h2>Seleccionar equipo:<h2>
    {$nombreSelector='PlayersSelectEquipo'}
    {$ItemsSelector=$equipos}
    {$CampoId='id'}
    {$CampoNombre='rk_nombre_equipo'}
    {include file='Selector.tpl' links=$ItemsSelector links=$CampoId links=$CampoNombre links=$nombreSelector}
    {include file='tablaJugadores.tpl' links=$jugadores}
  </div>
  <div class="col-sm-4">
  </div>
</div>
