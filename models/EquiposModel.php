<?php
require_once "BaseModel.php";

class EquiposModel extends BaseModel {

  function GetAll(){
    $consulta = $this->db->prepare("SELECT * FROM Equipos");
    $consulta->execute();
    return $consulta->fetchAll();
  }

  function GetEquiposConferencias(){
    $Campos = "Equipos.id, Imagenes.url";
    $consulta = $this->db->prepare("SELECT ".$Campos." FROM Equipos INNER JOIN Imagenes ON Equipos.imagen = Imagenes.id WHERE Equipos.categoria = 'este'");
    $consulta->execute();
    $equipos["ConfEste"]=$consulta->fetchAll();
    $consulta = $this->db->prepare("SELECT ".$Campos." FROM Equipos INNER JOIN Imagenes ON Equipos.imagen = Imagenes.id WHERE Equipos.categoria = 'oeste'");
    $consulta->execute();
    $equipos["ConfOeste"]=$consulta->fetchAll();
    return $equipos;
  }
}
 ?>
