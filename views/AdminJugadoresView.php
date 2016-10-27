<?php
include_once 'BaseView.php';

class AdminJugadoresView extends BaseView{

  function mostrar($jugadores,$equipos,$posiciones){
    $this->smarty->assign('jugadores', $jugadores);
    $this->smarty->assign('equipos', $equipos);
    $this->smarty->assign('posiciones', $posiciones);
    $this->smarty->assign('TextBotonFormJugadores',"Crear");
    $this->smarty->display('templates/adminjugadores.tpl');
  }
}
 ?>
