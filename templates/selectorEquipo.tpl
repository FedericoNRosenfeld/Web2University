<select name="{$nombreSelector}" id="{$nombreSelector}">
    <option value="-1">Seleccionar Opcion</option>
  {foreach from=$equipos key=index item=equipo}
    <option value="{$equipo['id']}">{$equipo['rk_nombre_equipo']}</option>
  {/foreach}
</select>
