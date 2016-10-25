<?php
include_once 'libs/Smarty.class.php';

class EditJugadoresView{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function mostrar($jugador,$equipos,$posiciones){
    $this->smarty->assign('equipos', $equipos);
    $this->smarty->assign('posiciones', $posiciones);
    $this->smarty->assign('TextBotonFormJugadores', "Guardar");
    $this->smarty->assign('jugador',$jugador[0]);
    $this->smarty->display('templates/EditJugador.tpl');
  }
}
 ?>
