<form id="form-nuevo-comentario">
  <div class="form-group">
    <label for="NombrePosicion">Valoración</label>
    <select type="text" class="form-control" name="valoracion" required>
      <option value="1" selected>1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="NombrePosicion">Comentario</label>
    <textarea type="text" class="form-control" name="comentario" required></textarea>
  </div>
  <button id="enviar-coment" data-elemento="{$IdJugador}" class="btn btn-default center-block">Comentar</button>
</form>
