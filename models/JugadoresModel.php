<?php
require_once "BaseModel.php";

class JugadoresModel extends BaseModel {
  function agregarJugador($jugador, $files){
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

    function getEquipos(){
      $consulta = $this->db->prepare("SELECT * FROM Equipos");
      $consulta->execute();
      return $consulta->fetchAll();
    }

  // funcion modificarJugador() {...}
  // function getJugadores() {...}

}
 ?>
