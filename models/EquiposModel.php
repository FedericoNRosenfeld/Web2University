<?php
require_once "BaseModel.php";

class EquiposModel extends BaseModel {

  function GetEquipos(){
    $consulta = $this->db->prepare("SELECT * FROM Equipos WHERE categoria = 'este'");
    $consulta->execute();
    $equipos["ConfEste"]=$consulta->fetchAll();
    $consulta = $this->db->prepare("SELECT * FROM Equipos WHERE categoria = 'oeste'");
    $consulta->execute();
    $equipos["ConfOeste"]=$consulta->fetchAll();
    return $equipos;
  }
}
 ?>
