<form id="form-nuevo-comentario">
  <div class="form-group">
    <label for="NombrePosicion">Valoración</label>
    <input type="text" class="form-control" name="valoracion" required>
  </div>
  <div class="form-group">
    <label for="NombrePosicion">Comentario</label>
    <input type="text" class="form-control" name="comentario" required>
  </div>
  <button id="enviar-coment" data-elemento="{$IdJugador}" class="btn btn-default center-block">Comentar</button>
</form>
