<?php
include_once dirname(__DIR__).'/libs/Smarty.class.php';

class BaseView{
  protected $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }
}
 ?>
