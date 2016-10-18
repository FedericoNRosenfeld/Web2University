<table class="table table-bordered table-responsive">
  <thead>
    <th>Nombre</th>
    <th>Posicion</th>
    <th>Numero</th>
    <th>Equipo</th>
    <th>Acciones</th>
  </thead>
  <tbody id="tablaJugadoresAdmin">
    {foreach from=$jugadores key=index item=jugador}
    <tr>
      <td>{$jugador['nombre']}</td>
      <td>{$jugador['nombre_posicion']}</td>
      <td>{$jugador['numero']}</td>
      <td>{$jugador['rk_nombre_equipo']}</td>
      <td>
        <div class="btn btn-info btn-eliminar" data-id="{$jugador['id']}">Borrar</div>
        <div class="btn btn-danger btn-editar" data-id="{$jugador['id']}">Editar</div>
      </td>
    </tr>
    {/foreach}
  </tbody>
</table>
