<?php
include_once 'BaseView.php';

class FixtureView extends BaseView{

  function mostrar(){
    $this->smarty->display('equipo/fixture.tpl');
  }

}
 ?>
