<?php
include_once 'BaseView.php';

class ADMUsersView extends BaseView{

  function mostrarADMUsers($Usuarios){
    $this->smarty->assign("users",$Usuarios);
    $this->smarty->display('usuario/ADMUsers.tpl');
  }
}
?>
