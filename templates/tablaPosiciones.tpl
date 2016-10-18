<table class="table table-bordered table-responsive">
  <thead>
    <th>Posicion</th>
    <th>Acciones</th>
  </thead>
  <tbody id="tablaJugadoresAdmin">
    {foreach from=$posiciones key=index item=posicion}
    <tr>
      <td>{$posicion['nombre_posicion']}</td>
      <td>
        <div class="btn btn-info btn-editar btn-xs" data-id="{$posicion['rk_id_posicion']}">Editar</div>
        <div class="btn btn-danger btn-eliminar btn-xs" data-id="{$posicion['rk_id_posicion']}">Eliminar</div>
      </td>
    </tr>
    {/foreach}
  </tbody>
</table>
