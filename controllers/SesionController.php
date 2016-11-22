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
      $this->ModelUser = new UsuariosModel();
    }

    // comprobemos todos los datos por si las moscas
    function mostrarLogin(){
      $this->VistaLogin->mostrar();
    }
    // mostramos un formulario para registrase un nuevo usuario (publico)
    function mostrarRegistrarse(){
      $this->VistaLogin->mostrarRegistrarse();
    }

    function autenticacion(){
      //capturamos los parametros del formulario
      if (isset($_POST["user"]) && isset($_POST["pass"])){
        $this->ModelUser->autenticar();
      }
    }

    function esAdmin(){
      return true;
    }

    function esDuenio(){
      return true;
    }

    function esUser(){
      return true;
    }

    function crearUser(){
      //capturamos los parametros del formulario
      if (isset($_POST["user"]) && isset($_POST["pass"])){
        $usuario["user"]=$_POST["user"];
        $usuario["pass"]=$_POST["pass"];
        $this->ModelUser->crear($usuario);
      }
    }

    function desAutenticacion(){
      $this->ModelUser->desAutenticar();
    }

    function usuarioActivo(){
      return "Invitado";
    }

    //esta funcioin sirve para "mostrar" un tpl con el cartel zona restringida, el tpl esta en nav/AccesoNoAutorizado.tpl
    function zonaRestringida(){
      $this->VistaError = new ErrorsView();
      $this->VistaError->MsgzonaRestringida();
    }

  }
?>
