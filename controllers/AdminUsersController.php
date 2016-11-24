<?php
include_once "views/ADMUsersView.php";

include_once "models/UsuariosModel.php";

include_once "controllers/SesionController.php";

class AdminUsersController{
  private $view;
  function __construct(){
    $this->view = new ADMUsersView();
    $this->model = new UsuariosModel();
  }

  //mostramos ADM de Usuarios
  function mostrarADMUsers(){
    if (SesionController::esAdmin()){
      $this->view->mostrarADMUsers($this->model->getAll());
    } else {
      $this->zonaRestringida();
    }
  }
}

?>
