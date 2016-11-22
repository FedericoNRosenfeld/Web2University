<?php
include_once 'controllers/SesionController.php';

include_once 'views/IndexView.php';

class indexController extends SesionController{
  private $vista;

  function __construct(){
    $this->vista = new IndexView();
  }

  function mostrarIndex(){
    $UserActual["Nombre"]=$this->usuarioActivo();
    $UserActual["Admin"]=$this->esAdmin();
    $this->vista->mostrar($UserActual);
  }

}

 ?>
