<?php
// de este controlador tienen que heredar todos los que usen sesiones

include_once 'models/UsuariosModel.php';
include_once 'views/LoginView.php';
include_once 'views/ErrorsView.php';

  class SesionController{
    private $VistaLogin;
    private $ModelUser;

    function  __construct(){
      $this->VistaLogin = new LoginView();
    }

    // comprobemos todos los datos por si las moscas
    function mostrarLogin(){
      $this->VistaLogin->mostrar();
    }
    // mostramos un formulario para registrase un nuevo usuario (publico)
    function mostrarRegistrarse(){
      $this->VistaLogin->mostrarRegistrarse();
    }

    function autenticar(){
      //capturamos los parametros del formulario
      if (isset($_POST["user"]) && isset($_POST["pass"])){
        $ModelUser = new UsuariosModel();
        $usuario["user"]=$_POST["user"];
        $usuario["pass"]=$_POST["pass"];
        echo $ModelUser->login($usuario);
      }
    }

    function esAdmin(){
      $User= $this->usuarioActivo();
      if ($User != "-1"){
        $ModelUser = new UsuariosModel();
        return $ModelUser->getTipo($User)==ConfigApp::$USER_ADMIN;
      } else {
        return false;
      }
    }

    function esDuenio(){
      $User= $this->usuarioActivo();
      if ($User != "-1"){
        $ModelUser = new UsuariosModel();
        return $ModelUser->getTipo($User)==ConfigApp::$USER_DUENIO;
      } else {
        return false;
      }
    }

    function esUser(){
      $User= $this->usuarioActivo();
      if ($User != "-1"){
        $ModelUser = new UsuariosModel();
        return $ModelUser->getTipo($User)==ConfigApp::$USER_COMUN;
      } else {
        return false;
      }
    }

    function crearUser(){
      //capturamos los parametros del formulario
      if (isset($_POST["user"]) && isset($_POST["pass"])){
        $ModelUser = new UsuariosModel();
        $usuario["user"]=$_POST["user"];
        $usuario["pass"]=$_POST["pass"];
        return $ModelUser->crear($usuario);
      }
    }

    function desAutenticacion(){
      $ModelUser = new UsuariosModel();
      $ModelUser->desAutenticar();
      echo "chauu!";
    }

    function usuarioActivo(){
      session_start();
      if (isset($_SESSION["nombre"])){
        return $_SESSION["nombre"];
      } else {
        return "-1";
      }
    }

    //esta funcioin sirve para "mostrar" un tpl con el cartel zona restringida, el tpl esta en nav/AccesoNoAutorizado.tpl
    function zonaRestringida(){
      $this->VistaError = new ErrorsView();
      $this->VistaError->MsgzonaRestringida();
    }

  }
?>
