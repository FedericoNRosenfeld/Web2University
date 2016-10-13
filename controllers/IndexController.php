<?php
require('views/IndexView.php');

class IndexController
{
  private $vista;

  function __construct()
  {
    $this->vista = new IndexView();
  }

  function iniciar(){
    $this->vista->mostrar();
  }

}

 ?>
