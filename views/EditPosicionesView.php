<?php
include_once 'BaseView.php';

class EditPosicionesView extends BaseView{

  function mostrar($posicion){
    $this->smarty->assign('nombreposicion', $posicion['nombre_posicion']);
    $this->smarty->display('posicion/EditPosicion.tpl');
  }
}
 ?>
