<?php
include_once 'config/config_app.php';
include_once 'controllers/IndexController.php';
//include_once 'controllers/FixtureController.php';
//include_once 'controllers/EquiposController.php';
//include_once 'controllers/ContactoController.php';
//include_once 'controllers/AdminController.php';
//include_once 'controllers/JugadoresController.php';

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) || $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $indexController = new indexController();
  $indexController->mostrarIndex();
} else {
  switch ($_REQUEST[ConfigApp::$ACTION]) {
   // Listo
    case ConfigApp::$ACTION_MOSTRAR_INICIO:
      $inicioController = new IndexController();
      $inicioController->mostrarInicio();
      break;
   // Hacer
    case ConfigApp::$ACTION_MOSTRAR_FIXTURE:
        $fixtureController = new FixtureController();
        $fixtureController->mostrarFixture();
        break;
    case ConfigApp::$ACTION_MOSTRAR_EQUIPOS:
        $equiposController = new EquiposController();
        $equiposController->mostrarEquipos();
        break;
    case ConfigApp::$ACTION_MOSTRAR_CONTACTO:
        $contactoController = new ContactoController();
        $contactoController->mostrarContacto();
        break;
    case ConfigApp::$ACTION_MOSTRAR_ADM:
        $adminController = new AdminController();
        $adminController->mostrarAdmin();
        break;

    // Acciones de Jugadores
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
echo "holaaaa";
   ?>
