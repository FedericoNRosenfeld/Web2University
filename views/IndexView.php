<?php
require('libs/Smarty.class.php');

class IndexView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrar(){
    $this->smarty->display('index.tpl');
  }

}



 ?>
