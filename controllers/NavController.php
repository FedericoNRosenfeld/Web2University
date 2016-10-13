<?php
require('views/IndexView.php');

class NavController
{
  private $vista;

  function __construct()
  {

  }

  function MostrarIndex(){
    $this->vista = new IndexView();
    $this->vista->mostrar();
  }

}

 ?>
