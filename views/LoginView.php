<?php
include_once 'BaseView.php';

class LoginView extends BaseView{

  function mostrarLogin(){
    $this->smarty->display('FormSesion.tpl');
  }
}
?>
