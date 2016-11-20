<?php
require_once "BaseModel.php";

class ImagenesModel extends BaseModel {


  function agregarImagen($id_jugador,$imagen){
    //agregamos la imagen a la estructura de directorios
    foreach ($imagenes as $key => $imagen) {
          $path="images/".uniqid()."_".$imagen["name"];
          move_uploaded_file($imagen["tmp_name"],$path);
          $insertImagen = $this->db->prepare("INSERT INTO Imagenes(id_jugador,url) VALUES(?,?)");
          $insertImagen->execute(array($id_jugador,$path));
        }
/*
    if (move_uploaded_file($imagen["tmp_name"], $this->path)){
      //agregamos el registro a la base de datos
      $consulta = $this->db->prepare('INSERT INTO Imagenes(url) VALUES(:url)');
      $consulta->execute(array(":url"=> $this->path));

      $this->id_img = $this->db->lastInsertId();

      return true;
    } else { //en caso de que no se haya podido subir
      return false;
    }*/
  }

    function borrarImagenes($key){
      $consulta = $this->db->prepare('DELETE FROM Imagenes WHERE id_jugador=?');
      $consulta->execute(array($key));
    }
  }

  function borrarImagen($key){
    $consulta = $this->db->prepare('DELETE FROM Imagenes WHERE rk_id_imagen=?');
    $consulta->execute(array($key));
  }
}
?>
