<?php
include_once 'libs/Smarty.class.php';

class FixtureView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrar(){
    $this->smarty->display('fixture.tpl');
  }

}
 ?>
