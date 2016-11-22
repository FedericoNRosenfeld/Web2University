<?php
require_once "BaseModel.php";

class ComentariosModel extends BaseModel {

  function getComentariosJugador($id_jugador){
    $consulta = $this->db->prepare("SELECT * FROM Comentarios WHERE id_user_coment=".$id_jugador);
    $consulta->execute();
    return $consulta->fetchAll();
  }

  function getAll(){
    $consulta = $this->db->prepare("SELECT * FROM Comentarios");
    $consulta->execute();
    return $consulta->fetchAll();
  }

  function create($Comentario){

  }

  function edit($Comentario){

  }

  function delete($id_comentario){

  }

  function getUserValoracion($id_jugador){
    $consulta = $this->db->prepare("SELECT * FROM Comentarios WHERE id_user_coment=".$id_jugador);
    $consulta->execute();
    return $consulta->fetchAll();
  }
}
 ?>
