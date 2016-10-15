<?php

include_once 'views/FixtureView.php';

class FixtureController {
private $view;

function __construct() {
  $this->view = new FixtureView();
}

function MostrarFixture(){
  $this->view->mostrar();
}

}
?>
