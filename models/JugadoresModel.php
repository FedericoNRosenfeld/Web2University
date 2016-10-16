<?php
require_once "BaseModel.php";

class JugadoresModel extends BaseModel {

  function agregarJugador($jugador){
      // agrega un jugador a la BD
      try {
        $consulta = $this->db->prepare('INSERT INTO Jugadores(nombre, fk_id_equipo, posicion, numero) VALUES(:nombre, :equipo, :posicion, :numero)');
        $consulta->execute(array(
          ":nombre"=>$jugador['nombre']
          ,":equipo"=>$jugador['equipo']
          ,":posicion"=>$jugador['posicion']
          ,":numero"=>$jugador['numero']
        ));

        $id = $this->db->lastInsertId();

        return true;
      }
      catch(PDOException $ex)
      {
        return false;
      }
    }

    function eliminarJugador($key){
      $sentencia = $this->db->prepare("DELETE FROM Jugadores where id=?");
      $sentencia->execute(array($key));
      return $sentencia->rowCount();
    }

    function GetJugadoresEquipo($id_equipo){
      $consulta = $this->db->prepare("SELECT * FROM Jugadores WHERE  fk_id_equipo=$id_equipo");
      $consulta->execute();
      return $consulta->fetchAll();
    }

    function GetAllJugadores(){
      $consulta = $this->db->prepare("SELECT * FROM Jugadores");
      $consulta->execute();
      return $consulta->fetchAll();
    }

}
 ?>
