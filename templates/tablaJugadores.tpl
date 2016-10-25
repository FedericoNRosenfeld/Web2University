<table class="table table-bordered table-responsive" data-action-editar="" data-action-borrar="">
  <thead>
    <th>Nombre</th>
    <th>Posicion</th>
    <th>Numero</th>
    <th>Equipo</th>
    <th>Foto</th>
    <th>Acciones</th>
  </thead>
  <tbody id="tablaJugadoresAdmin">
    {foreach from=$jugadores key=index item=jugador}
    <tr id="rj-{$jugador['id_jugador']}">
      <td class="cont-nombre">{$jugador['nombre']}</td>
      <td class="cont-posicion" data-id="{$jugador['rk_id_posicion']}">{$jugador['nombre_posicion']}</td>
      <td class="cont-numero">{$jugador['numero']}</td>
      <td class="cont-equipo" data-id="{$jugador['id']}">{$jugador['rk_nombre_equipo']}</td>
      <td>
        <img class=" img-responsive " alt="Imagen no Disponible" src="{$jugador['url']}"></img>
      </td>
      <td>
        <div class="btn btn-danger btn-eliminar borrar_jugador btn-xs" data-id="{$jugador['id_jugador']}">Borrar</div>
        <div class="btn btn-info btn-editar modificar_jugador btn-xs" data-id="{$jugador['id_jugador']}">Editar</div>
      </td>
    </tr>
    {/foreach}
  </tbody>
</table>
