<?php
include_once 'BaseView.php';

class ErrorsView extends BaseView{

  function MsgzonaRestringida(){
    $this->smarty->display('nav/AccesoNoAutorizado.tpl');
  }

}
 ?>
