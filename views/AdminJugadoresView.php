<?php
include_once 'libs/Smarty.class.php';

class AdminJugadoresView{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function mostrar($juagdores,$equipos){
    $this->smarty->assign('jugadores', $jugadores);
    $this->smarty->assign('equipos', $equipos);
    $this->smarty->display('templates/adminjugadores.tpl');
  }
}
 ?>
