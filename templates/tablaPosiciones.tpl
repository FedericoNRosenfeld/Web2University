<table class="table table-bordered table-responsive">
  <thead>
    <th>Posicion</th>
    <th>Acciones</th>
  </thead>
  <tbody id="tablaJugadoresAdmin">
    {foreach from=$posiciones key=index item=posicion}
    <tr>
      <td>{$posicion['nombre_posicion']}</td>
      <td>Borrar | Editar</td>
    </tr>
    {/foreach}
  </tbody>
</table>
