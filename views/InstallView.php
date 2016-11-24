<?php
include_once 'BaseView.php';

class InstallView extends BaseView{

  function mostrarFormInstall(){
    $this->smarty->display('install/FormInstall.tpl');
  }

  function mostrarTodoOk(){
    $this->smarty->display('install/todobien.tpl');
  }

  function mostrarResultados($db_correcto){
    $this->smarty->assign("db_correcto",$db_correcto);
    $this->smarty->display('install/errores.tpl');
  }
}
?>
