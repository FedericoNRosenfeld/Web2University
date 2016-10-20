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
    <tr>
      <td>{$jugador['nombre']}</td>
      <td>{$jugador['nombre_posicion']}</td>
      <td>{$jugador['numero']}</td>
      <td>{$jugador['rk_nombre_equipo']}</td>
      <td><img class=" img-responsive " alt="Imagen no Disponible" src="{$jugador['url']}"></img></td>
      <td>
        <div class="btn btn-info btn-eliminar btn-xs" data-id="{$jugador['id_jugador']}">Borrar</div>
        <div class="btn btn-danger btn-editar btn-xs" data-id="{$jugador['id_jugador']}">Editar</div>
      </td>
    </tr>
    {/foreach}
  </tbody>
</table>
