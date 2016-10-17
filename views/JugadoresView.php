<?php
include_once 'libs/Smarty.class.php';

class JugadoresView{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function mostrarEquipo($jugadores){
    $this->smarty->assign('jugadores',$jugadores);
    $this->smarty->display('tablaJugadores.tpl');
  }
}
?>
