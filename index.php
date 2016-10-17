<?php

include_once 'config/ConfigApp.php';
include_once 'controllers/IndexController.php';
include_once 'controllers/HomeController.php';
include_once 'controllers/FixtureController.php';
include_once 'controllers/EquiposController.php';
include_once 'controllers/ContactoController.php';
include_once 'controllers/AdminJugadoresController.php';
include_once 'controllers/JugadoresController.php';
include_once 'controllers/AdminEquiposController.php';

$indexController = new indexController();

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST))
{
  $indexController->mostrarIndex();
  die();
}
else{
  switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_MOSTRAR_HOME:
      $Controller = new HomeController();
      $Controller->MostrarHome();
    break;
    case ConfigApp::$ACTION_MOSTRAR_FIXTURE:
      $Controller = new FixtureController();
      $Controller->MostrarFixture();
    break;
    case ConfigApp::$ACTION_MOSTRAR_EQUIPOS:
      $Controller = new EquiposController();
      $Controller->MostrarEquipos();
    break;
    case ConfigApp::$ACTION_MOSTRAR_CONTACTO:
      $Controller = new ContactoController();
      $Controller->MostrarContacto();
    break;

    case ConfigApp::$ACTION_MOSTRAR_ADM:
      $Controller = new AdminJugadoresController();
      $Controller-> MostrarAdminJugadores();
    break;

    case ConfigApp::$ACTION_MOSTRAR_ADM_TEAM:
      $Controller = new AdminEquiposController();
      $Controller-> mostrar();
    break;
  //---------------------------------------------------------------------------------------------
    // Acciones respecto a los Jugadores

    case ConfigApp::$ACTION_AGREGAR_JUGADOR:
      $Controller = new AdminJugadoresController();
      $Controller->AgregarJugador();
      break;

  case ConfigApp::$ACTION_BORRAR_JUGADOR:
      $Controller = new AdminJugadoresController();
      $Controller->EliminarJugador();
      break;
      //muestra la misma vista que el admin de jugadores pero filtrada por equipo
  case ConfigApp::$ACTION_ADM_JUGADOR_TEAM:
      $Controller = new AdminJugadoresController();
      $Controller-> MostrarAdmJugadorTeam();
      break;
  //-------------------------------------------------------------------------------------------
  //acciones respecto a Equipos

//---------------------------------------------------------------------------------------------
// Ver jugadores de un Equipo en especifico
  case ConfigApp::$ACTION_VER_JUGADORES_EQUIPO:
      $Controller = new JugadoresController();
      $Controller->ListarJugadoresTeam();
      break;

// Ver todos los jugadores
  case ConfigApp::$ACTION_VER_JUGADORES:
      $Controller = new EquiposController();
      $Controller->ListarJugadores();
      break;

      default:
      echo 'Pagina no encontrada';
      break;
    }
}

?>
