<table class="table table-bordered table-responsive" data-action-editar="" data-action-borrar="">
  <thead>
    <th>Posicion</th>
    <th>Acciones</th>
  </thead>
  <tbody id="tablaJugadoresAdmin">
    {foreach from=$posiciones key=index item=posicion}
    <tr>
      <td>{$posicion['nombre_posicion']}</td>
      <td>
        <div class="btn btn-info  editar_posicion btn-xs" data-id="{$posicion['rk_id_posicion']}">Editar</div>
        <div class="btn btn-danger borrar_posicion btn-xs" data-id="{$posicion['rk_id_posicion']}">Eliminar</div>
      </td>
    </tr>
    {/foreach}
  </tbody>
</table>
