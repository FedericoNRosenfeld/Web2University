<?php
include_once "models/JugadoresModel.php";
include_once "views/JugadoresViews.php";

// listar todos los jugadores
// listar  los jugadores de un equipo
// agregar jugador
// eliminar jugador


class JugadoresController {
  function __construct() {

  }

    function ListarJugadoresTeam($equipo){
      $this->view->mostrarEquipo($this->model->GetJugadoresEquipo($_REQUEST['id']));
    }

    function ListarJugadores(){
       $jugadores = $this->modelo->GetAllJugadores();
    }
