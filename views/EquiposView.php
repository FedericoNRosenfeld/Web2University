<?php
include_once 'libs/Smarty.class.php';

class EquiposView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrar($equipos){
    $this->smarty->assign('equipos',$equipos);
    $this->smarty->display('equipos.tpl');
  }

}



 ?>
