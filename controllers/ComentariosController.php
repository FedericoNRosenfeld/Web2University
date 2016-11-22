<?php
include_once 'controllers/SesionController.php';

include_once 'views/ComentariosJugadoresView.php';

include_once 'models/ComentariosModel.php';
include_once 'models/JugadoresModel.php';

class ComentariosController extends SesionController {
  private $vista;
  private $modelC;
  private $modelJ;

  function __construct(){
    $this->vista = new ComentariosJugadoresView();
    $this->modelC = new ComentariosModel();
    $this->modelJ = new JugadoresModel();
  }

  function MostrarPaginaComentarios(){
    //comprobamos si tenemos el id para mostrar la pagina de comentarios
    if (isset($_REQUEST['id'])){
        $this->vista->mostrar($this->modelJ->getJugador($_REQUEST['id']),$this->esUser());
    }
  }
}
?>
