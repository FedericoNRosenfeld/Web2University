<?php
require_once "BaseModel.php";

class UsuariosModel extends BaseModel {
  function __construct(){
    session_start();
  }

  function crear($datos) {
    try {
      $consulta = $this->db->prepare('INSERT INTO Usuarios(nombre, pass, tipo) VALUES(?,?,?)');
      $consulta->execute(array($datos['user'],password_hash($datos['pass'], PASSWORD_DEFAULT),ConfigApp::$USER_COMUN)); // por defecto son usuarios sin pribvilegios
      return true;
    }
    catch(PDOException $ex)
    {
      return false;
    }
  }

  function login($usuario){
    $consulta = $this->db->prepare('SELECT * FROM Usuarios WHERE nombre=?');
    $consulta->execute(array($usuario["user"]));
    $consulta=$consulta->fetchAll();
    if (password_verify($usuario["pass"], $consulta[0]["pass"])) {
      //comenzamos la Sesion
      session_start();
      $_SESSION["nombre"] = $usuario["user"];
      return "hola ".$usuario["user"];
    } else {
      //si no lo podemos verificar redireccionamos
      return "no se pudo ingresar ".$consulta[0]["pass"];
    }
  }

  function desAutenticar(){
    session_destroy();
  }

  function modificar(){

  }

}
 ?>
