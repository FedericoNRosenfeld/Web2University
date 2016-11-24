<div class="row col-sm-6">
  <div class="col-xs-12">
    <h2 class="text-center">Añadir jugador</h2>
    {$nombreSelector="equipoJugador"}{$IdBtnForm="crear-jugador"}
    {$jugador['nombre']=""}{$jugador['numero']=""}{$jugador['posicion']=""}{$jugador['fk_id_equipo']=""}{$IdFormularioJugador="form-carga-jugador"}
    {include file='form/FormJugador.tpl' links=$equipos links=$IdBtnForm links=$jugador links=$nombreSelector links=$posiciones links=$TextBotonFormJugadores links=$IdFormularioJugador}
  </div>
</div>
<div class="row col-sm-6">
  <div class="col-xs-12">
    <h2 class="text-center">Añadir posicion</h2>
    {$nombreposicion=""}{$IdFormularioPosicion="form-agregar-posicion"}{$IdBotonFormPosicion="nueva-posicion"}{$TextBtnFormPosicion="Crear"}
    {include file='form/FormPosiciones.tpl' links=$nombreposicion links=$IdFormularioPosicion links=$TextBtnFormPosicion}
  </div>
  <div class="col-xs-12">
    <h2 class="text-center">Listado de posiciones</h2>
    {include file='posicion/tablaPosiciones.tpl' links='$posiciones'}
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <h2>Seleccionar equipo:<h2>
    {$nombreSelector='PlayersSelectEquipo'}
    {$ItemsSelector=$equipos}
    {$CampoId='id'}
    {$CampoNombre='rk_nombre_equipo'}{$OpcionSelecionada=""}
    {include file='form/Selector.tpl' links=$ItemsSelector links=$CampoId links=$CampoNombre links=$nombreSelector}
    {include file='jugador/tablaJugadores.tpl' links=$jugadores}
  </div>
  <div class="col-sm-4">
  </div>
</div>
