<?php
include_once 'BaseView.php';

class ADMUsersView extends BaseView{

  function mostrarADMUsers($Usuarios){
    $this->smarty->assign("users",$Usuarios);
    $this->smarty->display('usuario/ADMUsers.tpl');
  }

  function mostrarFormEditUser($Usuario,$Rangos){
    $this->smarty->assign("user",$Usuario);
    $this->smarty->assign("tipos",$Rangos);
    $this->smarty->display('form/FormUserPriv.tpl');
  }
}
?>
