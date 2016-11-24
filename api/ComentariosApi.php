<?php
require_once 'api_base.php';
include_once '../models/ComentariosModel.php';
include_once '../models/UsuariosModel.php';
include_once "../controllers/SesionController.php";

class ComentariosApi extends ApiBase {
  private $model;
  private $UsrModel;
  private $SesionContrl;

  function __construct($request){
    parent::__construct($request);
    $this->model = new ComentariosModel();
    $this->UsrModel = new UsuariosModel();
    $this->SesionContrl = new SesionController();
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
        if(isset($_POST['comentario']) && isset($_POST['valoracion']) && isset($_POST['item_valorado'])){
          $comentario['id_user_coment'] = $this->UsrModel->getId($this->SesionContrl->usuarioActivo());
          $comentario['comentario'] = $_POST['comentario'];
          $comentario['item_valorado'] = $_POST['item_valorado'];
          $comentario['valoracion'] = $_POST['valoracion'];
          return $this->model->create($comentario);
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
