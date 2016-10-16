<?php
require_once "BaseModel.php";

class EquiposModel extends BaseModel {

  function GetEquipos(){
    $consulta = $this->db->prepare("SELECT * FROM Equipos");
    $consulta->execute();
    return $consulta->fetchAll();
  }
}
 ?>
