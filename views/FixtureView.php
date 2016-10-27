<?php
include_once 'BaseView.php';

class FixtureView extends BaseView{

  function mostrar(){
    $this->smarty->display('templates/fixture.tpl');
  }

}
 ?>
