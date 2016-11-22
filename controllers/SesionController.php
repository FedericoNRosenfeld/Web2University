<?php
include_once 'views/LoginView.php';

  class SesionController{
    private $VistaLogin;

    function  __construct(){
      $this->VistaLogin = new LoginView();
    }

    // comprobemos todos los datos por si las moscas
    function mostrarLogin(){
      $this->VistaLogin->mostrar();
    }

    function autenticacion(){

    }

    function desAutenticacion(){

    }

  }
?>
