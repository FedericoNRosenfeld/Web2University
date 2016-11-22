<?php
include_once 'controllers/SesionController.php';

include_once 'models/ImagenesModel.php';

class ImagenesController extends SesionController{

  private $model;

  function __construct() {
    $this->$model = new ImagenesModel();
  }

function AgregarImagen(){
  if( (isset($_FILES['imagen'])) && (isset($_REQUEST['id_jugador']))
{
     $imagenes = array(
       "imagen"=>$_FILES['imagen']
       "jugador"=>$_REQUEST['id_jugador']
       );
     if (!$this->model->agregarImagen($imagenes['id_jugador'],$imagenes['imagen'])){
       echo "error al subir a la DB";
     } else {
       echo "imagenes cargadas satisfactoriamente";
     }
   }
   else{
     echo "jugador con datos incompletos";
   }
 }

function EliminarImagen(){ //ELIMINA UNA IMAGEN DE LA BASE DE DATOS
     $key = $_GET['id'];
     $this->$model ->borrar($key);
}


?>
