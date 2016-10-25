<?php
include_once 'libs/Smarty.class.php';

class AdminJugadoresView{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function mostrar($jugadores,$equipos,$posiciones){
    $this->smarty->assign('jugadores', $jugadores);
    $this->smarty->assign('equipos', $equipos);
    $this->smarty->assign('posiciones', $posiciones);
    $this->smarty->assign('TextBotonFormJugadores',"Crear");
    $this->smarty->display('templates/adminjugadores.tpl');
  }
}
 ?>
