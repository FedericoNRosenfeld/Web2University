<select name="{$nombreSelector}" id="{$nombreSelector}">
  {foreach from=$equipos key=index item=equipo}
    <option value="{$equipo['id']}">{$equipo['rk_nombre_equipo']}</option>
  {/foreach}
</select>
