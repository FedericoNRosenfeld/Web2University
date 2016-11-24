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
      <td class="cont-rango" >
        {$user["rango"]}
      </td>
      <td>
        {if $user['tipo']!=3}<div class="btn btn-danger btn-eliminar borrar_user btn-xs" data-id="{$user['id_user']}">Borrar</div>
        <div class="btn btn-info btn-editar btn_mod_user btn-xs" data-id="{$user['id_user']}">Editar</div>{/if}
      </td>
    </tr>
    {/foreach}
  </tbody>
</table>
