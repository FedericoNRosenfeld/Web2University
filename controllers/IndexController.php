<?php
include_once 'views/IndexView.php';

class indexController{
  private $vista;

  function __construct(){
    $this->vista = new IndexView();
  }

  function mostrarIndex(){
    $this->vista->mostrar();
  }

}

 ?>
