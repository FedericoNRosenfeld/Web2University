<?php
include_once 'views/IndexView.php';
include_once 'views/ContactoView.php';
include_once 'views/EquiposView.php';
include_once 'views/FixtureView.php';
include_once 'views/HomeView.php';
include_once 'views/AdminJugadoresView.php';

class NavController
{
  private $vista;

  function __construct()
  {

  }

  function MostrarInicio(){
    $this->vista = new IndexView();
    $this->vista->mostrar();
  }

  function MostrarContacto(){
    $this->vista = new ContactoView();
    $this->vista->mostrar();
  }

  function MostrarEquipos(){
    $this->vista = new EquiposView();
    $this->vista->mostrar();
  }

  function MostrarFixture(){
    $this->vista = new FixtureView();
    $this->vista->mostrar();
  }

  function MostrarHome(){
    $this->vista = new HomeView();
    $this->vista->mostrar();
  }

  function MostrarAdminJugadores(){
    $this->vista = new AdminJugadoresView();
    $this->vista->mostrar();
  }

}

 ?>
