<?php
include_once 'BaseView.php';

class AdminEquiposView extends BaseView{

  function mostrar($equipos){
    $this->smarty->assign('equipos', $equipos);
    $this->smarty->display('templates/adminequipos.tpl');
  }
}
 ?>
