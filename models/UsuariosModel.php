<?php
require_once dirname(__DIR__)."/models/BaseModel.php";

class UsuariosModel extends BaseModel {

  function crear($datos) {
    try {
      $consulta = $this->db->prepare('INSERT INTO Usuarios(nombre, pass, tipo) VALUES(:v1,:v2,:v3)');//The SQL engine checks each parameter to ensure that it is correct for its column and are treated literally, and not as part of the SQL to be executed.
      $consulta->bindParam(':v1',$datos['user']);
      $consulta->bindParam(':v2',password_hash($datos['pass'], PASSWORD_DEFAULT));
      $consulta->bindParam(':v3',ConfigApp::$USER_COMUN); // por defecto son usuarios sin privilegios
      $consulta->execute();
      return true;
    }
    catch(PDOException $ex)
    {
      return false;
    }
  }

  function getTipo($user){
    $consulta = $this->db->prepare("SELECT tipo FROM Usuarios WHERE nombre=:nombre");
    $consulta->bindParam(':nombre',$user);
    $consulta->execute();
    $consulta=$consulta->fetchAll();
    return $consulta[0]["tipo"];
  }

  function login($usuario){

    //$_usuario = /*mysql_real_escape_string(*/$usuario["user"];//);
    //$_pass = mysql_real_escape_string($usuario["pass"]);
    $consulta = $this->db->prepare("SELECT pass FROM Usuarios WHERE nombre=:nombre");
    $consulta->bindParam(':nombre',$usuario['user']);
    $consulta->execute();
    $consulta=$consulta->fetchAll();

    if (password_verify($usuario["pass"], $consulta[0]['pass'])) {
      //manejamos los datos el sesion start se lo delegamos al controlador
      $_SESSION["nombre"] = $usuario["user"];
      return "hola ".$usuario['user'];
    } else {
      //si no lo podemos verificar redireccionamos
      return "no se pudo ingresar ".$consulta[0];
    }
  }

  function desAutenticar(){
    session_destroy();
  }

  function modificar(){

  }

}
 ?>
