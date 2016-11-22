<?php
// de este controlador tienen que heredar todos los que usen sesiones

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
      //capturamos los parametros del formulario
      if (isset($_POST["user"]) && isset($_POST["pass"])){

      }
    }

    function desAutenticacion(){

    }

  }
?>
