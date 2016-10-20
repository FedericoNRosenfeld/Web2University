<?php
require_once "BaseModel.php";

class ImagenesModel extends BaseModel {
  private $DirectorioImg = "images/";
  private $path;
  private $id_img;

  function getIdImg(){
    return $this->id_img;
  }

  function agregarImagen($archivo){
    //agregamos la imagen a la estructura de directorios
    $this->path=$this->DirectorioImg.uniqid()."_".$archivo["name"];

    if (move_uploaded_file($archivo["tmp_name"], $this->path)){
      //agregamos el registro a la base de datos
      $consulta = $this->db->prepare('INSERT INTO Imagenes(url) VALUES(:url)');
      $consulta->execute(array(":url"=> $this->path));

      $this->id_img = $this->db->lastInsertId();

      return true;
    } else { //en caso de que no se haya podido subir
      return false;
    }

  }
}
?>
