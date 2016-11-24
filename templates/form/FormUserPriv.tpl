<h3>Iniciar Sesión</h3>
<form class="col-md-6 col-md-offset-3" id="form-sesion-edit">
  <div class="form-group">
    <label for="NombrePosicion">Usuario</label>
    <input type="email" class="form-control" name="user" value="{$user['nombre']}" placeholder="esteesun@mail.com" required>
  </div>
  <div class="form-group">
    <label for="NombrePosicion">Contraseña</label>
    <input type="password" class="form-control" name="pass" required>
  </div>
  <div class="form-group">
    <label for="posicionJugador">Tipo</label>
    {$ItemsSelector=$tipos}
    {$CampoId='id_rango'}
    {$CampoNombre='rango'}
    {$nombreSelector='tipo'}{$OpcionSelecionada=$user['tipo']}
    {include file='form/Selector.tpl' links=$OpcionSelecionada links=$ItemsSelector links=$CampoId links=$CampoNombre links=$nombreSelector}
  </div>
  <button class="btn btn-default" id="boton_Guardar_usr">Guardar</button>
</form>
