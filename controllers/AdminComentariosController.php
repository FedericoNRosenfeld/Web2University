<?php
include_once 'controllers/SesionController.php';

include_once 'models/ComentariosModel.php';

include_once 'views/ComentariosJugadoresView.php';

class AdminComentariosController {
  private $vista;
  private $modelC;

  function __construct(){
    $this->vista = new ComentariosJugadoresView();
    $this->modelC = new ComentariosModel();
  }

  function MostrarAdminComentarios(){
    if (SesionController::esAdmin()){
      $this->vista->mostrarAdmin($this->modelC->getAll());
    } else {
      $this->zonaRestringida();
    }
  }
}
?>
