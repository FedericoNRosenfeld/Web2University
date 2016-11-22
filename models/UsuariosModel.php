<?php
require_once "BaseModel.php";

class UsuariosModel extends BaseModel {

  function crear($datos) {
    $clave = password_hash($datos['pass']);
  }

  function autenticar($usuario){
    $salt = "hola esto es un salt inseguro?";
    $hash = "";
    if (password_verify($usuario["pass"]+$salt, $hash)) {
      //comenzamos la Sesion
      session_start();
      $_SESSION["id"] = $usuario["id"];
      $_SESSION["id"]["nombre"] = $usuario["nombre"];
      $_SESSION["id"]["tipo"] = 1;
      return true;
    } else {
      //si no lo podemos verificar redireccionamos
      header("location:index.php");
      die();
    }
  }

  function desAutenticar(){
    session_destroy();
  }

  function modificar(){

  }

}
 ?>
