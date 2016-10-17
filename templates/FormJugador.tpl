  <form>
    <div class="form-group">
      <label for="equipoJugador">Equipo</label>
      {include file='selectorEquipo.tpl' links=$equipos links=$nombreSelector}
    </div>
    <div class="form-group">
      <label for="nombreJugador">Nombre</label>
      <input type="text" class="form-control" id="nombreJugador" placeholder="Lebron James" required>
    </div>
    <div class="form-group">
      <label for="posicionJugador">Posicion</label>
      <input type="text" class="form-control" id="posicionJugador" placeholder="Base">
    </div>
    <div class="form-group">
      <label for="numeroJugador">Numero</label>
      <input type="number" class="form-control" id="numeroJugador" placeholder="23">
    </div>
    <button id="crear" class="btn btn-default center-block">Crear</button>
  </form>
