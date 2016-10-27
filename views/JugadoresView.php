<?php
include_once 'BaseView.php';

class JugadoresView extends BaseView{

  function mostrarEquipo($jugadores){
    $this->smarty->assign('jugadores',$jugadores);
    $this->smarty->display('tablaJugadoresPublico.tpl');
  }
}
?>
