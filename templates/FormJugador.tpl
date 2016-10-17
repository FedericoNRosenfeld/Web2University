  <form>
    <div class="form-group">
      <label for="equipoJugador">Equipo</label>
      <select name="equipoJugador">
        {foreach from=$equipos key=index item=equipo}
          <option>{$equipo['nombre']}</option>
        {/foreach}
      </select>
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
