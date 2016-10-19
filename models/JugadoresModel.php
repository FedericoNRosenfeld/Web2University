<?php
require_once "BaseModel.php";

class JugadoresModel extends BaseModel {


  private function subirArchivos($files){
    $destinos = array();
    foreach ($files as $file){
      $destino = "images/".uniqid().$file['name'];
      move_uploaded_file($files['tmp_name'],$destino);
      $destinos[]=$destino;
    }
    return $destinos;
  }

  function agregarNoticia($titulo, $descripcion, $categoria, $files){

    $rutas = $this->subirArchivos($files);
    $consulta = $this->db->prepare('INSERT INTO noticia(titulo,descripcion,id_cat) VALUES(?,?,?)');
    $consulta->execute(array($titulo,$descripcion,$categoria));
    $id_noticia = $this->db->lastInsertId();
    foreach ($rutas as $ruta) {
      $imagenes = $this->db->prepare('INSERT INTO imagen(id_noticia,ruta) VALUES(?,?)');
      $imagenes->execute(array($id_noticia, $ruta));
    }
  }

  function agregarJugador($jugador){
      // agrega un jugador a la BD
      //try {
        $consulta = $this->db->prepare('INSERT INTO Jugadores(nombre, fk_id_equipo, posicion, numero) VALUES(:nombre, :equipo, :posicion, :numero)');
        $consulta->execute(array(
          ":nombre"=>$jugador['nombre']
          ,":equipo"=>$jugador['equipo']
          ,":posicion"=>$jugador['posicion']
          ,":numero"=>$jugador['numero']
        //  ,":imagen"=>$jugador['imagen']
        ));

        $id = $this->db->lastInsertId();

        return true;
    //  }
    //  catch(PDOException $ex)
  //    {
  //      return false;
  //    }
    }

    function eliminarJugador($key){
      $consulta = $this->db->prepare('DELETE FROM Jugadores WHERE id_jugador=?');
      $sentencia->execute(array($key));
    }

    function modificarJugador($jugador){
      // ME ESTOY GUIANDO DEL UPDATE DE W3SCHOOL ('UPDATE Customers SET ContactName='Alfred Schmidt', City='Hamburg' WHERE CustomerName='Alfreds Futterkiste';
      $consulta = $this->db->prepare('UPDATE Jugadores SET posicion= '.$jugador['posicion'].',numero='.$jugador['numero'].',imagen='.$jugador['imagen'].'WHERE id_jugador='.$jugador['id_jugador'].'');
      $sentencia->execute(array($key));
    }


    function getJugadoresEquipo($id_equipo){
      // Estas linea aparte de hacer la consulta une la tabla jugadores con la de posiciones y equipos para poder usar las claves foraneas
      $consulta = $this->db->prepare("SELECT * FROM Jugadores INNER JOIN Equipos ON Jugadores.fk_id_equipo = Equipos.id INNER JOIN Posiciones ON Jugadores.posicion = Posiciones.rk_id_posicion INNER JOIN Imagenes ON Jugadores.fk_imagen = Imagenes.rk_id_imagen WHERE fk_id_equipo=$id_equipo");
      $consulta->execute();
      return $consulta->fetchAll();
    }

    function GetAll(){
      $consulta = $this->db->prepare("SELECT * FROM Jugadores INNER JOIN Equipos ON Jugadores.fk_id_equipo = Equipos.id INNER JOIN Posiciones ON Jugadores.posicion = Posiciones.rk_id_posicion INNER JOIN Imagenes ON Jugadores.fk_imagen = Imagenes.rk_id_imagen");
      $consulta->execute();
      return $consulta->fetchAll();
    }
}
 ?>
