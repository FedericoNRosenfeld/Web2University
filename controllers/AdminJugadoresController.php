<?php

include_once 'views/AdminJugadoresView.php';
include_once 'models/EquiposModel.php';
include_once 'models/JugadoresModel.php';

class AdminJugadoresController{

  private $view;
  private $MJugadores;
  private $MEquipos;

  function __construct() {
    $this->view = new AdminJugadoresView();
    $this->MJugadores = new JugadoresModel(); // derivar responsabilidades de jugadores
    $this->MEquipos = new EquiposModel(); // derivar responsabilidades de equipos
  }

  function MostrarAdminJugadores(){
    $Jugadores = $this->MJugadores->getAll();
    $Equipos = $this->MEquipos-> getAll();
    $this->view->mostrar($Jugadores,$Equipos);

  }

  function MostrarAdmJugadorTeam(){
    if(isset($_REQUEST['id']))  {
      $Jugadores = $this->MJugadores->getJugadoresEquipo($_REQUEST['id']);
      $Equipos = $this->MEquipos-> getAll();
      $this->view->mostrar($Jugadores,$Equipos);
    }
  }

  function AgregarJugador(){ // agregar un jugador a la BD --->
    if( (isset($_REQUEST['nombre'])) && (isset($_REQUEST['equipo']))  && (isset($_REQUEST['posicion'])) && (isset($_REQUEST['numero'])))  {
       $jugador = array(
            "nombre"=>$_REQUEST['nombre']
           ,"equipo"=>$_REQUEST['equipo']
           ,"posicion"=>$_REQUEST['posicion']
           ,"posicion"=>$_REQUEST['numero']
         );
       if (!$this->MJugadores->agregarJugador($jugador))
       {
         echo "error al subir a la DB";
       }
     }
     else{
       echo "jugador con datos incompletos";
     }
   }

 function EliminarJugador(){ //ELIMINA UN JUGADOR DE LA BASE DE DATOS Y ACOMODA LA VISTA EN LA TABLA DE ADMINJUGADORES
       $key = $_GET['id'];
       $this->modelJ->eliminarJugador($key);
       $this->MostrarAdminJugadores();
 }



}
  ?>
