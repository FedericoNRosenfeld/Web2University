<?php
require_once "BaseModel.php";

class ComentariosModel extends BaseModel {

  function getComentariosJugador($id_jugador){
    $consulta = $this->db->prepare("SELECT * FROM Comentarios WHERE item_valorado=".$id_jugador);
    $consulta->execute();
    return $consulta->fetchAll();
  }

  function getAll(){
    $consulta = $this->db->prepare("SELECT * FROM Comentarios");
    $consulta->execute();
    return $consulta->fetchAll();
  }

  function create($Comentario){
    try {
      $consulta = $this->db->prepare('INSERT INTO Comentarios (id_user_coment,comentario,item_valorado,valoracion) VALUES(:v1,:v2,:v3,:v4)');
      $consulta->bindParam(':v1',$Comentario['id_user_coment']);
      $consulta->bindParam(':v2',$Comentario['comentario']);
      $consulta->bindParam(':v3',$Comentario['item_valorado']);
      $consulta->bindParam(':v4',$Comentario['valoracion']);
      $consulta->execute();
      return true;
    }
    catch(PDOException $ex)
    {
      return false;
    }
  }

  function delete($id_comentario){
    $consulta = $this->db->prepare('DELETE FROM Comentarios WHERE id=:idcoment');
    $consulta->bindParam(':idcoment',$id_comentario);
    $consulta->execute();
  }

  function getUserValoracion($id_jugador){
    $consulta = $this->db->prepare("SELECT * FROM Comentarios WHERE item_valorado=:v1");
    $consulta->bindParam(':v1',$id_jugador);
    $consulta->execute();

    $consulta = $consulta->fetchAll();
    $Cantidad=count($consulta);
    $Suma=0;
    foreach ($consulta as $c => $data) {
      $Suma += $data['valoracion'];
    }

    if ($Cantidad == 0){
      return "No hay valoraciones";
    } else {
      return $Suma/($Cantidad+1);
    }
  }
}
 ?>
