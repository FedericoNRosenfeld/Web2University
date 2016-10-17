<?php

include_once 'views/AdminJugadoresView.php';
include_once 'models/EquiposModel.php';
include_once 'models/JugadoresModel.php';

class AdminJugadoresController{

  private $view;

  function __construct() {
    $this->view = new AdminJugadoresView();
    $this->model = new AdminModel();
    $this->modelJ = new JugadoresModel(); // derivar responsabilidades de jugadores
    $this->modelE = new EquiposModel(); // derivar responsabilidades de equipos


function MostrarAdminJugadores(){
    $jugadores = $this->modelJ->GetAllJugadores();
    $equipos = $this->modelE->GetEquipos();
    $this->view->mostrar($this->model->ArmarListado($jugadores,$equipos)); // HAY QUE EDITARLO PARA QUE CON ESTOS 2 PARAMETROS ARME LA TABLA EQUIPO/JUGADOR

 }

function AgregarJugador(){ // agregar un jugador a la BD --->
    if( (isset($_REQUEST['nombre'])) && (isset($_REQUEST['equipo']))  && (isset($_REQUEST['posicion'])) && (isset($_REQUEST['numero'])))  {
       $jugador = array(
            "nombre"=>$_REQUEST['nombre']
           ,"equipo"=>$_REQUEST['equipo']
           ,"posicion"=>$_REQUEST['posicion']
           ,"posicion"=>$_REQUEST['numero']
         );
       if (!$this->modelJ->agregarJugador($jugador))
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


}
  ?>
