<?php
include_once "models/JugadoresModel.php";
include_once "views/JugadoresViews.php";

// listar todos los jugadores
// listar  los jugadores de un equipo
// agregar jugador LO HACE ADMINJUGADORES
// eliminar jugador LO HACE ADMINJUGADORES

class JugadoresController {
  function __construct() {

  }

    function ListarJugadoresTeam(){
      $this->view->mostrarEquipo($this->model->GetJugadoresEquipo($_REQUEST['id']));// con esto va a mostrar los juagdores que tengan como equipo el id del Equipo solicitado
    }

    function ListarJugadores(){
       $jugadores = $this->modelo->GetAllJugadores();
    }

}
