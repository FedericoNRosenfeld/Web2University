<select name="{$nombreSelector}">
  {foreach from=$equipos key=index item=equipo}
    <option>{$equipo['nombre']}</option>
  {/foreach}
</select>
