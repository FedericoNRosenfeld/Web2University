<?php
include_once 'BaseView.php';

class IndexView extends BaseView{

  function mostrar(){
    $this->smarty->display('nav/index.tpl');
  }
}
?>
