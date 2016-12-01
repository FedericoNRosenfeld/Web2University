<?php
include_once 'BaseView.php';

class ADMUsersView extends BaseView{

  function mostrarADMUsers($Usuarios){
    $this->smarty->assign("users",$Usuarios);
    $this->smarty->display('usuario/ADMUsers.tpl');
  }

  function mostrarFormEditUser($Usuario){
    $this->smarty->assign("user",$Usuario);
    $Tipos=[["id_rango"=>1,"rango"=>"Usuario comun"],["id_rango"=>2,"rango"=>"Admin"]];
    $this->smarty->assign("tipos",$Tipos);
    $this->smarty->assign("modo","Edit_permiso");
    $this->smarty->display('form/FormUserPriv.tpl');
  }
}
?>
