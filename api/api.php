<?php
require_once 'ComentariosApi.php';

$url_elements = explode('/', rtrim($_REQUEST['parametros'], '/'));  // divido la accion con los parametros
if(count($url_elements)>0){                                         // si existen parametros actúo
  $api_name = ucfirst($url_elements[0]) . 'Api';
  $api = new ComentariosApi($_REQUEST['parametros']);
  echo $api->processAPI();
}

?>
