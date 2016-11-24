<table class="table table-bordered table-responsive" data-action-editar="" data-action-borrar="">
  <thead>
    <th>Nombre</th>
    <th>Rango</th>
    <th>Acciones</th>
  </thead>
  <tbody id="tablaJugadoresAdmin">
    {foreach from=$users key=index item=user}
    <tr id="usr{$user['id_user']}">
      <td class="cont-nombre">{$user['nombre']}</td>
      <td class="cont-rango" >{$user['tipo']}</td>
      <td>
        <div class="btn btn-danger btn-eliminar borrar_user btn-xs" data-id="{$user['id_user']}">Borrar</div>
        <div class="btn btn-info btn-editar modificar_user btn-xs" data-id="{$user['id_user']}">Editar</div>
      </td>
    </tr>
    {/foreach}
  </tbody>
</table>
