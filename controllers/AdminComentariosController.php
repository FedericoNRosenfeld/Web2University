<?php
include_once 'controllers/SesionController.php';

include_once 'models/ComentariosModel.php';

include_once 'views/ComentariosJugadoresView.php';

class AdminComentariosController extends SesionController{
  private $vista;
  private $modelC;

  function __construct(){
    $this->vista = new ComentariosJugadoresView();
    $this->modelC = new ComentariosModel();
  }

  function MostrarAdminComentarios(){
    if ($this->esAdmin()){
      $this->vista->mostrarAdmin($this->modelC->getAll());
    } else {
      $this->zonaRestringida();
    }
  }
}
?>
