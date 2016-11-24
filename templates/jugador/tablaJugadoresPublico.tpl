<table class="table table-bordered table-responsive">
  <thead>
    <th>Nombre</th>
    <th>Posicion</th>
    <th>Numero</th>
    <th>Equipo</th>
    <th>Valoraciones</th>
    <th>Foto</th>
  </thead>
  <tbody id="tablaJugadoresAdmin">
    {foreach from=$jugadores key=index item=jugador}
    <tr>
      <td>{$jugador['nombre']}</td>
      <td>{$jugador['nombre_posicion']}</td>
      <td>{$jugador['numero']}</td>
      <td>{$jugador['rk_nombre_equipo']}</td>
      <td>{$jugador['valoracion']}<button type="button" data-id="{$jugador['id_jugador']}" class="btn btn-default comentarios_jugador">Ver comentarios</button> </td>
      <td>
        {foreach from=$jugador['imgs'] key=index item=img}
          <img class="EnlaceEquipo img-responsive" src="{$img}"></img></td>
        {/foreach}
    </tr>
    {/foreach}
  </tbody>
</table>
