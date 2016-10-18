<table class="table table-bordered table-responsive">
  <thead>
    <th>Nombre</th>
    <th>Abreviación</th>
    <th>Imagen</th>
    <th>Conferencia</th>
    <th>Acciones</th>
  </thead>
  <tbody id="tablaJugadoresAdmin">
    {foreach from=$equipos key=index item=equipo}
    <tr>
      <td>{$equipo['rk_nombre_equipo']}</td>
      <td>{$equipo['abreviacion']}</td>
      <td><img id="{$equipo['id']}" class="EnlaceEquipo" src="images/{$equipo['url']}"></img></td>
      <td>{$equipo['Categoria']}</td>
      <td>
        <div class="btn btn-info btn-editar" data-id="{$equipo['id']}">Editar</div>
        <div class="btn btn-danger btn-eliminar" data-id="{$equipo['id']}">Eliminar</div>
      </td>
    </tr>
    {/foreach}
  </tbody>
</table>