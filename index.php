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
      $inicioController->MostrarIndex();
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
      $adminController = new AdminController();
      $adminController->MostrarAdminJugadores();
    break;
    // Acciones respecto a los Jugadores
    case ConfigApp::$ACTION_AGREGAR_JUGADOR:
      $agregarjugadorController = new JugadoresControler();
      $agregarjugadorController->agregarjugador();
      break;
  case ConfigApp::$ACTION_MODIFICAR_JUGADOR:
      $modificarjugadorController = new JugadoresControler();
      $modificarjugadorController->modificarjugador();
      break;
  case ConfigApp::$ACTION_BORRAR_JUGADOR:
      $borrarjugadorController = new JugadoresControler();
      $borrarjugadorController->eliminarjugador();
      break;

// Ver jugadores de un Equipo en especifico
  case ConfigApp::$ACTION_VER_EQUIPO:
      $adminController = new EquiposController();
      $adminController->mostrarequipo();
      break;

  default:
      echo 'Pagina no encontrada';
      break;
    }
}

?>
