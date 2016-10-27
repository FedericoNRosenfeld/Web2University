<?php
include_once 'BaseView.php';

class EditJugadoresView extends BaseView{

  function mostrar($jugador,$equipos,$posiciones){
    $this->smarty->assign('equipos', $equipos);
    $this->smarty->assign('posiciones', $posiciones);
    $this->smarty->assign('TextBotonFormJugadores', "Guardar");
    $this->smarty->assign('jugador',$jugador[0]);
    $this->smarty->display('templates/EditJugador.tpl');
  }
}
 ?>
