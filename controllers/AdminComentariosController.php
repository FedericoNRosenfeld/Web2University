<?php
include_once 'models/ComentariosModel.php';
include_once 'models/JugadoresModel.php';

class AdminComentariosController{
  private $vista;
  private $modelC;
  private $modelJ;

  function __construct(){
    $this->vista = new ComentariosJugadoresView();
    $this->modelC = new ComentariosModel();
    $this->modelJ = new JugadoresModel();
  }

  function MostrarAdminComentarios(){

  }
}
?>
