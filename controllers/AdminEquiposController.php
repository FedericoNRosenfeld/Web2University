<?php
include_once "models/EquiposModel.php";

class AdminEquiposController {
  private $modeloEquipo;

  function __construct(){
    $this->modeloEquipo = new EquiposModel();
  }

  
}
 ?>
