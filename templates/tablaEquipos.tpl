<table class="table table-bordered table-responsive">
  <thead>
    <th>Nombre</th>
    <th>Abreviación</th>
    <th>Imagen</th>
    <th>Acciones</th>
  </thead>
  <tbody id="tablaJugadoresAdmin">
    {foreach from=$equipos key=index item=equipo}
    <tr>
      <td>{$equipo['rk_nombre_equipo']}</td>

      <td>Borrar | Editar</td>
    </tr>
    {/foreach}
  </tbody>
</table>
