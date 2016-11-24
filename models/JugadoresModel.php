<?php
require_once "BaseModel.php";
require_once "ComentariosModel.php";
require_once "ImagenesModel.php";

class JugadoresModel extends BaseModel {

  function agregarJugador($jugador){
      // agrega un jugador a la BD
      //agregamos la imagen
      $MImagenes = new ImagenesModel();
        try {
          $consulta = $this->db->prepare('INSERT INTO Jugadores(nombre, fk_id_equipo, posicion, numero) VALUES(:nombre, :fk_id_equipo, :posicion, :numero)');
          $consulta->execute(array(
            ":nombre"=>$jugador['nombre']
            ,":fk_id_equipo"=>$jugador['equipo']
            ,":posicion"=>$jugador['posicion']
            ,":numero"=>$jugador['numero']
          ));
          $id = $this->db->lastInsertId();
          $MImagenes->agregarImagen($id,$jugador['imagen']);
          return true;
        }
        catch(PDOException $ex)
        {
          return false;
        }
    }

    function eliminarJugador($key){
      $MImagenes = new ImagenesModel();
      $MImagenes->borrarImagenes($key);
      $consulta = $this->db->prepare('DELETE FROM Jugadores WHERE id_jugador=:v1');
      $consulta->bindParam(':v1',$key);
      $consulta->execute();
    }

    function modificarJugador($jugador){
      try {
        $consulta = $this->db->prepare('UPDATE Jugadores SET fk_id_equipo=:v1,nombre=:v2 ,posicion=:v3,numero='.$jugador['numero'].' WHERE id_jugador=:v4');
        $consulta->bindParam(':v1',$jugador['equipo']);
        $consulta->bindParam(':v2',$jugador['nombre']);
        $consulta->bindParam(':v3',$jugador['posicion']);
        $consulta->bindParam(':v4',$jugador['id_jugador']);
        $consulta->execute();
        return "Jugador modificado correctamente";
      }
      catch (PDOException $ex) {
        return $ex;
      }
    }

    private function AgregarValoraciones($consulta){
      $ModelComentarios = new ComentariosModel();
      for ($c=0;$c<count($consulta);$c++){
        $consulta[$c]["valoracion"] = $ModelComentarios->getUserValoracion($consulta[$c]["id_jugador"]);
      }
      return $consulta;
    }

    function getJugadoresEquipo($id_equipo){
      // Estas linea aparte de hacer la consulta une la tabla jugadores con la de posiciones y equipos para poder usar las claves foraneas
      $consulta = $this->db->prepare("SELECT * FROM Jugadores INNER JOIN Equipos ON Jugadores.fk_id_equipo = Equipos.id INNER JOIN Posiciones ON Jugadores.posicion = Posiciones.rk_id_posicion WHERE fk_id_equipo=:v1");
      $consulta->bindParam(':v1',$id_equipo);
      $consulta->execute();
      $consulta = $consulta->fetchAll();

      return $this->AgregarValoraciones($consulta);
    }

    function getJugador($id_jugador){
      $consulta = $this->db->prepare("SELECT * FROM Jugadores INNER JOIN Equipos ON Jugadores.fk_id_equipo = Equipos.id INNER JOIN Posiciones ON Jugadores.posicion = Posiciones.rk_id_posicion  WHERE id_jugador=:v1");
      $consulta->bindParam(':v1',$id_jugador);
      $consulta->execute();
      return $consulta->fetchAll()[0];
    }

    function GetAll(){
      $consulta = $this->db->prepare("SELECT * FROM Jugadores INNER JOIN Equipos ON Jugadores.fk_id_equipo = Equipos.id INNER JOIN Posiciones ON Jugadores.posicion = Posiciones.rk_id_posicion ");
      $consulta->execute();
      $consulta = $consulta->fetchAll();

      return $this->AgregarValoraciones($consulta);
    }
}
 ?>
