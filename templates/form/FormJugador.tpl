  <form id="{$IdFormularioJugador}" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="equipoJugador">Equipo</label>
      {$ItemsSelector=$equipos}
      {$CampoId='id'}
      {$CampoNombre='rk_nombre_equipo'}
      {$nombreSelector='equipo'}{$OpcionSelecionada=$jugador['fk_id_equipo']}
      {include file='form/Selector.tpl' links=$ItemsSelector links=$OpcionSelecionada links=$CampoId links=$CampoNombre links=$nombreSelector}
    </div>
    <div class="form-group">
      <label for="posicionJugador">Posicion</label>
      {$ItemsSelector=$posiciones}
      {$CampoId='rk_id_posicion'}
      {$CampoNombre='nombre_posicion'}
      {$nombreSelector='posicion'}{$OpcionSelecionada=$jugador['posicion']}
      {include file='form/Selector.tpl' links=$OpcionSelecionada links=$ItemsSelector links=$CampoId links=$CampoNombre links=$nombreSelector}
    </div>
    <div class="form-group">
      <label for="nombreJugador">Nombre</label>
      <input type="text" class="form-control" id="form-jugador-nombre" name="nombre" placeholder="Lebron James" value="{$jugador['nombre']}" required>
    </div>
    <div class="form-group">
      <label for="numeroJugador">Numero</label>
      <input type="number" class="form-control" id="form-jugador-numero" name="numero"  placeholder="23" value="{$jugador['numero']}">
    </div>
    <div class="form-group">
      <label for="numeroJugador">Imagen</label>
      <input type="file" class="form-control" id="jugador-imagen" name="imagen[]" value="" multiple>
    </div>
    <button id="{$IdBtnForm}" class="btn btn-default center-block">{$TextBotonFormJugadores}</button>
  </form>
