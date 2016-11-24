<?php
include_once 'BaseView.php';

class ComentariosJugadoresView extends BaseView{

  function mostrar($jugador,$esUser){
    $this->smarty->assign("jugador",$jugador);
    $this->smarty->assign("esUser",$esUser);
    $this->smarty->display('jugador/ComentariosJugador.tpl');
  }

  function mostrarAdmin(){
    $this->smarty->display('jugador/tablaComentariosAdmin.tpl');
  }

}
?>
