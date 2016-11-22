<?php
require_once 'api_base.php';
include_once '../models/ComentariosModel.php';

class ComentariosApi extends ApiBase {
  private $model;

  function __construct($request){
    parent::__construct($request);
    $this->model = new ComentariosModel();
  }

  function comentario(){
    switch ($this->method) {
      case 'GET':
        if(count($this->args) > 0){
          return json_encode($this->model->getComentariosJugador($this->args[0])); //para ver comentarios correspondientes a un jugador determinado
        }
        else{
          return json_encode($this->model->getAll()); //Para ver todos los comentarios
        }
        break;
      case 'DELETE':
        if(count($this->args) > 0) return $this->model->delete($this->args[0]);
        break;
      case 'POST':
        if(isset($_REQUEST['id_comentario'])){
          $comentario = "";
          return $this->model->edit($comentario);
        }
        else{
          return false;
        }
        break;
      default:
            return 'Verbo no soportado';
        break;
    }
  }
}

?>
