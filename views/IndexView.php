<?php
include_once 'BaseView.php';

class IndexView extends BaseView{

  function mostrar(){
    $this->smarty->display('templates/index.tpl');
  }
}
?>
