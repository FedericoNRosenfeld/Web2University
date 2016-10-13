<?php

require('controllers/NavController.php');
require('controllers/EquiposController.php');
require('controllers/JugadoresController.php');
require('controllers/FixtureController.php');
require('config/ConfigApp.php');

$controller = new NavController();

switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_MOSTRAR_INICIO:
    break;
    case ConfigApp::$ACTION_MOSTRAR_FIXTURE:
    break;
    case ConfigApp::$ACTION_MOSTRAR_EQUIPOS:
    break;
    case ConfigApp::$ACTION_MOSTRAR_CONTACTO:
    break;
    case ConfigApp::$ACTION_MOSTRAR_ADM:
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
    $controller->MostrarIndex();
    break;
}
?>
