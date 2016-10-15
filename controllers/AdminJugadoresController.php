<?php

include_once 'views/AdminJugadoresView.php';
include_once 'models/EquiposModel.php';
include_once 'models/JugadoresModel.php';

class adminJugadoresController {

  private $view;

  function __construct() {
    $this->view = new adminView();
    $this->modelJ = new JugadoresController(); // derivar responsabilidades
    $this->modelE = new EquiposModel();// derivar responsabilidades


function MostrarAdminJugadores(){
    $jugadores = $this->modelJ->ListarJugadores();
    $equipos = $this->modelE->GetAllJugadores();
    $this->view->mostrar($jugadores,$equipos);// HAY QUE EDITARLO PARA QUE CON ESTOS 2 PARAMETROS ARME LA TABLA EQUIPO/JUGADOR
 }

function AgregarJugador(){ // agregar un jugador a la BD --->
    if( (isset($_REQUEST['nombre'])) && (isset($_REQUEST['equipo']))  && (isset($_REQUEST['posicion'])) && (isset($_REQUEST['numero'])))  {
       $jugador = array(
            "nombre"=>$_REQUEST['nombre']
           ,"equipo"=>$_REQUEST['equipo']
           ,"posicion"=>$_REQUEST['posicion']
           ,"posicion"=>$_REQUEST['numero']
         );
       if (!$this->model->agregarJugador($jugador))
       {
         echo "error al subir a la DB";
       }
     }
     else{
       echo "jugador con datos incompletos";
     }
   }

 function EliminarJugador(){//ELIMINA UN JUGADOR DE LA BASE DE DATOS
       $key = $_GET['id'];
       $this->modelo->eliminarJugador($key);
       $this->MostrarAdminJugadores();
     }
 }


}
  ?>
