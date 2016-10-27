<?php
include_once 'BaseView.php';

class EquiposView extends BaseView{

  function mostrar($equipos){
    $this->smarty->assign('equipos',$equipos);
    $this->smarty->display('templates/equipos.tpl');
  }

}



 ?>
