<?php
include_once 'libs/Smarty.class.php';

class AdminEquiposView{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function mostrar($equipos){
    $this->smarty->assign('equipos', $equipos);
    $this->smarty->display('templates/adminequipos.tpl');
  }
}
 ?>
