<table class="table table-bordered table-responsive">
  <thead>
    <th>Nombre</th>
    <th>Posicion</th>
    <th>Numero</th>
    <th>Equipo</th>
    <th>Foto</th>
  </thead>
  <tbody id="tablaJugadoresAdmin">
    {foreach from=$jugadores key=index item=jugador}
    <tr>
      <td>{$jugador['nombre']}</td>
      <td>{$jugador['nombre_posicion']}</td>
      <td>{$jugador['numero']}</td>
      <td>{$jugador['rk_nombre_equipo']}</td>
      <td><img class="EnlaceEquipo" src="images/{$jugador['url']}"></img></td>
    </tr>
    {/foreach}
  </tbody>
</table>
