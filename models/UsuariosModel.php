<?php
require_once "BaseModel.php";

class UsuariosModel extends BaseModel {

  function crear($datos) {
  //  try {
      $consulta = $this->db->prepare('INSERT INTO Usuarios(nombre, pass, tipo) VALUES(?,?,?)');
      $consulta->execute(array($datos['user'],password_hash($datos['pass'], PASSWORD_DEFAULT),2));
      return true;
  //  }
    //catch(PDOException $ex)
  //  {
  //    return false;
  //  }
  }

  function autenticar($usuario){
    $hash = "";
    if (password_verify($usuario["pass"], $hash)) {
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
