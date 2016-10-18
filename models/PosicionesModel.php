<?php
require_once "BaseModel.php";

class PosicionesModel extends BaseModel {

  function GetAll(){
    $consulta = $this->db->prepare("SELECT * FROM Posiciones");
    $consulta->execute();
    return $consulta->fetchAll();
  }

  function agregarPosicion($posicion){
    $consulta = $this->db->prepare('INSERT INTO Posiciones(nombre_posicion) VALUES(?)');
    $consulta->execute(array($posicion));
    $id_posicion = $this->db->lastInsertId();
  }

  function borrarPosicion($id_pos){
    $consulta = $this->db->prepare('DELETE FROM Posiciones WHERE rk_id_posicion=?');
    $consulta->execute(array($id_pos));


  function modificarPosicion($posicion){
    $consulta = $this->db->prepare('UPDATE Posicion SET nombre_posicion='.$posicion['nombre'].' WHERE rk_id_posicion='.$posicion['id_posicion'].'');
    $consulta->execute(array($posicion));
  }

}
}
 ?>
