<?php
include_once 'BaseView.php';

class LoginView extends BaseView{

  function mostrar(){
    $this->smarty->display('form/FormSesion.tpl');
  }

  function mostrarRegistrarse(){
    $this->smarty->display('form/FormNuevoUser.tpl');
  }
}
?>
