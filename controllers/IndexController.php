<?php
include_once 'controllers/SesionController.php';

include_once 'views/IndexView.php';

class indexController{
  private $vista;

  function __construct(){
    $this->vista = new IndexView();
  }

  function mostrarIndex(){
    $UserActual["Nombre"]=SesionController::usuarioActivo();
    $UserActual["Admin"]=SesionController::esAdmin();

    $this->vista->mostrar($UserActual);
  }

}

 ?>
