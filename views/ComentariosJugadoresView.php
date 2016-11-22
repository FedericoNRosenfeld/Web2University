<?php
include_once 'BaseView.php';

class ComentariosJugadoresView extends BaseView{

  function mostrar($Parametros){
    $this->smarty->assign("jugador",$Parametros["Jugador"]);
    $this->smarty->display('jugador/ComentariosJugador.tpl');
  }

}
?>
