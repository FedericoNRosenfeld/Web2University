<?php

include_once 'views/AdminJugadoresView.php';
include_once 'models/EquiposModel.php';
include_once 'models/JugadoresModel.php';
include_once 'models/PosicionesModel.php';

class AdminJugadoresController{

  private $view;
  private $MJugadores;
  private $MEquipos;
  private $MPosiciones;

  function __construct() {
    $this->view = new AdminJugadoresView();
    $this->MJugadores = new JugadoresModel(); // derivar responsabilidades de jugadores
    $this->MEquipos = new EquiposModel(); // derivar responsabilidades de equipos
    $this->MPosiciones = new PosicionesModel();
  }




  function MostrarAdminJugadores(){
    $Jugadores = $this->MJugadores->getAll();
    $Equipos = $this->MEquipos-> getAll();
    $Posiciones = $this->mostrarPosiciones(); // La Funcion esta definida abajo , si no carga , tratar de poder la funcion arriba de esto
    $this->view->mostrar($Jugadores,$Equipos,$Posiciones);

  }

  function MostrarAdmJugadorTeam(){
    if(isset($_REQUEST['id']))  {
      $Jugadores = $this->MJugadores->getJugadoresEquipo($_REQUEST['id']);
      $Equipos = $this->MEquipos-> getAll();
      $this->view->mostrar($Jugadores,$Equipos);
    }
  }
// SECTOR DE JUGADORES 
  function AgregarJugador(){ // agregar un jugador a la BD ---> JUGADORES
    if( (isset($_REQUEST['nombre'])) && (isset($_REQUEST['equipo']))  && (isset($_REQUEST['posicion'])) && (isset($_REQUEST['numero'])&& (isset($_FILES['imagen'])))  {
       $jugador = array(
         "nombre"=>$_REQUEST['nombre'],
         "equipo"=>$_REQUEST['equipo'],
         "posicion"=>$_REQUEST['posicion'] ,
         "posicion"=>$_REQUEST['numero'],
         "imagen"=>$_REQUEST['imagen']
         );
       if (!$this->MJugadores->agregarJugador($jugador)){
         echo "error al subir a la DB";
       }
     }
     else{
       echo "jugador con datos incompletos";
     }
   }

 function EliminarJugador(){ //ELIMINA UN JUGADOR DE LA BASE DE DATOS Y ACOMODA LA VISTA EN LA TABLA DE ADMINJUGADORES
       $key = $_GET['id'];
       //$this->modelimagen->borrarImagen($this->modelImagenes($this->modelJ->getImagenAsociada('id')));  BORRAR LA IAMGEN ASOCIADA AL JUGADOR
       $this->modelJ->eliminarJugador($key);
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
       $this->modelJ->modificarJugador($jugador);
       $this->MostrarAdminJugadores();
     }
   }

// SECTOR DE POSICIONES
function mostrarPosiciones(){
    $this->view->mostrar($this->MPosiciones->getAll());
  }
  function agregarPosicion(){
    if(isset($_REQUEST['posicion'])){
        if(!(empty($_REQUEST['posicion']))){
            $this->MPosiciones->agregarPosicion($_REQUEST['posicion']);
        }
    }
    $this->mostrarPosiciones();// se recargue la tabla de posiciones en el lugar sin alterar el resto de las cosas
  }

  function borrarPosicion(){
    if(isset($_REQUEST['rk_id_posicion'])){
      $this->model->borrarPosicion($_REQUEST['rk_id_posicion']);
    }
    $this->mostrarPosiciones();// se recargue la tabla de posiciones en el lugar sin alterar el resto de las cosas
  }

  function modificarPosicion(){
    if(isset($_REQUEST['posicion'])){
      $this->model->modificarPosicion($_REQUEST['posicion']);
    }
    $this->mostrarPosiciones();// se recargue la tabla de posiciones en el lugar sin alterar el resto de las cosas
  }

}
  ?>
