<?php
include_once 'views/IndexView.php';
//include_once 'views/HomeView.php';

class IndexController{
  private $vista;

  function __construct(){
    $this->vista = new IndexView();
  }

  function MostrarIndex(){
    $this->vista->mostrar();
  }

  function MostrarHome(){
    $this->vista = new HomeView();
    $this->vista->mostrar();
  }

}

 ?>
