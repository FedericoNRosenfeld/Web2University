<?php
require_once "BaseModel.php";

class JugadoresModel extends BaseModel {

  function agregarJugador($jugador){
      // agrega un jugador a la BD
      //agregamos la imagen
      $MImagenes = new ImagenesModel();
      if ($MImagenes->agregarImagen($jugador['imagen'])) {
        try {
          $IdImagen = $MImagenes->getIdImg();
          $consulta = $this->db->prepare('INSERT INTO Jugadores(nombre, fk_id_equipo, posicion, numero, fk_imagen) VALUES(:nombre, :fk_id_equipo, :posicion, :numero, :fk_imagen)');
          $consulta->execute(array(
            ":nombre"=>$jugador['nombre']
            ,":fk_id_equipo"=>$jugador['equipo']
            ,":posicion"=>$jugador['posicion']
            ,":numero"=>$jugador['numero']
            ,":fk_imagen"=>$IdImagen
          ));

          $id = $this->db->lastInsertId();

          return true;
        }
        catch(PDOException $ex)
        {
          return false;
        }
      }

    }

    function eliminarJugador($key){
      $consulta = $this->db->prepare('DELETE FROM Jugadores WHERE id_jugador=?');
      $consulta->execute(array($key));
    }

    function modificarJugador($jugador){
      //reemplazamos la imagen si se quiso reemplazar
      if ($jugador['imagen']["tmp_name"]!=null){
        $RegistroJugador=$this->getJugador($jugador['id_jugador']);
        $MImagenes = new ImagenesModel();
        // si ocurrio un error al modificar la imagen mandamos un codigo -2
        if(!$MImagenes->reemplazarImagen($jugador['imagen'],$RegistroJugador['url'])) {
          return "Ocurrio un error al intentar reemplazar/guardar la imagen";
        }
      }

      try {
        $consulta = $this->db->prepare('UPDATE Jugadores SET fk_id_equipo='.$jugador['equipo'].',nombre="'.$jugador['nombre'].'" ,posicion='.$jugador['posicion'].',numero='.$jugador['numero'].' WHERE id_jugador='.$jugador['id_jugador']);
        $consulta->execute();
        return "Jugador modificado correctamente";
      }
      catch (PDOException $ex) {
        return $ex;
      }
    }


    function getJugadoresEquipo($id_equipo){
      // Estas linea aparte de hacer la consulta une la tabla jugadores con la de posiciones y equipos para poder usar las claves foraneas
      $consulta = $this->db->prepare("SELECT * FROM Jugadores INNER JOIN Equipos ON Jugadores.fk_id_equipo = Equipos.id INNER JOIN Posiciones ON Jugadores.posicion = Posiciones.rk_id_posicion INNER JOIN Imagenes ON Jugadores.fk_imagen = Imagenes.rk_id_imagen WHERE fk_id_equipo=$id_equipo");
      $consulta->execute();
      return $consulta->fetchAll();
    }

    function getJugador($id_jugador){
      $consulta = $this->db->prepare("SELECT * FROM Jugadores INNER JOIN Equipos ON Jugadores.fk_id_equipo = Equipos.id INNER JOIN Posiciones ON Jugadores.posicion = Posiciones.rk_id_posicion INNER JOIN Imagenes ON Jugadores.fk_imagen = Imagenes.rk_id_imagen WHERE id_jugador=$id_jugador");
      $consulta->execute();
      return $consulta->fetchAll()[0];
    }

    function GetAll(){
      $consulta = $this->db->prepare("SELECT * FROM Jugadores INNER JOIN Equipos ON Jugadores.fk_id_equipo = Equipos.id INNER JOIN Posiciones ON Jugadores.posicion = Posiciones.rk_id_posicion INNER JOIN Imagenes ON Jugadores.fk_imagen = Imagenes.rk_id_imagen");
      $consulta->execute();
      return $consulta->fetchAll();
    }
}
 ?>
