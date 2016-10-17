<select name="{$nombreSelector}">
  {foreach from=$equipos key=index item=equipo}
    <option>{$equipo['rk_nombre_equipo']}</option>
  {/foreach}
</select>
