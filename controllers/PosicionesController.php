<?php
include_once 'models/PosicionesModel.php';

class PosicionesController{
  function __construct(){
    $this->MPosiciones = new PosicionesModel();
  }

  function agregarPosicion(){
    if(isset($_REQUEST['posicion'])){
        if(!(empty($_REQUEST['posicion']))){
            $this->MPosiciones->agregarPosicion($_REQUEST['posicion']);
        }
    }
    $this->mostrarPosiciones();// se recargue la tabla de posiciones en el lugar sin alterar el resto de las cosas
  }

  function borrarPosicion(){
    if(isset($_REQUEST['rk_id_posicion'])){
      $this->model->borrarPosicion($_REQUEST['rk_id_posicion']);
    }
    $this->mostrarPosiciones();// se recargue la tabla de posiciones en el lugar sin alterar el resto de las cosas
  }

  function modificarPosicion(){
    if(isset($_REQUEST['posicion'])){
      $this->model->modificarPosicion($_REQUEST['posicion']);
    }
    $this->mostrarPosiciones();// se recargue la tabla de posiciones en el lugar sin alterar el resto de las cosas
  }
}
 ?>
