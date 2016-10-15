<?php
include_once "models/EquiposModel.php";
include_once "views/EquiposView.php";

// listar todos los equipos

class EquiposController {

  private $model;
  private $view;

  function __construct() {
    $this->model = new EquiposModel();
    $this->view  = new EquiposView();
  }

  function MostrarEquipos(){
      $equipos =$this->model->GetEquipos();
      $this->view->mostrar($equipos);
  }



}

?>
