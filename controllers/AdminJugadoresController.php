<?php

include_once 'views/AdminJugadoresView.php';
include_once 'views/EditJugadoresView.php';
include_once 'models/EquiposModel.php';
include_once 'models/JugadoresModel.php';
include_once 'models/PosicionesModel.php';
include_once 'models/ImagenesModel.php';

class AdminJugadoresController{

  private $view;
  private $MJugadores;
  private $MEquipos;
  private $MPosiciones;

  function __construct() {
    $this->MJugadores = new JugadoresModel(); // derivar responsabilidades de jugadores
    $this->MEquipos = new EquiposModel(); // derivar responsabilidades de equipos
    $this->MPosiciones = new PosicionesModel();
  }

  function MostrarAdminJugadores(){
    $Jugadores = $this->MJugadores->getAll();
    $Equipos = $this->MEquipos-> getAll();
    $Posiciones = $this->MPosiciones->getAll();

    $view = new AdminJugadoresView();
    $view->mostrar($Jugadores,$Equipos,$Posiciones);

  }

  function MostrarEditarJugador(){
    $Jugadores = $this->MJugadores->getAll();
    $Equipos = $this->MEquipos-> getAll();
    $Posiciones = $this->MPosiciones->getAll();

    $view = new EditJugadoresView();
    $view->mostrar($Jugadores,$Equipos,$Posiciones);
  }

  function MostrarAdmJugadorTeam(){
    if(isset($_REQUEST['id']))  {
      $Jugadores = $this->MJugadores->getJugadoresEquipo($_REQUEST['id']);
      $Equipos = $this->MEquipos-> getAll();
      $Posiciones = $this->MPosiciones->getAll();
      $this->view->mostrar($Jugadores,$Equipos,$Posiciones);
    }
  }
// SECTOR DE JUGADORES
  function AgregarJugador(){ // agregar un jugador a la BD ---> JUGADORES
    if( (isset($_REQUEST['nombre']))
     && (isset($_REQUEST['equipo']))
     && (isset($_REQUEST['posicion']))
     && (isset($_REQUEST['numero']))
     && (isset($_FILES['imagen'])))  {
       $jugador = array(
         "nombre"=>$_REQUEST['nombre'],
         "equipo"=>$_REQUEST['equipo'],
         "posicion"=>$_REQUEST['posicion'] ,
         "numero"=>$_REQUEST['numero'],
         "imagen"=>$_FILES['imagen']
         );
       if (!$this->MJugadores->agregarJugador($jugador)){
         echo "error al subir a la DB";
       } else {
         echo "Jugador cargado satisfactoriamente";
       }
     }
     else{
       echo "jugador con datos incompletos";
     }
   }

 function EliminarJugador(){ //ELIMINA UN JUGADOR DE LA BASE DE DATOS Y ACOMODA LA VISTA EN LA TABLA DE ADMINJUGADORES
       $key = $_GET['id'];
       //$this->modelimagen->borrarImagen($this->modelImagenes($this->modelJ->getImagenAsociada('id')));  BORRAR LA IAMGEN ASOCIADA AL JUGADOR
       $this->MJugadores->eliminarJugador($key);
       $this->MostrarAdminJugadores();
 }

  function ModificarJugador(){
    if( (isset($_REQUEST['nombre'])) && (isset($_REQUEST['equipo']))  && (isset($_REQUEST['posicion'])) && (isset($_REQUEST['numero'])))  {
       $jugador = array(
            "nombre"=>$_REQUEST['nombre']
           ,"equipo"=>$_REQUEST['equipo']
           ,"posicion"=>$_REQUEST['posicion']
           ,"posicion"=>$_REQUEST['numero']
         );
       $this->MJugadores->modificarJugador($jugador);
       $this->MostrarAdminJugadores();
     }
   }

}
  ?>
