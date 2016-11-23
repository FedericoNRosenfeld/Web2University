<?php
require_once "BaseModel.php";

class UsuariosModel extends BaseModel {

  function crear($datos) {
    try {

      $consulta = $this->db->prepare('INSERT INTO Usuarios(nombre, pass, tipo) VALUES(@1,@2,@3)');//The SQL engine checks each parameter to ensure that it is correct for its column and are treated literally, and not as part of the SQL to be executed.
      $consulta->execute(array($datos['user'],password_hash($datos['pass'], PASSWORD_DEFAULT),ConfigApp::$USER_COMUN)); // por defecto son usuarios sin privilegios
      return true;
    }
    catch(PDOException $ex)
    {
      return false;
    }
  }


  /*
  function verificarJerarquia($usuario){
    $consulta = $this->db->prepare('SELECT tipo FROM Usuarios WHERE nombre=?');
    $consulta->execute(array($usuario["user"]));
    $consulta=$consulta->fetchAll()[0];
  }
*/

  function login($usuario){

    $_usuario = mysql_real_escape_string($usuario["user"]);
    $_pass = mysql_real_escape_string($usuario["pass"]);
    $consulta = $this->db->prepare('SELECT pass FROM Usuarios WHERE nombre= '$_usuario'');
    $consulta->execute(array($_usuario));
    $consulta=$consulta->fetchAll();

    if (password_verify($_pass2, $consulta[0]) {
      //comenzamos la Sesion
      session_start();
      $_SESSION["nombre"] = $usuario["user"];
      return "hola ".$_usuario;
    } else {
      //si no lo podemos verificar redireccionamos
      return "no se pudo ingresar ".$consulta[0];
    }
  }

  function desAutenticar(){
    session_start();
    session_destroy();
  }

  function modificar(){

  }

}
 ?>
