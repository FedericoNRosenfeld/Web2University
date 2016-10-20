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
      $this->model->borrarPosicion($_REQUEST['rk_id_posicion']);
    }
  }

  function modificarPosicion(){
    if(isset($_REQUEST['posicion'])){
      $this->model->modificarPosicion($_REQUEST['posicion']);
    }
  }
}
 ?>
