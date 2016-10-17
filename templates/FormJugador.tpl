  <form>
    <div class="form-group">
      <label for="equipoJugador">Equipo</label>
      {$ItemsSelector=$equipos}
      {$CampoId='id'}
      {$CampoNombre='rk_nombre_equipo'}
      {include file='Selector.tpl' links=$ItemsSelector links=$CampoId links=$CampoNombre links=$nombreSelector}
    </div>
    <div class="form-group">
      <label for="posicionJugador">Posicion</label>
      {$ItemsSelector=$posiciones}
      {$CampoId='rk_id_posicion'}
      {$CampoNombre='nombre_posicion'}
      {include file='Selector.tpl' links=$ItemsSelector links=$CampoId links=$CampoNombre links=$nombreSelector}
    </div>
    <div class="form-group">
      <label for="nombreJugador">Nombre</label>
      <input type="text" class="form-control" id="nombreJugador" placeholder="Lebron James" required>
    </div>
    <div class="form-group">
      <label for="numeroJugador">Numero</label>
      <input type="number" class="form-control" id="numeroJugador" placeholder="23">
    </div>
    <button id="crear" class="btn btn-default center-block">Crear</button>
  </form>
