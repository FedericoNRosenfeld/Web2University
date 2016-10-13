<?php

include_once 'controllers/NavController.php';
include_once 'controllers/EquiposController.php';
include_once 'controllers/JugadoresController.php';
include_once 'controllers/FixtureController.php';
include_once 'config/ConfigApp.php';

$controller = new NavController();

switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_MOSTRAR_INICIO:
      $controller->MostrarInicio();
    break;
    case ConfigApp::$ACTION_MOSTRAR_FIXTURE:
      $controller->MostrarFixture();
    break;
    case ConfigApp::$ACTION_MOSTRAR_EQUIPOS:
      $controller->MostrarEquipos();
    break;
    case ConfigApp::$ACTION_MOSTRAR_CONTACTO:
      $controller->MostrarContacto();
    break;
    case ConfigApp::$ACTION_MOSTRAR_ADM:
      $controller->MostrarAdminJugadores();
    break;
    case ConfigApp::$ACTION_MOSTRAR_HOME:
      $controller->MostrarHome();
    break;
    // Acciones respecto a los Jugadores
    case ConfigApp::$ACTION_AGREGAR_JUGADOR:
    break;
    case ConfigApp::$ACTION_MODIFICAR_JUGADOR:
    break;
    case ConfigApp::$ACTION_BORRAR_JUGADOR:
    break;
    // Seccion de equipos
    case ConfigApp::$ACTION_VER_EQUIPO:
    break;
  default:
    $controller->MostrarInicio();
    break;
}

?>
