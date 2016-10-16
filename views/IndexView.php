<?php
include_once 'libs/Smarty.class.php';

class IndexView{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrar(){
    $this->smarty->display('templates/index.tpl');
  }
}
?>
