<?php
include_once 'views/ComentariosJugadoresView.php';

class ComentariosController{
  private $vista;

  function __construct(){
    $this->vista = new ComentariosJugadoresView ();
  }

  function MostrarContacto(){
    $this->vista->mostrar();
  }
}
?>
