<?php

include_once 'view/IndexView.php';

class IndexController {

  private $view;

  function __construct() {
    $this->view = new indexView();
  }

  function mostrarInicio(){
    $this->view->mostrarIndex();
  }

}
?>
