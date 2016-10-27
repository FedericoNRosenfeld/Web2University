<?php
include_once 'libs/Smarty.class.php';

class BaseView{
  protected $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }
}
 ?>
