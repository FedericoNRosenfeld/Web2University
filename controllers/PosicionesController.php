<?php
include_once 'models/PosicionesModel.php';

class PosicionesController{
  function __construct(){
    $this->MPosiciones = new PosicionesModel();
  }

  function agregarPosicion(){
    if(isset($_REQUEST['posicion'])){
        if(!(empty($_REQUEST['posicion']))){
            if($this->MPosiciones->agregarPosicion($_REQUEST['posicion'])) {
              echo "Posicion agregada satisfactoriamente";
            } else {
              echo "Ocurrio un error al intentar crear la nueva posición";
            }
        } else {
          echo "No se cargo la posicion";
        }
    }
  }

  function borrarPosicion(){
    if(isset($_REQUEST['rk_id_posicion'])){
      if($this->MPosiciones->borrarPosicion($_REQUEST['rk_id_posicion'])) {
        echo "Posicion borrada satisfactoriamente";
      } else {
        echo "Ocurrio un error al intentar borrar la posicion";
      }
    } else {
      echo "id no especificado";
    }
  }

  function modificarPosicion(){
     // VERSION CON PASO DE NOMBRE E ID VIA PARAMETRO
      $this->MPosiciones->modificarPosicion($_POST['nombre_posicion'],$_POST['rk_id_posicion']);
  }


}
 ?>
