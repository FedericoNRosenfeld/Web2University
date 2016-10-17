<?php
include_once "models/JugadoresModel.php";
include_once "views/JugadoresView.php";

// listar todos los jugadores
// listar  los jugadores de un equipo
// agregar jugador LO HACE ADMINJUGADORES
// eliminar jugador LO HACE ADMINJUGADORES

class JugadoresController {
  private $model;
  private $view;

  function __construct() {
      $this->model = new JugadoresModel();
      $this->view = new JugadoresView();
  }

    function ListarJugadoresTeam(){

      $this->view->mostrarEquipo($this->model->getJugadoresEquipo($_REQUEST['id']));// con esto va a mostrar los juagdores que tengan como equipo el id del Equipo solicitado
    }

    function ListarJugadores(){
       $jugadores = $this->modelo->GetAllJugadores();
    }

}
