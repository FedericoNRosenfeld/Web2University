<?php
include_once 'libs/Smarty.class.php';

class indexView {
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function mostrarIndex(){
    $this->smarty->display('index.tpl');
  }

}
?>
