<?php
require_once "BaseModel.php";

class PosicionesModel extends BaseModel {

  function GetAll(){
    $consulta = $this->db->prepare("SELECT * FROM Posiciones");
    $consulta->execute();
    return $consulta->fetchAll();
  }
}
 ?>
