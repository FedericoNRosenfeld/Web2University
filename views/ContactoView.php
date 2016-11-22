<?php
include_once 'BaseView.php';

class ContactoView extends BaseView{

  function mostrar(){
    $this->smarty->display('contacto/contacto.tpl');
  }

}
?>
