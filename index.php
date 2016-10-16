<?php

include_once 'controllers/IndexController.php';
include_once 'controllers/FixtureController.php';
include_once 'controllers/EquiposController.php';
include_once 'controllers/ContactoController.php';
include_once 'controllers/AdminJugadoresController.php';
include_once 'controllers/JugadoresController.php';
include_once 'config/ConfigApp.php';

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) || $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $indexController = new IndexController();
  $indexController->MostrarIndex();
} else {
switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_MOSTRAR_INICIO:
      $inicioController = new IndexController();
      $inicioController->MostrarHome();
    break;
    case ConfigApp::$ACTION_MOSTRAR_FIXTURE:
      $fixtureController = new FixtureController();
      $fixtureController->MostrarFixture();
    break;
    case ConfigApp::$ACTION_MOSTRAR_EQUIPOS:
      $equiposController = new EquiposController();
      $equiposController->MostrarEquipos();
    break;
    case ConfigApp::$ACTION_MOSTRAR_CONTACTO:
      $contactoController = new ContactoController();
      $contactoController->MostrarContacto();
    break;


    case ConfigApp::$ACTION_MOSTRAR_ADM:
      $adminController = new AdminJugadoresControler();
      $adminController->MostrarAdminJugadores();
    break;
  //---------------------------------------------------------------------------------------------
    // Acciones respecto a los Jugadores

    case ConfigApp::$ACTION_AGREGAR_JUGADOR:
      $agregarjugadorController = new AdminJugadoresController();
      $agregarjugadorController->AgregarJugador();
      break;

  case ConfigApp::$ACTION_BORRAR_JUGADOR:
      $borrarjugadorController = new AdminJugadoresController();
      $borrarjugadorController->EliminarJugador();
      break;
//---------------------------------------------------------------------------------------------
// Ver jugadores de un Equipo en especifico
  case ConfigApp::$ACTION_VER_JUGADORES_EQUIPO:
      $adminController = new JugadoresController();
      $adminController->ListarJugadoresTeam();
      break;

// Ver todos los jugadores
  case ConfigApp::$ACTION_VER_JUGADORES:
      $adminController = new EquiposController();
      $adminController->ListarJugadores();
      break;

  default:
      echo 'Pagina no encontrada';
      break;
    }
}

?>
