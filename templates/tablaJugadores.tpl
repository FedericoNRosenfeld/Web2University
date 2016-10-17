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
      <td>{$jugador['posicion']}</td>
      <td>{$jugador['numero']}</td>
      <td>{$jugador['fk_id_equipo']}</td>
      <td>Borrar | Editar</td>
    </tr>
    {/foreach}
  </tbody>
</table>
