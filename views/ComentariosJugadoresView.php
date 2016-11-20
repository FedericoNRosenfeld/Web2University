<?php
include_once 'BaseView.php';

class ComentariosJugadoresView extends BaseView{

  function mostrar(){
    $this->smarty->display('templates/ComentariosJugador.tpl');
  }

}
?>
