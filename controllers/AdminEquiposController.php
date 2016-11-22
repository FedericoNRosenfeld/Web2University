<?php
include_once 'controllers/SesionController.php';

include_once "models/EquiposModel.php";

include_once "views/AdminEquiposView.php";

class AdminEquiposController extends SesionController {
  private $modeloEquipo;
  private $viewEquipo;

  function __construct(){
    $this->modeloEquipo = new EquiposModel();
    $this->viewEquipo = new AdminEquiposView();
  }

  function mostrar() {
      $this->viewEquipo->mostrar($this->modeloEquipo->getAll());
  }

}
 ?>
