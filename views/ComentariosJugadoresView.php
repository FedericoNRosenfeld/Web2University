<?php
include_once 'BaseView.php';

class ComentariosJugadoresView extends BaseView{

  function mostrar(){
    $this->smarty->display('jugador/ComentariosJugador.tpl');
  }

}
?>
