<?php
include_once 'BaseView.php';

class HomeView extends BaseView{

  function mostrar(){
    $this->smarty->display('nav/home.tpl');
  }
}
 ?>
