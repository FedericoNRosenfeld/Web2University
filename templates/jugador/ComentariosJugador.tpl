<div>
  <h2>{$jugador['nombre']}</h2>
  <p>Equipo: {$jugador['rk_nombre_equipo']}</p>
  <p>Posición: {$jugador['nombre_posicion']}</p>
  <p>Numero: {$jugador['numero']}</p>
</div>
<h2>Comentarios:</h2>
<div id="zona_de_comentarios">
</div>
{if esUser}
  <div class="col-sm-3">
    <h3>Comentar</h3>
    {include file='form/FormComentarios.tpl'}
  </div>
{else}
  <h3>Solo los usuarios registrados pueden comentar</h3>
{/if}
