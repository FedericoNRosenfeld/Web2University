<?php
include_once 'BaseView.php';

class IndexView extends BaseView{

  function mostrar($UserActual){
    $this->smarty->assign("UserActual",$UserActual);
    $this->smarty->display('nav/index.tpl');
  }
}
?>
