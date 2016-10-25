<select name="{$nombreSelector}" id="{$nombreSelector}">
    <option value="-1">Seleccionar Opcion</option>
  {foreach from=$ItemsSelector key=index item=data}
    <option value="{$data[$CampoId]}" {if $data[$CampoId] == $OpcionSelecionada}selected="selected"{/if}>{$data[$CampoNombre]}</option>
  {/foreach}
</select>
