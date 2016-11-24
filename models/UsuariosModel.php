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

  function getData($user){
    $consulta = $this->db->prepare("SELECT id_user,nombre,tipo, Rangos.rango FROM Usuarios INNER JOIN Rangos ON Usuarios.tipo = Rangos.id_rango WHERE id_user=:id");
    $consulta->bindParam(':id',$user);
    $consulta->execute();
    $consulta=$consulta->fetchAll();
    return $consulta[0];
  }

  function getId($user){
    $consulta = $this->db->prepare("SELECT id_user FROM Usuarios WHERE nombre=:nombre");
    $consulta->bindParam(':nombre',$user);
    $consulta->execute();
    $consulta=$consulta->fetchAll();
    return $consulta[0]["id_user"];
  }

  function borrar($id){
    try {
      $consulta = $this->db->prepare('DELETE FROM Usuarios WHERE id_user=:id');
      $consulta->bindParam(':id',$id);
      $consulta->execute();
      return true;
    }  catch(PDOException $ex)
    {
      return false;
    }
  }

  function getAll(){
    $consulta = $this->db->prepare("SELECT id_user, nombre, tipo, Rangos.rango FROM Usuarios INNER JOIN Rangos ON Usuarios.tipo = Rangos.id_rango");$consulta->execute();
    return $consulta->fetchAll();
  }

  function getRangos(){
    $consulta = $this->db->prepare("SELECT * FROM Rangos");$consulta->execute();
    return $consulta->fetchAll();
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

  function modificar($id_user,$tipo){
    try {
      $consulta = $this->db->prepare('UPDATE Usuarios SET tipo=:v1 WHERE id_user=:v2');
      $consulta->bindParam(':v1',$tipo);
      $consulta->bindParam(':v2',$id_user);
      $consulta->execute();
      return "permisos actualizados";
    }
    catch (PDOException $ex) {
      return $ex;
    }
  }

}
 ?>
