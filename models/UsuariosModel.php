<?php
require_once "BaseModel.php";

class PosicionesModel extends BaseModel {

  function nuevo($datos) {
    $salt = "hola esto es un salt inseguro?";
    $clave = password_hash($datos['pass']+$salt, DEFAULT);
  }

  function verificar($usuario){
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

  function salir(){
    session_destroy();
  }

}
 ?>
